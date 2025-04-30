<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}/{idade}', function($name, $idade) {
    $data = [
        'nome' => $name,
        'idade' => $idade
        ];
    return view('hello', $data);
});

Route::get('/calcula-idade/{nascimento}/{nome}', function($nascimento, $nome) {
    $data = ['nasc' => $nascimento, 'nome' => $nome];
    return view('calcular-idade', $data);
});
