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
use App\Direccion_cmpl;

class DireccionesCmplController extends Controller
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
        $direcciones = Direccion_cmpl::where('creador_id',$invest['id'])->get();
        return view('posgrado.direccion_cmpl', array('investigador'=>$this->getUser(), 
                                                'direcciones'=>$direcciones));
    }

    public function agregar(){
         $investigadores = Investigador::all();
        return view('posgrado.agregar_direccion_cmpl', array('investigador'=>$this->getUser(),
                                                        'investigadores'=>$investigadores,
                                                        ));
    }

    public function crear(Request $request){
        $data = $request->all();
        try{
            $direccion = new Direccion_cmpl();
            $direccion->programa = $data['programa'];
            $direccion->alumno = $data['alumno'];
            $direccion->titulo= $data['titulo'];
            $direccion->lgac = $data['lgac'];
            $direccion->estatus = $data['estatus'];
            if(!empty($data['fecha_limite']))
                $direccion->fecha_limite = $data['fecha_limite'];

            $invest = Investigador::where('user_id',Auth::id())->first();
            $direccion->creador_id = $invest->id;
            $direccion->save();

            foreach($data['investigadores'] as $investigador){
                $inv_pro = new Investigador_indicador();
                $inv_pro->indicador = 12; //Id del indicador Proyectos I+D+i
                $inv_pro->investigador_id = $investigador;
                $inv_pro->indicador_id = $direccion->id;
                $inv_pro->save();
            }

            return redirect('/direccion_cmpl')->with('success','La dirección se creo de forma exitosa');
        }catch(Exception $e){
            return redirect('/direccion_cmpl')->with('error','Error en el registro, vuelva a intentar');
        }
    }

    public function editar($id = NULL){
        $direccion = Direccion_cmpl::find($id);
        $inv_ind = Investigador_indicador::where('indicador_id', $id)->where('indicador',12)->get();
        $investigadores = Investigador::all();
        return view('posgrado.editar_direccion_cmpl', array('investigador'=>$this->getUser(),
                                                        'direccion' =>$direccion,
                                                        'inv_ind' => $inv_ind,
                                                        'investigadores'=>$investigadores,
                                                        'bandera'=>0,
                                                        ));
    }

    public function actualizar(Request $request, $id){
        $data = $request->all();
        try{
            $direccion = Direccion_cmpl::find($id);
            $direccion->programa = $data['programa'];
            $direccion->alumno = $data['alumno'];
            $direccion->titulo= $data['titulo'];
            $direccion->lgac = $data['lgac'];
            $direccion->estatus = $data['estatus'];
            if(!empty($data['fecha_limite']))
                $direccion->fecha_limite = $data['fecha_limite'];
            $direccion->save();

            Investigador_indicador::where('indicador_id',$id)->where('indicador',12)->forceDelete();

            foreach($data['investigadores'] as $investigador){
                $inv_pro = new Investigador_indicador();
                $inv_pro->indicador = 12; //Id del indicador Proyectos I+D+i
                $inv_pro->investigador_id = $investigador;
                $inv_pro->indicador_id = $direccion->id;
                $inv_pro->save();
            }

            return redirect('/direccion_cmpl')->with('success','La dirección se creo de forma exitosa');
        }catch(Exception $e){
            return redirect('/direccion_cmpl')->with('error','Error en el registro, vuelva a intentar');
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
            Direccion_cmpl::find($id)->forceDelete();
            return redirect('/direccion_cmpl')->with('success','La dirección se eliminó de forma exitosa');
        }
        catch(Exception $e){
            return redirect('/direccion_cmpl')->with('error','Error, vuelva a intentar');
        }
    }
}
