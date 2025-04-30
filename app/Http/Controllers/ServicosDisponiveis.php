<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicosDisponiveis extends Controller
{
    public function servicos()
    {
        return view('servicos');
    }
}
