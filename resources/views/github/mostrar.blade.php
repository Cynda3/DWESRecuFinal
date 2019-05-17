@extends('layouts.app')

@section('title', 'Examen Final 2')

@section('content')

  <h3>Github de {{$user}}</h3>
  <h4>Repositorios publicos: {{$repositorios}}</h4>
  <h4>Siguiendo a {{$seguidores}} usuarios</h4>
 <table>
    <tr>
    	@foreach($seguidoresLogin as $login)
      	<th>{{$login}}</th>
      	@endforeach
    </tr>

  </table>
@endsection


