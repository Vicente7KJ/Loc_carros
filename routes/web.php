<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LocacaoController;
use App\Http\Controllers\CustoController;
use App\Http\Controllers\Auth\LoginController;

// Redireciona para o dashboard
Route::get('/', function () {
    return redirect()->route('dashboard');
});

// Rotas de autenticação
Auth::routes();

// Dashboard protegido por autenticação
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Rotas protegidas por autenticação
Route::middleware(['auth'])->group(function () {
    Route::resource('carros', CarroController::class);
    Route::resource('clientes', ClienteController::class);
    Route::resource('locacoes', LocacaoController::class);
    Route::resource('custos', CustoController::class);
});

// Rota de Logout (POST)
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
