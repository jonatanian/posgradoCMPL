<?php

namespace App\Http\Controllers;

use Input;
use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Investigador;
use App\Users;
use App\Patente;
use App\Investigador_indicador;

class PatentesController extends Controller
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
        $patentes = Patente::where('creador_id',$invest['id'])->get();
        return view('posgrado.patentes', array('investigador'=>$this->getUser(), 
                                                'patentes'=>$patentes));
    }

    public function agregar(){
        $investigadores = Investigador::all();
        return view('posgrado.agregar_patente', array('investigador'=>$this->getUser(),
                                                        'investigadores'=>$investigadores,
                                                        ));
    }

    public function crear(Request $request){
        $data = $request->all();
        try{
            $patente = new Patente();
            $patente->nombre_patente = $data['nombre_patente'];
            $patente->estatus = $data['estatus'];
            if(!empty($data['fecha_forma']))
                $patente->fecha_forma = $data['fecha_forma'];
            if(!empty($data['fecha_fondo']))
                $patente->fecha_fondo = $data['fecha_fondo'];
            if(!empty($data['fecha_notificacion']))
                $patente->fecha_notificacion = $data['fecha_notificacion'];
            $patente->registro = $data['registro'];
            $invest = Investigador::where('user_id',Auth::id())->first();
            $patente->creador_id = $invest->id;
            $patente->save();

            foreach($data['investigadores'] as $investigador){
                $inv_pro = new Investigador_indicador();
                $inv_pro->indicador = 5; //Id del indicador Proyectos I+D+i
                $inv_pro->investigador_id = $investigador;
                $inv_pro->indicador_id = $patente->id;
                $inv_pro->save();
            }

            return redirect('/patentes')->with('success','La patente se creó de forma exitosa');
        }catch(Exception $e){
            return redirect('/patentes')->with('error','Error en el registro, vuelva a intentar');
        }
    }

    public function editar($id = NULL){
        $patente = Patente::find($id);
        $inv_ind = Investigador_indicador::where('indicador_id', $id)->where('indicador',5)->get();
        $investigadores = Investigador::all();
        return view('posgrado.editar_patente', array('investigador'=>$this->getUser(),
                                                        'patente' =>$patente,
                                                        'inv_ind' => $inv_ind,
                                                        'investigadores'=>$investigadores,
                                                        'bandera'=>0,
                                                        ));
    }

    public function actualizar(Request $request, $id){
        $data = $request->all();
        try{
            $patente = Patente::find($id);
            $patente->nombre_patente = $data['nombre_patente'];
            $patente->estatus = $data['estatus'];
            if(!empty($data['fecha_forma']))
                $patente->fecha_forma = $data['fecha_forma'];
            if(!empty($data['fecha_fondo']))
                $patente->fecha_fondo = $data['fecha_fondo'];
            if(!empty($data['fecha_notificacion']))
                $patente->fecha_notificacion = $data['fecha_notificacion'];
            $patente->registro = $data['registro'];
            $invest = Investigador::where('user_id',Auth::id())->first();
            $patente->creador_id = $invest->id;
            $patente->save();

            Investigador_indicador::where('indicador_id',$id)->where('indicador',5)->forceDelete();

            foreach($data['investigadores'] as $investigador){
                $inv_pro = new Investigador_indicador();
                $inv_pro->indicador = 5; //Id del indicador Proyectos I+D+i
                $inv_pro->investigador_id = $investigador;
                $inv_pro->indicador_id = $patente->id;
                $inv_pro->save();
            }

            return redirect('/patentes')->with('success','La patente se actualizó de forma exitosa');
        }catch(Exception $e){
            return redirect('/patentes')->with('error','Error en el registro, vuelva a intentar');
        }
    }

    public function detalles($id = NULL){
        $patente = Patente::find($id);
        $inv_ind = Investigador_indicador::where('indicador_id', $id)->where('indicador',5)->get();
        $investigadores = Investigador::all();
        return view('posgrado.detalles_patente', array('investigador'=>$this->getUser(),
                                                        'patente' =>$patente,
                                                        'inv_ind' => $inv_ind,
                                                        'investigadores'=>$investigadores,
                                                        ));
    }

    public function eliminar($id=0){
        try{
            Patente::find($id)->forceDelete();
            return redirect('/patentes')->with('success','La patente se eliminó de forma exitosa');
        }
        catch(Exception $e){
            return redirect('/patentes')->with('error','Error, vuelva a intentar');
        }
    }
}
