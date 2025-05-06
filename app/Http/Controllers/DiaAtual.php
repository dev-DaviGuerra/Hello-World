<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiaAtual extends Controller
{
    public function diaAtual()
    {
        $data = date('m/y');
        return view('contact', ['data' => $data]);

    }
}
