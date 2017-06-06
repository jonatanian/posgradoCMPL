<?php

namespace App\Http\Controllers;

use Input;
use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Investigador;
use App\Users;
use App\Software;

class SoftwareController extends Controller
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
        $software = Software::where('creador_id',$invest['id'])->get();
        return view('posgrado.software', array('investigador'=>$this->getUser(), 
                                                'software'=>$software));
    }

    public function agregar(){
        return view('posgrado.agregar_software', array('investigador'=>$this->getUser(),
                                                        ));
    }

    public function crear(Request $request){
        $data = $request->all();
        try{
            $software = new Software();
            $software->descripcion = $data['descripcion'];
            if(!empty($data['fecha_inicio']))
                $software->fecha_inicio = $data['fecha_inicio'];
            if(!empty($data['fecha_termino']))
                $software->fecha_termino = $data['fecha_termino'];
            $software->registro = $data['registro'];
            $software->estatus = $data['estatus'];
            if(!empty($data['fecha_aprobacion']))
                $software->fecha_aprobacion = $data['fecha_aprobacion'];
            $software->area_aplicacion = $data['area_aplicacion'];

            $invest = Investigador::where('user_id',Auth::id())->first();
            $software->creador_id = $invest->id;
            $software->save();
            return redirect('/software')->with('success','El software se creó de forma exitosa');
        }catch(Exception $e){
            return redirect('/software')->with('error','Error en el registro, vuelva a intentar');
        }
    }

    public function editar($id){
        $software = Software::find($id);
        return view('posgrado.editar_software', array('investigador'=>$this->getUser(),
                                                        'software'=>$software,
                                                        ));
    }

    public function actualizar(Request $request, $id){
        $data = $request->all();
        try{
            $software = Software::find($id);
            $software->descripcion = $data['descripcion'];
            if(!empty($data['fecha_inicio']))
                $software->fecha_inicio = $data['fecha_inicio'];
            if(!empty($data['fecha_termino']))
                $software->fecha_termino = $data['fecha_termino'];
            $software->registro = $data['registro'];
            $software->estatus = $data['estatus'];
            if(!empty($data['fecha_aprobacion']))
                $software->fecha_aprobacion = $data['fecha_aprobacion'];
            $software->area_aplicacion = $data['area_aplicacion'];
            $software->save();
            return redirect('/software')->with('success','El software se modificó de forma exitosa');
        }catch(Exception $e){
            return redirect('/software')->with('error','Error en el registro, vuelva a intentar');
        }
    }

    public function detalles($id = NULL){
        $software = Software::find($id);
        return view('posgrado.detalles_software', array('investigador'=>$this->getUser(),
                                                        'software' =>$software,
                                                        ));
    }

    public function eliminar($id=0){
        try{
            Software::find($id)->forceDelete();
            return redirect('/software')->with('success','El software se eliminó de forma exitosa');
        }
        catch(Exception $e){
            return redirect('/software')->with('error','Error, vuelva a intentar');
        }
    }
}
