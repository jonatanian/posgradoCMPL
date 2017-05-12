<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Financiamiento extends Model
{
    //
    protected $table = 'Financiamiento';

    public function proyecto(){
        return $this->belongsTo('App\Proyecto');
    }
}
