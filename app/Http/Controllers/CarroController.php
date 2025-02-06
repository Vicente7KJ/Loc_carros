<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index()
    {
        $carros = Carro::all();
        return view('carros.index', compact('carros'));
    }

    public function create()
    {
        return view('carros.create');
    }

    public function store(Request $request)
    {
        $carro = new Carro;
        $carro->marca = $request->marca;
        $carro->modelo = $request->modelo;
        $carro->ano = $request->ano;
        $carro->placa = $request->placa;
        $carro->cor = $request->cor;
        $carro->opcionais = $request->opcionais;
        $carro->save();

        return redirect()->route('carros.index');
    }

    public function show($id)
    {
        $carro = Carro::findOrFail($id);
        return view('carros.show', compact('carro'));
    }

    public function edit($id)
    {
        $carro = Carro::findOrFail($id);
        return view('carros.edit', compact('carro'));
    }

    public function update(Request $request, $id)
    {
        $carro = Carro::findOrFail($id);
        $carro->marca = $request->marca;
        $carro->modelo = $request->modelo;
        $carro->ano = $request->ano;
        $carro->placa = $request->placa;
        $carro->cor = $request->cor;
        $carro->opcionais = $request->opcionais;
        $carro->save();

        return redirect()->route('carros.index');
    }

    public function destroy($id)
    {
        $carro = Carro::findOrFail($id);
        $carro->delete();

        return redirect()->route('carros.index');
    }
}
