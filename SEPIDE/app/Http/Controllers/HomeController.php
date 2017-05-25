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
        return view('posgrado.principal',array('investigador'=>$this->getUser()));
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
            

        return redirect('/principal');
    }

    public function perfil(){
        $invest = Investigador::where('user_id',Auth::id())->first();
        $proyectos = Proyecto::where('creador_id', $invest->id)->get();
        $publicaciones = Publicacion::where('creador_id', $invest->id)->get();
        $congresos = Congreso::where('creador_id', $invest->id)->get();
        $patentes = Patente::where('creador_id', $invest->id)->get();
        $transferencias = Transferencia::where('creador_id', $invest->id)->get();
        $conferencias = Conferencia::where('creador_id', $invest->id)->get();
        $software = Software::where('creador_id', $invest->id)->get();
        $movilidad = Movilidad::where('creador_id', $invest->id)->get();
        $prof_ads = Profesor_adscrito::where('investigador_id', $invest->id)->first();
        $adscripciones = Adscripcion_investigador::where('investigador_id',$invest->id)->get();
        
        return view('posgrado.perfil', array(
            'investigador'=>$this->getUser(),
            'proyectos' => $proyectos,
            'publicaciones' => $publicaciones,
            'congresos' => $congresos,
            'patentes' => $patentes,
            'transferencias' => $transferencias,
            'conferencias' => $conferencias,
            'software' => $software,
            'movilidad' => $movilidad,
            'prof_ads' => $prof_ads,
            'adscripciones' => $adscripciones,
        ));
    }
}
