<?php

namespace App\Http\Controllers;

use Input;
use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Investigador;
use App\Users;
use App\Proyecto;
use App\Financiamiento;

class ProyectosController extends Controller
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
        $proyectos = Proyecto::where('creador_id',$invest['id'])->get();
        return view('posgrado.proyectos', array('investigador'=>$this->getUser(), 
                                                'proyectos'=>$proyectos));
    }

    public function agregar(){
        $financiamiento = Financiamiento::all();
        return view('posgrado.agregar_proyecto', array('investigador'=>$this->getUser(),
                                                        'financiamiento'=>$financiamiento
                                                        ));
    }

    public function crear(Request $request){
        $data = $request->all();
        try{
            $proyecto = new Proyecto();
            $proyecto->nombre_proyecto = $data['nombre_proyecto'];
            $proyecto->financiamiento_id = $data['financiamiento_id'];
            $proyecto->otro = $data['otro'];
            $proyecto->programa = $data['programa'];
            $proyecto->estatus = $data['estatus'];
            if(!empty($data['fecha_presentacion']))
                $proyecto->fecha_presentacion = $data['fecha_presentacion'];
            if(!empty($data['fecha_vencimiento']))
                $proyecto->fecha_vencimiento = $data['fecha_vencimiento'];
            if(!empty($data['fecha_vigencia_inicio']))
                $proyecto->fecha_vigencia_inicio = $data['fecha_vigencia_inicio'];
            if(!empty($data['fecha_vigencia_fin']))
                $proyecto->fecha_vigencia_fin = $data['fecha_vigencia_fin'];
            if(!empty($data['fecha_notificacion']))
                $proyecto->fecha_notificacion = $data['fecha_notificacion'];
            $proyecto->monto_total = $data['monto_total'];
            $proyecto->monto_p2 = $data['monto_p2'];
            $proyecto->monto_p3 = $data['monto_p3'];
            $proyecto->monto_p5 = $data['monto_p5'];
            $proyecto->estimulos = $data['estimulos'];
            $invest = Investigador::where('user_id',Auth::id())->first();
            $proyecto->creador_id = $invest->id;
            $proyecto->save();
            return redirect('/proyectos')->with('success','El proyecto se creo de forma exitosa');
        }catch(Exception $e){
            return redirect('/proyectos')->with('error','Error en el registro del proyecto, vuelva a intentar');
        }
    }

    public function editar($id = NULL){
        $financiamiento = Financiamiento::all();
        $proyecto = Proyecto::find($id);
        return view('posgrado.editar_proyecto', array('investigador'=>$this->getUser(),
                                                        'financiamiento'=>$financiamiento,
                                                        'proyecto' =>$proyecto,
                                                        ));
    }

    public function actualizar(Request $request, $id=0){
        $data = $request->all();
        try{
            $proyecto = Proyecto::find($id);
            $proyecto->nombre_proyecto = $data['nombre_proyecto'];
            $proyecto->financiamiento_id = $data['financiamiento_id'];
            $proyecto->otro = $data['otro'];
            $proyecto->programa = $data['programa'];
            $proyecto->estatus = $data['estatus'];
            if(!empty($data['fecha_presentacion']))
                $proyecto->fecha_presentacion = $data['fecha_presentacion'];
            if(!empty($data['fecha_vencimiento']))
                $proyecto->fecha_vencimiento = $data['fecha_vencimiento'];
            if(!empty($data['fecha_vigencia_inicio']))
                $proyecto->fecha_vigencia_inicio = $data['fecha_vigencia_inicio'];
            if(!empty($data['fecha_vigencia_fin']))
                $proyecto->fecha_vigencia_fin = $data['fecha_vigencia_fin'];
            if(!empty($data['fecha_notificacion']))
                $proyecto->fecha_notificacion = $data['fecha_notificacion'];
            $proyecto->monto_total = $data['monto_total'];
            $proyecto->monto_p2 = $data['monto_p2'];
            $proyecto->monto_p3 = $data['monto_p3'];
            $proyecto->monto_p5 = $data['monto_p5'];
            $proyecto->estimulos = $data['estimulos'];
            $invest = Investigador::where('user_id',Auth::id())->first();
            $proyecto->creador_id = $invest->id;
            $proyecto->save();
            return redirect('/proyectos')->with('success','El proyecto se actualizó de forma exitosa');
        }catch(Exception $e){
            return redirect('/proyectos')->with('error','Error en la actualización del proyecto, vuelva a intentar');
        }
    }

    public function eliminar($id=0){
        try{
            Proyecto::find($id)->forceDelete();
            return redirect('/proyectos')->with('success','El proyecto se eliminó de forma exitosa');
        }
        catch(Exception $e){
            return redirect('/proyectos')->with('error','Erroro, vuelva a intentar');
        }
    }
}
