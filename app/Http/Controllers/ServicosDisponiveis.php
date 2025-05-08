<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicosDisponiveis extends Controller
{
    public function servicos()
    {
        $title = 'Meu site - Serviços - '. rand(0,10);
        return view('services', ['title' => $title]);
    }
}
