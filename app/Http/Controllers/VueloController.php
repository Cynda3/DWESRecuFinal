<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vuelo;
use App\Pasajero;

class VueloController extends Controller
{
    public function index(){

    	$vuelos = Vuelo::all();

    	return view('/vuelo/index')->with(['vuelos' => $vuelos]);
    }

    public function listar(Request $request){

    	$vueloId = $request-> input('vuelo');

    	$pasajeros = Pasajero::where('vuelo_id', $vueloId)->get();

    	$vuelo = Vuelo::where('id', $vueloId)->get();

    	return view('/vuelo/mostrar')->with(['pasajeros' => $pasajeros, 'vuelo' => $vuelo[0]]);
    }
}
