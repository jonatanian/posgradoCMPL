<?php

namespace App\Http\Controllers;

use Input;
use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Investigador;
use App\Users;
use App\Patente;

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
        return view('posgrado.agregar_patente', array('investigador'=>$this->getUser(),
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
            return redirect('/patentes')->with('success','La patente se creó de forma exitosa');
        }catch(Exception $e){
            return redirect('/patentes')->with('error','Error en el registro, vuelva a intentar');
        }
    }
}
