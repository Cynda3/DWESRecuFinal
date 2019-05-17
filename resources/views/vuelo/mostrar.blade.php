@extends('layouts.app')

@section('title', 'Examen Final 2')

@section('content')

  <h4>Vuelo numero {{$vuelo->id}}, con destino {{$vuelo->destino}}</h4>
  <h5>Pasajeros:</h5>
  @foreach($pasajeros as $pasajero)
  <h6>{{$pasajero->nombre}} - asiento Nº{{$pasajero->asiento}} - precio de billete: {{$pasajero->precio_vuelo}}</h6>
  @endforeach

@endsection


