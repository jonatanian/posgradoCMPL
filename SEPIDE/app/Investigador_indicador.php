<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investigador_indicador extends Model
{
    //
    protected $table = "Investigador_indicador";

    public function investigador(){
        return $this->hasOne('\App\Investigador','id','investigador_id');
    }
}
