<?php

Route::view('/', "enunciado");

Route::get('/usuarios','GithubApiController@getstate');

Route::get('/lista', 'VueloController@listar');
Route::get('/seleccionarVuelo', 'VueloController@index');

Route::post('/agregarPasajero', 'PasajeroController@store');
Route::view('/formulario', "pasajero/create");


