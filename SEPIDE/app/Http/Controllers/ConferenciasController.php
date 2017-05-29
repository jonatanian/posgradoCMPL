<?php

namespace App\Http\Controllers;

use Input;
use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Investigador;
use App\Users;
use App\Conferencia;

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
        return view('posgrado.agregar_conferencia', array('investigador'=>$this->getUser(),
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
            return redirect('/conferencias')->with('success','La conferecia se creo de forma exitosa');
        }catch(Exception $e){
            return redirect('/conferencias')->with('error','Error en el registro, vuelva a intentar');
        }
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
