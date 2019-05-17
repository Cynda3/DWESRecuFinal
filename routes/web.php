<?php

Route::view('/', "enunciado");

Route::get('/usuarios','GithubApiController@getstate');
