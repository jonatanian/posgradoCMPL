<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Investigador;
use App\Users;

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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if($user->rol_id == 1)
            return redirect('/admin');
        else if($user->is_active){
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
        return view('posgrado.principal');
    }

    public function set_perfil(){
        return view('admin.set_perfil');
    }

    public function update_perfil(Request $request){
        $us = Auth::user();
        $investigador = new Investigador;
        $investigador->nombre = $request->nombre;
        $investigador->ap_paterno = $request->ap_paterno;
        $investigador->ap_materno = $request->ap_materno;
        $investigador->grado_id = $request->grado;
        $investigador->user_id = $us->id;
        $investigador->save();

        $user = Users::find($us->id);
        $user->rol_id = 2;
        $user->is_set = 1;
        $user->save();

        return redirect('/principal');
    }

    public function perfil(){
        $user = Auth::user();
        $investigador = Investigador::where('user_id',$user->id)->first();
        return view('posgrado.perfil', array('investigador'=>$investigador));
    }
}
