<?php

namespace App\Http\Controllers;

use Input;
use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Investigador;
use App\Users;
use App\Movilidad;

class MovilidadController extends Controller
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
        $movilidad = Movilidad::where('creador_id',$invest['id'])->get();
        return view('posgrado.movilidad', array('investigador'=>$this->getUser(), 
                                                'movilidad'=>$movilidad));
    }

    public function agregar(){
        return view('posgrado.agregar_movilidad', array('investigador'=>$this->getUser(),
                                                        ));
    }

    public function crear(Request $request){
        $data = $request->all();
        try{
            $movilidad = new Movilidad();
            $movilidad->tipo = $data['tipo'];
            $movilidad->nombre_programa = $data['nombre_programa'];
            if(!empty($data['fecha_inicio']))
                $movilidad->fecha_inicio = $data['fecha_inicio'];
            if(!empty($data['fecha_termino']))
                $movilidad->fecha_termino = $data['fecha_termino'];
            $movilidad->alcance = $data['alcance'];
            $movilidad->institucion_destino = $data['institucion_destino'];

            $invest = Investigador::where('user_id',Auth::id())->first();
            $movilidad->creador_id = $invest->id;
            $movilidad->save();



            return redirect('/movilidad')->with('success','La movilidad se creo de forma exitosa');
        }catch(Exception $e){
            return redirect('/movilidad')->with('error','Error en el registro, vuelva a intentar');
        }
    }

    public function editar($id){
        $movilidad = Movilidad::find($id);
        return view('posgrado.editar_movilidad', array('investigador'=>$this->getUser(),
                                                        'movilidad'=>$movilidad,
                                                        ));
    }

    public function actualizar(Request $request, $id){
        $data = $request->all();
        try{
            $movilidad = Movilidad::find($id);
            $movilidad->tipo = $data['tipo'];
            $movilidad->nombre_programa = $data['nombre_programa'];
            if(!empty($data['fecha_inicio']))
                $movilidad->fecha_inicio = $data['fecha_inicio'];
            if(!empty($data['fecha_termino']))
                $movilidad->fecha_termino = $data['fecha_termino'];
            $movilidad->alcance = $data['alcance'];
            $movilidad->institucion_destino = $data['institucion_destino'];

            $invest = Investigador::where('user_id',Auth::id())->first();
            $movilidad->creador_id = $invest->id;
            $movilidad->save();

            return redirect('/movilidad')->with('success','La movilidad se modificó de forma exitosa');
        }catch(Exception $e){
            return redirect('/movilidad')->with('error','Error en el registro, vuelva a intentar');
        }
    }

    public function detalles($id = NULL){
        $movilidad = Movilidad::find($id);
        return view('posgrado.detalles_movilidad', array('investigador'=>$this->getUser(),
                                                        'movilidad' =>$movilidad,
                                                        ));
    }

    public function eliminar($id=0){
        try{
            Movilidad::find($id)->forceDelete();
            return redirect('/movilidad')->with('success','La movilidad se eliminó de forma exitosa');
        }
        catch(Exception $e){
            return redirect('/movilidad')->with('error','Error, vuelva a intentar');
        }
    }
}
