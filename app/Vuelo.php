<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    public function pasajero(){
    	return $this->hasMany('App\Pasajero');
    }
}
