<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiaAtual extends Controller
{
    public function diaAtual()
    {
        $title = 'Meu site - Suporte '.date('d/m');
        $data = date('m/y');
        return view('contact', ['data' => $data], ['title'=>$title]);

    }
}
