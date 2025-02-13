<?php

namespace App\Http\Controllers;

use App\Models\Custo;
use Illuminate\Http\Request;

class CustoController extends Controller
{
    public function index()
    {
        $custos = Custo::all();
        return view('custos.index', compact('custos'));
    }

    public function create()
    {
        return view('custos.create');
    }

    public function store(Request $request)
    {
        $custo = new Custo;
        $custo->descricao = $request->descricao;
        $custo->valor = $request->valor;
        $custo->save();

        return redirect()->route('custos.index')->with('success', 'Custo adicionado com sucesso!');
    }

    public function show($id)
    {
        $custo = Custo::findOrFail($id);
        return view('custos.show', compact('custo'));
    }

    public function edit($id)
    {
        $custo = Custo::findOrFail($id);
        return view('custos.edit', compact('custo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'descricao' => 'required|string|max:255',
            'valor' => 'required|numeric',
        ]);

        $custo = Custo::findOrFail($id);
        $custo->descricao = $request->descricao;
        $custo->valor = $request->valor;
        $custo->save();

        return redirect()->route('custos.index')->with('success', 'Custo atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $custo = Custo::findOrFail($id);
        $custo->delete();

        return redirect()->route('custos.index')->with('success', 'Custo excluído com sucesso!');
    }
}
