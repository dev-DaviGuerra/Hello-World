<?php

use App\Http\Controllers\DiaAtual;
use App\Http\Controllers\ServicosDisponiveis;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'home'])->name('homepage');
Route::get('/services', [ServicosDisponiveis::class, 'servicos'])->name('services');
Route::get('/contact', [DiaAtual::class, 'diaAtual'])->name('contact');
