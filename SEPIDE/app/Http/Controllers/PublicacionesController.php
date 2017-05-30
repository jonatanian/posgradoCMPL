<?php

namespace App\Http\Controllers;

use Input;
use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Investigador;
use App\Users;
use App\Publicacion;
use App\Investigador_indicador;
use App\Estudiante_indicador;

class PublicacionesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Create a new controller instance.
     *
     * @return str
     */
     public function getUser(){
        $investigador = new Investigador;
        return $investigador->getUser();
     }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invest = $this->getUser();
        $publicaciones = Publicacion::where('creador_id',$invest['id'])->get();
        return view('posgrado.publicaciones', array('investigador'=>$this->getUser(), 
                                                'publicaciones'=>$publicaciones));
    }

    public function agregar(){
        $investigadores = Investigador::all();
        return view('posgrado.agregar_publicacion', array('investigador'=>$this->getUser(),
                                                        'investigadores'=>$investigadores,
                                                        ));
    }

    public function crear(Request $request){
        $data = $request->all();
        try{
            $publicacion = new Publicacion();
            $publicacion->nombre_publicacion = $data['nombre_publicacion'];
            $publicacion->tipo = $data['tipo'];
            $publicacion->alcance = $data['alcance'];
            $publicacion->medio_publicacion = $data['medio_publicacion'];
            $publicacion->tipo_registro = $data['tipo_registro'];
            $publicacion->registro = $data['registro'];
            $publicacion->otro = $data['otro'];
            $publicacion->otro_registro = $data['otro_registro'];

            if(!empty($data['fecha_aceptacion']))
                $publicacion->fecha_aceptacion = $data['fecha_aceptacion'];
            if(!empty($data['fecha_publicacion']))
                $publicacion->fecha_publicacion = $data['fecha_publicacion'];

            $invest = Investigador::where('user_id',Auth::id())->first();
            $publicacion->creador_id = $invest->id;
            $publicacion->save();

            foreach($data['investigadores'] as $investigador){
                $inv_pro = new Investigador_indicador();
                $inv_pro->indicador = 3; //Id del indicador Proyectos I+D+i
                $inv_pro->investigador_id = $investigador;
                $inv_pro->indicador_id = $publicacion->id;
                $inv_pro->save();
            }

            $estudiantes = explode(",",$data['estudiantes']);
            foreach($estudiantes as $estudiante){
                $est_ind = new Estudiante_indicador();
                $est_ind->estudiante = $estudiante;
                $est_ind->indicador = 3;
                $est_ind->indicador_id = $publicacion->id;
                $est_ind->save();
            }

            return redirect('/publicaciones')->with('success','La publicación se creo de forma exitosa');
        }catch(Exception $e){
            return redirect('/publicaciones')->with('error','Error en el registro del proyecto, vuelva a intentar');
        }
    }

    public function actualizar(Request $request, $id){
        $data = $request->all();
        try{
            $publicacion = Publicacion::find($id);
            $publicacion->nombre_publicacion = $data['nombre_publicacion'];
            $publicacion->tipo = $data['tipo'];
            $publicacion->alcance = $data['alcance'];
            $publicacion->medio_publicacion = $data['medio_publicacion'];
            $publicacion->tipo_registro = $data['tipo_registro'];
            $publicacion->registro = $data['registro'];
            $publicacion->otro = $data['otro'];
            $publicacion->otro_registro = $data['otro_registro'];

            if(!empty($data['fecha_aceptacion']))
                $publicacion->fecha_aceptacion = $data['fecha_aceptacion'];
            if(!empty($data['fecha_publicacion']))
                $publicacion->fecha_publicacion = $data['fecha_publicacion'];

            $invest = Investigador::where('user_id',Auth::id())->first();
            $publicacion->creador_id = $invest->id;
            $publicacion->save();

            Investigador_indicador::where('indicador_id',$id)->where('indicador',3)->forceDelete();
            foreach($data['investigadores'] as $investigador){
                $inv_pro = new Investigador_indicador();
                $inv_pro->indicador = 3; //Id del indicador Proyectos I+D+i
                $inv_pro->investigador_id = $investigador;
                $inv_pro->indicador_id = $publicacion->id;
                $inv_pro->save();
            }
            Estudiante_indicador::where('indicador_id',$id)->where('indicador',3)->forceDelete();
            $estudiantes = explode(",",$data['estudiantes']);
            foreach($estudiantes as $estudiante){
                $est_ind = new Estudiante_indicador();
                $est_ind->estudiante = $estudiante;
                $est_ind->indicador = 3;
                $est_ind->indicador_id = $publicacion->id;
                $est_ind->save();
            }

            return redirect('/publicaciones')->with('success','El proyecto se creo de forma exitosa');
        }catch(Exception $e){
            return redirect('/publicaciones')->with('error','Error en el registro del proyecto, vuelva a intentar');
        }
    }

    public function editar($id = NULL){
        $publicacion = Publicacion::find($id);
        $est_ind = Estudiante_indicador::where('indicador_id',$id)->where('indicador',3)->get();
        $estudiante = array();
        foreach($est_ind as $est){
            array_push($estudiante, $est->estudiante);
        }
        $inv_ind = Investigador_indicador::where('indicador_id', $id)->where('indicador',3)->get();
        $investigadores = Investigador::all();
        return view('posgrado.editar_publicacion', array('investigador'=>$this->getUser(),
                                                        'publicacion' =>$publicacion,
                                                        'est_ind' => implode(",",$estudiante),
                                                        'inv_ind' => $inv_ind,
                                                        'investigadores'=>$investigadores,
                                                        'bandera'=>0,
                                                        ));
    }

    public function detalles($id = NULL){
        $publicacion = Publicacion::find($id);
        $est_ind = Estudiante_indicador::where('indicador_id',$id)->where('indicador',3)->get();
        $inv_ind = Investigador_indicador::where('indicador_id', $id)->where('indicador',3)->get();
        $investigadores = Investigador::all();
        return view('posgrado.detalles_publicacion', array('investigador'=>$this->getUser(),
                                                        'publicacion' =>$publicacion,
                                                        'est_ind' => $est_ind,
                                                        'inv_ind' => $inv_ind,
                                                        'investigadores'=>$investigadores,
                                                        ));
    }

    public function eliminar($id=0){
        try{
            Publicacion::find($id)->forceDelete();
            return redirect('/publicaciones')->with('success','La publicación se eliminó de forma exitosa');
        }
        catch(Exception $e){
            return redirect('/publicaciones')->with('error','Error, vuelva a intentar');
        }
    }
}
