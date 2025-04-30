<?php

use App\Http\Controllers\DiaAtual;
use App\Http\Controllers\ServicosDisponiveis;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'home']);

Route::get('/servicos', [ServicosDisponiveis::class, 'servicos']);

Route::get('/contato', [DiaAtual::class, 'diaAtual']);
