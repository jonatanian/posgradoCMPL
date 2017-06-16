<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Investigador;
use App\Users;
use App\Conferencia;
use App\Congreso;
use App\Financiamiento;
use App\Movilidad;
use App\Patente;
use App\Proyecto;
use App\Publicacion;
use App\Software;
use App\Transferencia;
use App\Profesor_adscrito;
use App\Adscripcion_investigador;
use App\Adscripcion;
use App\Grado;
use App\Docencia;
use App\Servicio;
use App\Direccion;
use App\Investigador_profesor_posgrado;
use App\Profesor_posgrado;
use App\Investigador_indicador;
use App\Estudiante_indicador;


class HomeController extends Controller
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
        $user = Auth::user();
        //if($user->rol_id == 1)
        //    return redirect('/admin');
        if($user->is_active){
            if($user->is_set){
                return redirect('/principal');
            }
            else{
                return redirect('/set_perfil');
            }
        }
        else{
            Auth::logout();   
            return view('errors.active_error');
        }
        return view('home');
    }

    public function principal(){
        $invest = Investigador::all();
        $proyectos = Proyecto::all();
        $publicaciones = Publicacion::all();
        $congresos = Congreso::all();
        $patentes = Patente::all();
        $transferencias = Transferencia::all();
        $conferencias = Conferencia::all();
        $docencias = Docencia::all();
        $software = Software::all();
        $servicios = Servicio::all();
        $movilidad = Movilidad::all();
        $direcciones = Direccion::all();
        $prof_ads = Profesor_adscrito::all();
        $adscripciones = Adscripcion_investigador::all();
        $prof_pos = Investigador_profesor_posgrado::all();
        $est_ind = Estudiante_indicador::all();
        $inv_ind = Investigador_indicador::all();
        
        return view('posgrado.principal', array(
            'investigador'=>$this->getUser(),
            'proyectos' => $proyectos,
            'publicaciones' => $publicaciones,
            'congresos' => $congresos,
            'patentes' => $patentes,
            'transferencias' => $transferencias,
            'conferencias' => $conferencias,
            'docencias' => $docencias,
            'software' => $software,
            'servicios' => $servicios,
            'movilidad' => $movilidad,
            'direcciones' => $direcciones,
            'prof_ads' => $prof_ads,
            'adscripciones' => $adscripciones,
            'prof_pos' => $prof_pos,
            'est_ind' => $est_ind,
            'inv_ind' => $inv_ind,
        ));
    }

    public function set_perfil(){
        return view('admin.set_perfil');
    }

    public function create_perfil(Request $request){
        $us = Auth::user();
        $investigador = new Investigador;
        $investigador->nombre = $request->nombre;
        $investigador->ap_paterno = $request->ap_paterno;
        $investigador->ap_materno = $request->ap_materno;
        $investigador->grado_id = $request->grado;
        $investigador->user_id = $us->id;
        $investigador->save();

        $user = Users::find($us->id);
        if($user->rol_id == NULL)
            $user->rol_id = 2;
        $user->is_set = 1;
        $user->save();

        $prof_ads = new Profesor_adscrito;
        $prof_ads->profesor_adscrito = $request->profesor_adscrito;
        $prof_ads->investigador_id = $investigador->id;
        $prof_ads->save();

        if(isset($request->adscripcion1)){
            $ads_inv = new Adscripcion_investigador;
            $ads_inv->investigador_id = $investigador->id;
            $ads_inv->adscripcion_id = $request->adscripcion1;
            $ads_inv->save();
            }
        if(isset($request->adscripcion2)){
            $ads_inv = new Adscripcion_investigador;
            $ads_inv->investigador_id = $investigador->id;
            $ads_inv->adscripcion_id = $request->adscripcion2;
            $ads_inv->save();
        }
        if(isset($request->adscripcion3)){
            $ads_inv = new Adscripcion_investigador;
            $ads_inv->investigador_id = $investigador->id;
            $ads_inv->adscripcion_id = $request->adscripcion3;
            $ads_inv->save();
        }

        if(isset($request->profesor1)){
            $prof = new Investigador_profesor_posgrado;
            $prof->investigador_id = $investigador->id;
            $prof->profesor_posgrado_id = $request->profesor1;
            $prof->save();
        }
        if(isset($request->profesor2)){
            $prof = new Investigador_profesor_posgrado;
            $prof->investigador_id = $investigador->id;
            $prof->profesor_posgrado_id = $request->profesor2;
            $prof->save();
        }
        if(isset($request->profesor3)){
            $prof = new Investigador_profesor_posgrado;
            $prof->investigador_id = $investigador->id;
            $prof->profesor_posgrado_id = $request->profesor3;
            $prof->save();
        }
        if(isset($request->profesor4)){
            $prof = new Investigador_profesor_posgrado;
            $prof->investigador_id = $investigador->id;
            $prof->profesor_posgrado_id = $request->profesor4;
            $prof->save();
        }
        if(isset($request->profesor5)){
            $prof = new Investigador_profesor_posgrado;
            $prof->investigador_id = $investigador->id;
            $prof->profesor_posgrado_id = $request->profesor5;
            $prof->save();
        }
            

        return redirect('/principal');
    }

    public function edit_perfil($id = NULL){
        $grados = Grado::all();
        $investigador = Investigador::find($id);
        return view('admin.edit_perfil', array(
            'investigador'=>$investigador,
            'grados'=>$grados,
        ));
    }

    public function update_perfil(Request $request, $id=NULL){
        $us = Auth::user();
        $investigador = Investigador::find($id);
        $investigador->nombre = $request->nombre;
        $investigador->ap_paterno = $request->ap_paterno;
        $investigador->ap_materno = $request->ap_materno;
        $investigador->grado_id = $request->grado;
        $investigador->save();

        Profesor_adscrito::where('investigador_id', $id)->delete();

        $prof_ads = new Profesor_adscrito;
        $prof_ads->profesor_adscrito = $request->profesor_adscrito;
        $prof_ads->investigador_id = $investigador->id;
        $prof_ads->save();

        Adscripcion_investigador::where('investigador_id', $id)->delete();

        if(isset($request->adscripcion1)){
            $ads_inv = new Adscripcion_investigador;
            $ads_inv->investigador_id = $investigador->id;
            $ads_inv->adscripcion_id = $request->adscripcion1;
            $ads_inv->save();
            }
        if(isset($request->adscripcion2)){
            $ads_inv = new Adscripcion_investigador;
            $ads_inv->investigador_id = $investigador->id;
            $ads_inv->adscripcion_id = $request->adscripcion2;
            $ads_inv->save();
        }
        if(isset($request->adscripcion3)){
            $ads_inv = new Adscripcion_investigador;
            $ads_inv->investigador_id = $investigador->id;
            $ads_inv->adscripcion_id = $request->adscripcion3;
            $ads_inv->save();
        }

        Investigador_profesor_posgrado::where('investigador_id', $id)->delete();

        if(isset($request->profesor1)){
            $prof = new Investigador_profesor_posgrado;
            $prof->investigador_id = $investigador->id;
            $prof->profesor_posgrado_id = $request->profesor1;
            $prof->save();
        }
        if(isset($request->profesor2)){
            $prof = new Investigador_profesor_posgrado;
            $prof->investigador_id = $investigador->id;
            $prof->profesor_posgrado_id = $request->profesor2;
            $prof->save();
        }
        if(isset($request->profesor3)){
            $prof = new Investigador_profesor_posgrado;
            $prof->investigador_id = $investigador->id;
            $prof->profesor_posgrado_id = $request->profesor3;
            $prof->save();
        }
        if(isset($request->profesor4)){
            $prof = new Investigador_profesor_posgrado;
            $prof->investigador_id = $investigador->id;
            $prof->profesor_posgrado_id = $request->profesor4;
            $prof->save();
        }
        if(isset($request->profesor5)){
            $prof = new Investigador_profesor_posgrado;
            $prof->investigador_id = $investigador->id;
            $prof->profesor_posgrado_id = $request->profesor5;
            $prof->save();
        }
            

        return redirect('/perfil');
    }

    public function perfil(){
        $invest = Investigador::where('user_id',Auth::id())->first();
        $proyectos = Proyecto::where('creador_id', $invest->id)->get();
        $publicaciones = Publicacion::where('creador_id', $invest->id)->get();
        $congresos = Congreso::where('creador_id', $invest->id)->get();
        $patentes = Patente::where('creador_id', $invest->id)->get();
        $transferencias = Transferencia::where('creador_id', $invest->id)->get();
        $conferencias = Conferencia::where('creador_id', $invest->id)->get();
        $docencias = Docencia::where('creador_id', $invest->id)->get();
        $software = Software::where('creador_id', $invest->id)->get();
        $servicios = Servicio::where('creador_id', $invest->id)->get();
        $movilidad = Movilidad::where('creador_id', $invest->id)->get();
        $direcciones = Direccion::where('creador_id', $invest->id)->get();
        $prof_ads = Profesor_adscrito::where('investigador_id', $invest->id)->first();
        $adscripciones = Adscripcion_investigador::where('investigador_id',$invest->id)->get();
        $prof_pos = Investigador_profesor_posgrado::where('investigador_id', $invest->id)->get();
        $est_ind = Estudiante_indicador::all();
        $inv_ind = Investigador_indicador::all();
        
        return view('posgrado.perfil', array(
            'investigador'=>$this->getUser(),
            'proyectos' => $proyectos,
            'publicaciones' => $publicaciones,
            'congresos' => $congresos,
            'patentes' => $patentes,
            'transferencias' => $transferencias,
            'conferencias' => $conferencias,
            'docencias' => $docencias,
            'software' => $software,
            'servicios' => $servicios,
            'movilidad' => $movilidad,
            'direcciones' => $direcciones,
            'prof_ads' => $prof_ads,
            'adscripciones' => $adscripciones,
            'prof_pos' => $prof_pos,
            'est_ind' => $est_ind,
            'inv_ind' => $inv_ind,
        ));
    }
}
