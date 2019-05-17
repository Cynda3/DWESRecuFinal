<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasajero extends Model
{
    public function vuelo(){
    	return $this->belongsTo('App\Vuelo');
    }
}
