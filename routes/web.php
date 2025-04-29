<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello-world', function()  {
    return view('hello-world');
});

Route::get('/hello/{name}/{surname}', function($name, $surname) {
    //return view('hello');
    $result =  'Name: '.$name.'<br>'.'Surname: '.$surname;
    return $result;
});

Route::get('/hello/{name}', function($name) {
    //return view('hello');
    $result =  'Name: '.$name.'<br>';
    return $result;
});
