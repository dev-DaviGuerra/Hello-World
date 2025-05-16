<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicosDisponiveis extends Controller
{
    public function servicos()
    {
        $title = 'Meu site - Serviços - '. rand(0,10);
        $servicos = [
            ['name' => 'Serviço 01', 'description' => 'Descrição do serviço 1'],
            ['name' => 'Serviço 02', 'description' => 'Descrição do serviço 2'],
            ['name' => 'Serviço 03', 'description' => 'Descrição do serviço 3'],
            ['name' => 'Serviço 04', 'description' => 'Descrição do serviço 4'],
        ];


        return view('services', ['title' => $title, 'servicos' => $servicos]);
    }
}
