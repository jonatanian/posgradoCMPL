<?php

namespace App\Http\Controllers;

use Input;
use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Investigador;
use App\Users;
use App\Docencia;
use App\Docencia_invitado;
use App\Estudiante_indicador;

class DocenciasController extends Controller
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
        $docencias = Docencia::where('creador_id',$invest['id'])->get();
        $asistentes = Estudiante_indicador::where('indicador',8)->get();
        return view('posgrado.docencia', array('investigador'=>$this->getUser(), 
                                                'asistentes' => $asistentes,
                                                'docencias'=>$docencias));
    }

    public function agregar(){
        return view('posgrado.agregar_docencia', array('investigador'=>$this->getUser(),
                                                        ));
    }

    public function crear(Request $request){
        $data = $request->all();
        try{
            $docencia = new Docencia();
            if(!empty($data['fecha_inicio']))
                $docencia->fecha_inicio = $data['fecha_inicio'];
            if(!empty($data['fecha_termino']))
                $docencia->fecha_termino = $data['fecha_termino'];
            $docencia->tipo_alcance = $data['tipo_alcance'];
            $docencia->asignaturas = $data['asignaturas'];
            $invest = Investigador::where('user_id',Auth::id())->first();
            $docencia->creador_id = $invest->id;
            $docencia->save();

            if(isset($data['nivel1'])){
                $invitados = explode(',', $data['medio_superior']);
                foreach($invitados as $invitado){
                    $doc_inv = new Docencia_invitado();
                    $doc_inv->docencia_id = $docencia->id;
                    $doc_inv->tipo = $data['nivel1'];
                    $doc_inv->nombre_escuela = $invitado;
                    $doc_inv->save();
                }
            }
            if(isset($data['nivel2'])){
                $invitados = explode(',', $data['superior']);
                foreach($invitados as $invitado){
                    $doc_inv = new Docencia_invitado();
                    $doc_inv->docencia_id = $docencia->id;
                    $doc_inv->tipo = $data['nivel2'];
                    $doc_inv->nombre_escuela = $invitado;
                    $doc_inv->save();
                }
            }
            if(isset($data['nivel3'])){
                $invitados = explode(',', $data['posgrado']);
                foreach($invitados as $invitado){
                    $doc_inv = new Docencia_invitado();
                    $doc_inv->docencia_id = $docencia->id;
                    $doc_inv->tipo = $data['nivel3'];
                    $doc_inv->nombre_escuela = $invitado;
                    $doc_inv->save();
                }
            }

            $asistentes = explode(",",$data['asistentes']);
            foreach($asistentes as $asistente){
                $est_ind = new Estudiante_indicador();
                $est_ind->estudiante = $asistente;
                $est_ind->indicador = 8;
                $est_ind->indicador_id = $docencia->id;
                $est_ind->save();
            }

            return redirect('/docencias')->with('success','La docencia se creo de forma exitosa');
        }catch(Exception $e){
            return redirect('/docencias')->with('error','Error en el registro, vuelva a intentar');
        }
    }

    public function editar($id){
        $docencia = Docencia::find($id);
        $asistentes = Estudiante_indicador::where('indicador_id',$id)->where('indicador',8)->get();
        $asist = "";
        if($asistentes)
            foreach($asistentes as $asistente){
                $asist .= $asistente->estudiante.',';
            }
        $inv_ms = Docencia_invitado::where('docencia_id',$id)->where('tipo', 'Nivel medio superior')->get();
        $inv_su = Docencia_invitado::where('docencia_id',$id)->where('tipo', 'Superior')->get();
        $inv_po = Docencia_invitado::where('docencia_id',$id)->where('tipo', 'Posgrado')->get();
        $invitados_ms = "";
        if($inv_ms){
            foreach($inv_ms as $inv){
                $invitados_ms .= $inv->nombre_escuela.',';
            }
        }
        $invitados_su = "";
        if($inv_su){
            foreach($inv_su as $inv){
                $invitados_su .= $inv->nombre_escuela.',';
            }
        }
        $invitados_po = "";
        if($inv_po){
            foreach($inv_po as $inv){
                $invitados_po .= $inv->nombre_escuela.',';
            }
        }
        return view('posgrado.editar_docencia', array('investigador'=>$this->getUser(),
                                                        'docencia'=>$docencia,
                                                        'asistentes'=>$asist,
                                                        'inv_ms'=>$invitados_ms,
                                                        'inv_su'=>$invitados_su,
                                                        'inv_po'=>$invitados_po,
                                                        ));
    }

    public function actualizar(Request $request, $id){
        $data = $request->all();
        try{
            $docencia = Docencia::find($id);
            if(!empty($data['fecha_inicio']))
                $docencia->fecha_inicio = $data['fecha_inicio'];
            if(!empty($data['fecha_termino']))
                $docencia->fecha_termino = $data['fecha_termino'];
            $docencia->tipo_alcance = $data['tipo_alcance'];
            $docencia->asignaturas = $data['asignaturas'];
            $invest = Investigador::where('user_id',Auth::id())->first();
            $docencia->save();

            if(isset($data['nivel1'])){
                Docencia_invitado::where('tipo','Nivel medio superior')->where('docencia_id',$id)->forceDelete();
                $invitados = explode(',', $data['medio_superior']);
                foreach($invitados as $invitado){
                    $doc_inv = new Docencia_invitado();
                    $doc_inv->docencia_id = $docencia->id;
                    $doc_inv->tipo = $data['nivel1'];
                    $doc_inv->nombre_escuela = $invitado;
                    $doc_inv->save();
                }
            }
            else{
                Docencia_invitado::where('tipo','Nivel medio superior')->where('docencia_id',$id)->forceDelete();
            }
            if(isset($data['nivel2'])){
                Docencia_invitado::where('tipo','Superior')->where('docencia_id',$id)->forceDelete();
                $invitados = explode(',', $data['superior']);
                foreach($invitados as $invitado){
                    $doc_inv = new Docencia_invitado();
                    $doc_inv->docencia_id = $docencia->id;
                    $doc_inv->tipo = $data['nivel2'];
                    $doc_inv->nombre_escuela = $invitado;
                    $doc_inv->save();
                }
            }
            else{
                Docencia_invitado::where('tipo','Superior')->where('docencia_id',$id)->forceDelete();
            }
            if(isset($data['nivel3'])){
                Docencia_invitado::where('tipo','Posgrado')->where('docencia_id',$id)->forceDelete();
                $invitados = explode(',', $data['posgrado']);
                foreach($invitados as $invitado){
                    $doc_inv = new Docencia_invitado();
                    $doc_inv->docencia_id = $docencia->id;
                    $doc_inv->tipo = $data['nivel3'];
                    $doc_inv->nombre_escuela = $invitado;
                    $doc_inv->save();
                }
            }
            else{
                Docencia_invitado::where('tipo','Posgrado')->where('docencia_id',$id)->forceDelete();
            }

            if(!empty($data['asistentes'])){
                $asistentes = explode(",",$data['asistentes']);
                Estudiante_indicador::where('indicador_id',$id)->where('indicador',8)->forceDelete();
                foreach($asistentes as $asistente){
                    $est_ind = new Estudiante_indicador();
                    $est_ind->estudiante = $asistente;
                    $est_ind->indicador = 8;
                    $est_ind->indicador_id = $docencia->id;
                    $est_ind->save();
                }
            }
            else{
                Estudiante_indicador::where('indicador_id',$id)->where('indicador',8)->forceDelete();
            }

            return redirect('/docencias')->with('success','La docencia se modificó de forma exitosa');
        }catch(Exception $e){
            return redirect('/docencias')->with('error','Error en el registro, vuelva a intentar');
        }
    }

    public function detalles($id = NULL){
        $docencia = Docencia::find($id);
        $asistentes = Estudiante_indicador::where('indicador_id',$id)->where('indicador',8)->get();
        $asist = "";
        if($asistentes)
            foreach($asistentes as $asistente){
                $asist .= $asistente->estudiante.',';
            }
        $inv_ms = Docencia_invitado::where('docencia_id',$id)->where('tipo', 'Nivel medio superior')->get();
        $inv_su = Docencia_invitado::where('docencia_id',$id)->where('tipo', 'Superior')->get();
        $inv_po = Docencia_invitado::where('docencia_id',$id)->where('tipo', 'Posgrado')->get();
        $invitados_ms = "";
        if($inv_ms){
            foreach($inv_ms as $inv){
                $invitados_ms .= $inv->nombre_escuela.',';
            }
        }
        $invitados_su = "";
        if($inv_su){
            foreach($inv_su as $inv){
                $invitados_su .= $inv->nombre_escuela.',';
            }
        }
        $invitados_po = "";
        if($inv_po){
            foreach($inv_po as $inv){
                $invitados_po .= $inv->nombre_escuela.',';
            }
        }
        return view('posgrado.detalles_docencia', array('investigador'=>$this->getUser(),
                                                        'docencia' =>$docencia,
                                                        'asistentes'=>$asist,
                                                        'inv_ms'=>$invitados_ms,
                                                        'inv_su'=>$invitados_su,
                                                        'inv_po'=>$invitados_po,
                                                        ));
    }

    public function eliminar($id=0){
        try{
            Docencia::find($id)->forceDelete();
            return redirect('/docencias')->with('success','La docencia se eliminó de forma exitosa');
        }
        catch(Exception $e){
            return redirect('/docencias')->with('error','Error, vuelva a intentar');
        }
    }
}
