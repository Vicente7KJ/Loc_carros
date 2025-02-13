<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $request->validate([
            'nome' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'ano' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'placa' => 'required|string|max:7',
            'cor' => 'required|string|max:50',
            'opcionais' => 'nullable|string',
            'imagens.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $carro = new Carro();
        $carro->nome = $request->nome;
        $carro->marca = $request->marca;
        $carro->modelo = $request->modelo;
        $carro->ano = $request->ano;
        $carro->placa = $request->placa;
        $carro->cor = $request->cor;
        $carro->opcionais = $request->opcionais;
        $carro->status = 'disponível'; // Definir status como disponível inicialmente
        $carro->save();

        if ($request->hasFile('imagens')) {
            foreach ($request->file('imagens') as $imagem) {
                $path = $imagem->store('imagens_carros', 'public');
                $carro->imagens()->create(['caminho' => $path]);
            }
        }

        return redirect()->route('carros.index')->with('success', 'Carro adicionado com sucesso!');
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

        $request->validate([
            'nome' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'ano' => 'required|integer|min:1900|max:' . (date('Y') + 1),
            'placa' => 'required|string|max:7',
            'cor' => 'required|string|max:50',
            'opcionais' => 'nullable|string',
            'imagens.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $carro->nome = $request->nome;
        $carro->marca = $request->marca;
        $carro->modelo = $request->modelo;
        $carro->ano = $request->ano;
        $carro->placa = $request->placa;
        $carro->cor = $request->cor;
        $carro->opcionais = $request->opcionais;
        $carro->save();

        if ($request->hasFile('imagens')) {
            foreach ($carro->imagens as $imagem) {
                Storage::disk('public')->delete($imagem->caminho);
                $imagem->delete();
            }

            foreach ($request->file('imagens') as $imagem) {
                $path = $imagem->store('imagens_carros', 'public');
                $carro->imagens()->create(['caminho' => $path]);
            }
        }

        return redirect()->route('carros.index')->with('success', 'Carro atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $carro = Carro::findOrFail($id);
        foreach ($carro->imagens as $imagem) {
            Storage::disk('public')->delete($imagem->caminho);
            $imagem->delete();
        }
        $carro->delete();

        return redirect()->route('carros.index')->with('success', 'Carro excluído com sucesso!');
    }
}
