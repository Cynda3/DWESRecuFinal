@extends('layouts.app')

@section('title', 'Examen Final 2')

@section('content')

    @if(count($errors)>0)
    <div class="alert alert-danger">
        <strong>Vaya!</strong>Parece que hay algun error<br><br>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

  <form method="POST" action="/agregarPasajero">
    @csrf
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
    <button type="submit">Añadir pasajero</button>
  </form>
  <br>

@endsection


