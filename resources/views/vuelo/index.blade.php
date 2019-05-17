@extends('layouts.app')

@section('title', 'Examen Final 2')

@section('content')

  <h2>Vuelos</h2>

<form action="/lista" method="get">
	@csrf
    <select name="vuelo">
      <option value="0">Selecciona un vuelo</option>
      @foreach($vuelos as $vuelo)
      <option value="{{$vuelo->id}}">{{$vuelo->nombre}}</option>
      @endforeach
    </select>
	<button type="submit">Mostrar lista</button>
</form>


@endsection
