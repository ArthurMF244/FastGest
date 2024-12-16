<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {

    $usuario = 'Arthur MF';
    $senha = '12345';

    return view('login',
     [
            'usuario' => $usuario,
            'senha'=> $senha,
            'idade' => 19
            ]);
    });

