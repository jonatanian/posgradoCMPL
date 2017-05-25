<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adscripcion_investigador extends Model
{
    //
    protected $table = "Adscripcion_investigador";

    public function adscripcion(){
        return $this->hasOne('\App\Adscripcion','id','adscripcion_id');
    }
}
