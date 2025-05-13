<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
{
        $mostrarRodape = true;
        $title = 'Meu site - Home';
        return view('home', ['title' => $title, 'mostrarRodape' => $mostrarRodape ]);
}
}