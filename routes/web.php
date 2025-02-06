<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LocacaoController;
use App\Http\Controllers\CustoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

// Rotas para Carros
Route::resource('carros', CarroController::class);

// Rotas para Clientes
Route::resource('clientes', ClienteController::class);

// Rotas para Locações
Route::resource('locacoes', LocacaoController::class);

// Rotas para Custos
Route::resource('custos', CustoController::class);
