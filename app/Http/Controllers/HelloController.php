<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function calcularIdade($nascimento, $nome) 
    {

        $data = ['nasc' => $nascimento, 'nome' => $nome];
        return view('calcula-idade', $data);
    }
}