<?php

namespace App\Http\Controllers;

use Input;
use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Investigador;
use App\Users;
use App\Transferencia;

class TransferenciasController extends Controller
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
        $transferencias = Transferencia::where('creador_id',$invest['id'])->get();
        return view('posgrado.transferencia', array('investigador'=>$this->getUser(), 
                                                'transferencias'=>$transferencias));
    }

    public function agregar(){
        return view('posgrado.agregar_transferencia', array('investigador'=>$this->getUser(),
                                                        ));
    }

    public function crear(Request $request){
        $data = $request->all();
        try{
            $transferencia = new Transferencia();
            $transferencia->nombre_transferencia = $data['nombre_transferencia'];
            $transferencia->tipo = $data['tipo'];
            $transferencia->licencia = $data['licencia'];
            $transferencia->estatus = $data['estatus'];
            if(!empty($data['fecha_inicio']))
                $transferencia->fecha_inicio = $data['fecha_inicio'];
            if(!empty($data['fecha_termino']))
                $transferencia->fecha_termino = $data['fecha_termino'];
            
            $transferencia->receptor = $data['receptor'];
            $transferencia->monto = $data['monto'];
            $invest = Investigador::where('user_id',Auth::id())->first();
            $transferencia->creador_id = $invest->id;
            $transferencia->save();
            return redirect('/transferencias')->with('success','La transferencia se creó de forma exitosa');
        }catch(Exception $e){
            return redirect('/transferencias')->with('error','Error en el registro, vuelva a intentar');
        }
    }

    public function editar($id = NULL){
        $transferencia = Transferencia::find($id);
        return view('posgrado.editar_transferencia', array('investigador'=>$this->getUser(),
                                                        'transferencia' =>$transferencia,
                                                        ));
    }

    public function actualizar(Request $request, $id){
        $data = $request->all();
        try{
            $transferencia = Transferencia::find($id);
            $transferencia->nombre_transferencia = $data['nombre_transferencia'];
            $transferencia->tipo = $data['tipo'];
            $transferencia->licencia = $data['licencia'];
            $transferencia->estatus = $data['estatus'];
            if(!empty($data['fecha_inicio']))
                $transferencia->fecha_inicio = $data['fecha_inicio'];
            if(!empty($data['fecha_termino']))
                $transferencia->fecha_termino = $data['fecha_termino'];
            
            $transferencia->receptor = $data['receptor'];
            $transferencia->monto = $data['monto'];
            $transferencia->save();
            return redirect('/transferencias')->with('success','La transferencia se modificó de forma exitosa');
        }catch(Exception $e){
            return redirect('/transferencias')->with('error','Error en el registro, vuelva a intentar');
        }
    }

    public function detalles($id = NULL){
        $transferencia = Transferencia::find($id);
        $investigadores = Investigador::all();
        return view('posgrado.detalles_transferencia', array('investigador'=>$this->getUser(),
                                                        'transferencia' =>$transferencia,
                                                        'investigadores'=>$investigadores,
                                                        'bandera'=>0,
                                                        ));
    }

    public function eliminar($id=0){
        try{
            Transferencia::find($id)->forceDelete();
            return redirect('/transferencias')->with('success','La transferencia se eliminó de forma exitosa');
        }
        catch(Exception $e){
            return redirect('/transferencias')->with('error','Error, vuelva a intentar');
        }
    }
}
