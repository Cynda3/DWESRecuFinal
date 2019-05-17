@extends('layouts.app')

@section('title', 'Examen Final 2')

@section('content')

<h3>Pasajero creado correctamente</h3>
<div>NIF: </div>
<div>Nombre: </div>
<div>Apellido: </div>
<div>Telefono: </div>
<div>Fecha Nacimiento: </div>

<div>
    <label>Genero</label><br>
    <label><input type="radio" name="genero" > Hombre</label><br>
    <label><input type="radio" name="genero" > Mujer</label><br>
    <label><input type="radio" name="genero" > Otros</label>
</div>
</tr>
@endsection
