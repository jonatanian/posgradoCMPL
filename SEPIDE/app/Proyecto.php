<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    //
    protected $table = "Proyecto";

    public function financiamiento(){
        return $this->hasOne('\App\Financiamiento','id','financiamiento_id');
    }
}
