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

class ConferenciasController extends Controller
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
        $conferencias = Conferencia::where('creador_id',$invest['id'])->get();
        return view('posgrado.conferencias', array('investigador'=>$this->getUser(), 
                                                'conferencias'=>$conferencias));
    }

    public function agregar(){
         $investigadores = Investigador::all();
        return view('posgrado.agregar_conferencia', array('investigador'=>$this->getUser(),
                                                            'investigadores'=>$investigadores,
                                                        ));
    }

    public function crear(Request $request){
        $data = $request->all();
        try{
            $conferencia = new Conferencia();
            if(!empty($data['fecha_inicio']))
                $conferencia->fecha_inicio = $data['fecha_inicio'];
            if(!empty($data['fecha_termino']))
                $conferencia->fecha_termino = $data['fecha_termino'];
            $conferencia->alcance = $data['alcance'];
            $conferencia->tema_participacion = $data['tema_participacion'];
            $conferencia->nombre_programa = $data['nombre_programa'];

            $invest = Investigador::where('user_id',Auth::id())->first();
            $conferencia->creador_id = $invest->id;
            $conferencia->save();

            foreach($data['investigadores'] as $investigador){
                $inv_pro = new Investigador_indicador();
                $inv_pro->indicador = 7; //Id del indicador Proyectos I+D+i
                $inv_pro->investigador_id = $investigador;
                $inv_pro->indicador_id = $conferencia->id;
                $inv_pro->save();
            }

            $estudiantes = explode(",",$data['estudiantes']);
            foreach($estudiantes as $estudiante){
                $est_ind = new Estudiante_indicador();
                $est_ind->estudiante = $estudiante;
                $est_ind->indicador = 7;
                $est_ind->indicador_id = $conferencia->id;
                $est_ind->save();
            }

            return redirect('/conferencias')->with('success','La conferecia se creo de forma exitosa');
        }catch(Exception $e){
            return redirect('/conferencias')->with('error','Error en el registro, vuelva a intentar');
        }
    }

    public function editar($id = NULL){
        $conferencia = Conferencia::find($id);
        $est_ind = Estudiante_indicador::where('indicador_id',$id)->where('indicador',7)->get();
        $estudiante = array();
        foreach($est_ind as $est){
            array_push($estudiante, $est->estudiante);
        }
        $inv_ind = Investigador_indicador::where('indicador_id', $id)->where('indicador',7)->get();
        $investigadores = Investigador::all();
        return view('posgrado.editar_conferencia', array('investigador'=>$this->getUser(),
                                                        'conferencia' =>$conferencia,
                                                        'est_ind' => implode(",",$estudiante),
                                                        'inv_ind' => $inv_ind,
                                                        'investigadores'=>$investigadores,
                                                        'bandera'=>0,
                                                        ));
    }

    public function actualizar(Request $request, $id){
        $data = $request->all();
        try{
            $conferencia = Conferencia::find($id);
            if(!empty($data['fecha_inicio']))
                $conferencia->fecha_inicio = $data['fecha_inicio'];
            if(!empty($data['fecha_termino']))
                $conferencia->fecha_termino = $data['fecha_termino'];
            $conferencia->alcance = $data['alcance'];
            $conferencia->tema_participacion = $data['tema_participacion'];
            $conferencia->nombre_programa = $data['nombre_programa'];

            $invest = Investigador::where('user_id',Auth::id())->first();
            $conferencia->creador_id = $invest->id;
            $conferencia->save();

            Investigador_indicador::where('indicador_id',$id)->where('indicador',7)->forceDelete();

            foreach($data['investigadores'] as $investigador){
                $inv_pro = new Investigador_indicador();
                $inv_pro->indicador = 7; //Id del indicador Proyectos I+D+i
                $inv_pro->investigador_id = $investigador;
                $inv_pro->indicador_id = $conferencia->id;
                $inv_pro->save();
            }

            Estudiante_indicador::where('indicador_id',$id)->where('indicador',7)->forceDelete();

            $estudiantes = explode(",",$data['estudiantes']);
            foreach($estudiantes as $estudiante){
                $est_ind = new Estudiante_indicador();
                $est_ind->estudiante = $estudiante;
                $est_ind->indicador = 7;
                $est_ind->indicador_id = $conferencia->id;
                $est_ind->save();
            }

            return redirect('/conferencias')->with('success','La conferecia se editó de forma exitosa');
        }catch(Exception $e){
            return redirect('/conferencias')->with('error','Error en el registro, vuelva a intentar');
        }
    }

    public function detalles($id = NULL){
        $conferencia = Conferencia::find($id);
        $est_ind = Estudiante_indicador::where('indicador_id',$id)->where('indicador',7)->get();
        $inv_ind = Investigador_indicador::where('indicador_id', $id)->where('indicador',7)->get();
        $investigadores = Investigador::all();
        return view('posgrado.detalles_conferencia', array('investigador'=>$this->getUser(),
                                                        'conferencia' =>$conferencia,
                                                        'est_ind' => $est_ind,
                                                        'inv_ind' => $inv_ind,
                                                        'investigadores'=>$investigadores,
                                                        ));
    }

    public function eliminar($id=0){
        try{
            Conferencia::find($id)->forceDelete();
            return redirect('/conferencias')->with('success','La conferencia se eliminó de forma exitosa');
        }
        catch(Exception $e){
            return redirect('/conferencias')->with('error','Error, vuelva a intentar');
        }
    }
}
