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
        $user = Investigador::where('user_id',Auth::id())->first();
        return $user;
    }

    public function adscripciones(){
        return $this->belongsToMany();
    }

    public function grado(){
        return $this->hasOne('Grado');
    }
}
