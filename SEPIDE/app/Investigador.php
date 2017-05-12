<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Adscripcion;
use App\Grado;

class Investigador extends Model
{
    //
    protected $table = "Investigador";

    public function getUser(){
        $user = $this->where('user_id',Auth::id())->first();
        $auth = Users::find(Auth::id());
        $grado = $this->grado($user->grado_id);
        return array('id'=>$user->id, 'grado'=>$grado, 'nombre'=>$user->nombre, 'ap_paterno'=>$user->ap_paterno, 'ap_materno'=>$user->ap_materno, 'rol'=>$auth->rol_id);
    }

    public function adscripciones(){
        return $this->belongsToMany();
    }

    public function grado($id = 1){
        //return $this->hasOne('App\Grado');
        $grado = Grado::find($id);
        return $grado->nombre_corto;
    }
    
}
