<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Investigador;
use App\Users;

class AdminController extends Controller
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
        if($user->rol_id == 1){
            return redirect('/admin');
        }
        else{
            Auth::logout();   
            return view('errors.permission');
        }

    }

    public function usuarios(){
        $user = Auth::user();
        if($user->rol_id == 1){
            $users = Users::get();
            return view('admin.users', array('users'=>$users));
        }
        else{
            Auth::logout();   
            return view('errors.permission');
        }
    }

    public function activarUsuario($id){
        $user = Users::find($id);
        $user->is_active = 1;
        $user->save();
        return redirect('/admin');
    }

    public function desactivarUsuario($id){
        $user = Users::find($id);
        $user->is_active = NULL;
        $user->save();
        return redirect('/admin');
    }

}