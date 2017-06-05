<?php

namespace App\Http\Controllers;

use Input;
use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Investigador;
use App\Users;
use App\Conferencia;
use App\Investigador_indicador;
use App\Estudiante_indicador;
use App\Servicio;

class ServiciosController extends Controller
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
        $servicios = Servicio::where('creador_id',$invest['id'])->get();
        return view('posgrado.servicios', array('investigador'=>$this->getUser(), 
                                                'servicios'=>$servicios));
    }

    public function agregar(){
         $investigadores = Investigador::all();
        return view('posgrado.agregar_servicio', array('investigador'=>$this->getUser(),
                                                        'investigadores'=>$investigadores,
                                                        ));
    }

    public function crear(Request $request){
        $data = $request->all();
        try{
            $servicio = new Servicio();
            $servicio->servicio = $data['servicio'];
            $servicio->alcance = $data['alcance'];
            if(!empty($data['fecha_inicio']))
                $servicio->fecha_inicio = $data['fecha_inicio'];
            if(!empty($data['fecha_termino']))
                $servicio->fecha_termino = $data['fecha_termino'];
            $servicio->nombre_servicio = $data['nombre_servicio'];
            $servicio->organizacion = $data['organizacion'];
            $servicio->tipo_registro = $data['tipo_registro'];
            if(!empty($data['otro_registro']))
                $servicio->otro_registro = $data['otro_registro'];
            $servicio->registro = $data['registro'];
            $servicio->asistentes = $data['asistentes'];
            $servicio->costo = $data['costo'];

            $invest = Investigador::where('user_id',Auth::id())->first();
            $servicio->creador_id = $invest->id;
            $servicio->save();

            foreach($data['investigadores'] as $investigador){
                $inv_pro = new Investigador_indicador();
                $inv_pro->indicador = 10; //Id del indicador Proyectos I+D+i
                $inv_pro->investigador_id = $investigador;
                $inv_pro->indicador_id = $servicio->id;
                $inv_pro->save();
            }

            $estudiantes = explode(",",$data['estudiantes']);
            foreach($estudiantes as $estudiante){
                $est_ind = new Estudiante_indicador();
                $est_ind->estudiante = $estudiante;
                $est_ind->indicador = 10;
                $est_ind->indicador_id = $servicio->id;
                $est_ind->save();
            }

            return redirect('/servicios')->with('success','El servicio se creo de forma exitosa');
        }catch(Exception $e){
            return redirect('/servicios')->with('error','Error en el registro, vuelva a intentar');
        }
    }

    public function editar($id = NULL){
        $servicio = Servicio::find($id);
        $est_ind = Estudiante_indicador::where('indicador_id',$id)->where('indicador',10)->get();
        $estudiante = array();
        foreach($est_ind as $est){
            array_push($estudiante, $est->estudiante);
        }
        $inv_ind = Investigador_indicador::where('indicador_id', $id)->where('indicador',10)->get();
        $investigadores = Investigador::all();
        return view('posgrado.editar_servicio', array('investigador'=>$this->getUser(),
                                                        'servicio' =>$servicio,
                                                        'est_ind' => implode(",",$estudiante),
                                                        'inv_ind' => $inv_ind,
                                                        'investigadores'=>$investigadores,
                                                        'bandera'=>0,
                                                        ));
    }

    public function actualizar(Request $request, $id){
        $data = $request->all();
        try{
            $servicio = Servicio::find($id);
            $servicio->servicio = $data['servicio'];
            $servicio->alcance = $data['alcance'];
            if(!empty($data['fecha_inicio']))
                $servicio->fecha_inicio = $data['fecha_inicio'];
            if(!empty($data['fecha_termino']))
                $servicio->fecha_termino = $data['fecha_termino'];
            $servicio->nombre_servicio = $data['nombre_servicio'];
            $servicio->organizacion = $data['organizacion'];
            $servicio->tipo_registro = $data['tipo_registro'];
            if(!empty($data['otro_registro']))
                $servicio->otro_registro = $data['otro_registro'];
            $servicio->registro = $data['registro'];
            $servicio->asistentes = $data['asistentes'];
            $servicio->costo = $data['costo'];

            $invest = Investigador::where('user_id',Auth::id())->first();
            $servicio->creador_id = $invest->id;
            $servicio->save();

            Investigador_indicador::where('indicador_id',$id)->where('indicador',10)->forceDelete();
            foreach($data['investigadores'] as $investigador){
                $inv_pro = new Investigador_indicador();
                $inv_pro->indicador = 10; //Id del indicador Proyectos I+D+i
                $inv_pro->investigador_id = $investigador;
                $inv_pro->indicador_id = $servicio->id;
                $inv_pro->save();
            }
            Estudiante_indicador::where('indicador_id',$id)->where('indicador',10)->forceDelete();
            $estudiantes = explode(",",$data['estudiantes']);
            foreach($estudiantes as $estudiante){
                $est_ind = new Estudiante_indicador();
                $est_ind->estudiante = $estudiante;
                $est_ind->indicador = 10;
                $est_ind->indicador_id = $servicio->id;
                $est_ind->save();
            }

            return redirect('/servicios')->with('success','El servicio se editó de forma exitosa');
        }catch(Exception $e){
            return redirect('/servicios')->with('error','Error en el registro, vuelva a intentar');
        }
    }

    public function detalles($id = NULL){
        $servicio = Servicio::find($id);
        $est_ind = Estudiante_indicador::where('indicador_id',$id)->where('indicador',10)->get();
        $inv_ind = Investigador_indicador::where('indicador_id', $id)->where('indicador',10)->get();
        $investigadores = Investigador::all();
        return view('posgrado.detalles_servicio', array('investigador'=>$this->getUser(),
                                                        'servicio' =>$servicio,
                                                        'est_ind' => $est_ind,
                                                        'inv_ind' => $inv_ind,
                                                        'investigadores'=>$investigadores,
                                                        ));
    }

    public function eliminar($id=0){
        try{
            Servicio::find($id)->forceDelete();
            return redirect('/servicios')->with('success','El servicio se eliminó de forma exitosa');
        }
        catch(Exception $e){
            return redirect('/servicios')->with('error','Error, vuelva a intentar');
        }
    }
}
