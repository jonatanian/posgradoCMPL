<?php

namespace App\Http\Controllers;

use Input;
use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Investigador;
use App\Users;
use App\Congreso;

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
        return view('posgrado.agregar_congreso', array('investigador'=>$this->getUser(),
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
            return redirect('/congresos')->with('success','El congreso se creo de forma exitosa');
        }catch(Exception $e){
            return redirect('/congresos')->with('error','Error en el registro, vuelva a intentar');
        }
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
