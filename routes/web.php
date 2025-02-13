<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LocacaoController;
use App\Http\Controllers\CustoController;




Route::get('/', function () {
    return redirect()->route('dashboard');
});

// Rotas de autenticação
Auth::routes();

// Defina a rota explícita para o dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Rotas para Carros
Route::resource('carros', CarroController::class);

// Rotas para Clientes
Route::resource('clientes', ClienteController::class);

// Rotas para Locações
Route::resource('locacoes', LocacaoController::class);

Route::resource('custos', CustoController::class);
