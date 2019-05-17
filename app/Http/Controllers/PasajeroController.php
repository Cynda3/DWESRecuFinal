<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pasajero;

class PasajeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'nif' => 'required|unique:pasajeros|digits:9',
            'nombre' => 'required|min:5|max:20',
            'apellido' => 'required|min:5|max:30',
            'telefono' => 'nullable|numeric',
            'genero' => 'required',
            'fechanacimiento' => 'required|before:05/17/2019'
        ],
        [
            'nif.required' => 'Introduce un nif',
            'nif.unique' => 'El nif introducido ya existe',
            'nif.digits' => 'El nif debe tener 9 caracteres',
            'nombre.required' => 'Introduce un nombre',
            'nombre.min' => 'El nombre debe tener al menos 5 caracteres',
            'nombre.max' => 'El nombre debe tener un maximo de 20 caracteres',
            'apellido.required' => 'Introduce un apellido',
            'apellido.min' => 'El apellido debe tener al menos 5 caracteres',
            'apellido.max' => 'El apellido debe tener un maximo de 30 caracteres',
            'telefono.numeric' => 'El telefono debe ser un numero',
            'genero.required' => 'Introduce un genero',
            'fechanacimiento.required' => 'Introduce una fecha de nacimiento',
            'fechanacimiento.before' => 'Introduce una fecha anterior a hoy'
        ]);

        $input = $request->all();

        $pasajero = Pasajero::create($input);

        return view('pasajero/correcto')->with(['pasajero' => $pasajero]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
