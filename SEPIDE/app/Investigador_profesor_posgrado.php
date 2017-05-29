<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investigador_profesor_posgrado extends Model
{
    //
    protected $table="Investigador_profesor_posgrado";

    public function profesor_posgrado(){
        return $this->hasOne('\App\Profesor_posgrado','id','profesor_posgrado_id');
    }
}
