@extends('layouts.app')

@section('title', 'Examen Final 2')

@section('content')

  <h4>Pasajero nuevo</h4>
    <label>NIF
        <br><input type="text" name="nif"><br>
    </label><br>
    <label>Nombre
        <br><input type="text" name="nombre"><br>
    </label><br>
    <label>Apellido
        <br><input type="text" name="apellido"><br>
    </label><br>
    <label>Telefono
        <br><input type="text" name="telefono"><br>
    </label><br>
    <label>Fecha Nacimiento
        <br><input type="date" name="fechanacimiento"><br>
    </label><br>
    <label>Genero</label><br>
    <label><input type="radio" name="genero"> Hombre</label><br>
    <label><input type="radio" name="genero"> Mujer</label><br>
    <label><input type="radio" name="genero"> Otros</label>
  </form>
  <br>

@endsection


