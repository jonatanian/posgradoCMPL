<?php

namespace App\Http\Controllers;

use Input;
use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Investigador;
use App\Users;
use App\Congreso;
use App\Investigador_indicador;
use App\Estudiante_indicador;

class CongresosController extends Controller
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
        $congresos = Congreso::where('creador_id',$invest['id'])->get();
        return view('posgrado.congresos', array('investigador'=>$this->getUser(), 
                                                'congresos'=>$congresos));
    }

    public function agregar(){
        $investigadores = Investigador::all();
        return view('posgrado.agregar_congreso', array('investigador'=>$this->getUser(),
                                                        'investigadores' => $investigadores,
                                                        ));
    }

    public function crear(Request $request){
        $data = $request->all();
        try{
            $congreso = new Congreso();
            $congreso->nombre_congreso = $data['nombre_congreso'];
            $congreso->alcance = $data['alcance'];
            $congreso->participacion = $data['participacion'];
            if(!empty($data['fecha_inicio']))
                $congreso->fecha_inicio = $data['fecha_inicio'];
            if(!empty($data['fecha_termino']))
                $congreso->fecha_termino = $data['fecha_termino'];
            $congreso->tipo_registro = $data['tipo_registro'];
            $congreso->registro = $data['registro'];
            $congreso->otro = $data['otro'];

            $invest = Investigador::where('user_id',Auth::id())->first();
            $congreso->creador_id = $invest->id;
            $congreso->save();

            if(isset($data['investigadores'])){
                foreach($data['investigadores'] as $investigador){
                    $inv_pro = new Investigador_indicador();
                    $inv_pro->indicador = 4; //Id del indicador Proyectos I+D+i
                    $inv_pro->investigador_id = $investigador;
                    $inv_pro->indicador_id = $congreso->id;
                    $inv_pro->save();
                }
            }

            $estudiantes = explode(",",$data['estudiantes']);
            foreach($estudiantes as $estudiante){
                $est_ind = new Estudiante_indicador();
                $est_ind->estudiante = $estudiante;
                $est_ind->indicador = 4;
                $est_ind->indicador_id = $congreso->id;
                $est_ind->save();
            }

            return redirect('/congresos')->with('success','El congreso se creo de forma exitosa');
        }catch(Exception $e){
            return redirect('/congresos')->with('error','Error en el registro, vuelva a intentar');
        }
    }

    public function editar($id=NULL){
        $congreso = Congreso::find($id);
        $est_ind = Estudiante_indicador::where('indicador_id',$id)->where('indicador',4)->get();
        $estudiante = array();
        foreach($est_ind as $est){
            array_push($estudiante, $est->estudiante);
        }
        $inv_ind = Investigador_indicador::where('indicador_id', $id)->where('indicador',4)->get();
        $investigadores = Investigador::all();
        return view('posgrado.editar_congreso', array('investigador'=>$this->getUser(),
                                                        'congreso' =>$congreso,
                                                        'est_ind' => implode(",",$estudiante),
                                                        'inv_ind' => $inv_ind,
                                                        'investigadores'=>$investigadores,
                                                        'bandera'=>0,
                                                        ));
    }

    public function actualizar(Request $request, $id){
        $data = $request->all();
        try{
            $congreso = Congreso::find($id);
            $congreso->nombre_congreso = $data['nombre_congreso'];
            $congreso->alcance = $data['alcance'];
            $congreso->participacion = $data['participacion'];
            if(!empty($data['fecha_inicio']))
                $congreso->fecha_inicio = $data['fecha_inicio'];
            if(!empty($data['fecha_termino']))
                $congreso->fecha_termino = $data['fecha_termino'];
            $congreso->tipo_registro = $data['tipo_registro'];
            $congreso->registro = $data['registro'];
            $congreso->otro = $data['otro'];
            $congreso->save();

            Investigador_indicador::where('indicador_id',$id)->where('indicador',4)->forceDelete();
            if(isset($data['investigadores'])){
                foreach($data['investigadores'] as $investigador){
                    $inv_pro = new Investigador_indicador();
                    $inv_pro->indicador = 4; //Id del indicador Proyectos I+D+i
                    $inv_pro->investigador_id = $investigador;
                    $inv_pro->indicador_id = $congreso->id;
                    $inv_pro->save();
                }
            }
            Estudiante_indicador::where('indicador_id',$id)->where('indicador',4)->forceDelete();
            $estudiantes = explode(",",$data['estudiantes']);
            foreach($estudiantes as $estudiante){
                $est_ind = new Estudiante_indicador();
                $est_ind->estudiante = $estudiante;
                $est_ind->indicador = 4;
                $est_ind->indicador_id = $congreso->id;
                $est_ind->save();
            }

            return redirect('/congresos')->with('success','El congreso se creo de forma exitosa');
        }catch(Exception $e){
            return redirect('/congresos')->with('error','Error en el registro, vuelva a intentar');
        }
    }

    public function detalles($id = NULL){
        $congreso = Congreso::find($id);
        $est_ind = Estudiante_indicador::where('indicador_id',$id)->where('indicador',4)->get();
        $inv_ind = Investigador_indicador::where('indicador_id', $id)->where('indicador',4)->get();
        $investigadores = Investigador::all();
        return view('posgrado.detalles_congreso', array('investigador'=>$this->getUser(),
                                                        'congreso' =>$congreso,
                                                        'est_ind' => $est_ind,
                                                        'inv_ind' => $inv_ind,
                                                        'investigadores'=>$investigadores,
                                                        ));
    }

    public function eliminar($id=0){
        try{
            Congreso::find($id)->forceDelete();
            return redirect('/congresos')->with('success','El congreso se eliminó de forma exitosa');
        }
        catch(Exception $e){
            return redirect('/congresos')->with('error','Error, vuelva a intentar');
        }
    }
}
