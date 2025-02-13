<?php

namespace App\Http\Controllers;

use App\Models\Locacao;
use App\Models\Carro;
use App\Models\Cliente;
use Illuminate\Http\Request;

class LocacaoController extends Controller
{
    public function index()
    {
        $locacoes = Locacao::with(['carro', 'cliente'])->get();
        return view('locacoes.index', compact('locacoes'));
    }

    public function create()
    {
        $carros = Carro::where('status', 'disponível')->get(); // Apenas carros disponíveis
        $clientes = Cliente::all();
        return view('locacoes.create', compact('carros', 'clientes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'carro_id' => 'required|exists:carros,id',
            'cliente_id' => 'required|exists:clientes,id',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after:data_inicio',
            'valor_pago' => 'required|numeric',
        ]);

        $locacao = new Locacao;
        $locacao->carro_id = $request->carro_id;
        $locacao->cliente_id = $request->cliente_id;
        $locacao->data_inicio = $request->data_inicio;
        $locacao->data_fim = $request->data_fim;
        $locacao->valor_pago = $request->valor_pago;
        $locacao->save();

        // Atualizar status do carro para 'indisponível'
        $carro = Carro::find($request->carro_id);
        $carro->status = 'indisponível';
        $carro->save();

        return redirect()->route('locacoes.index')->with('success', 'Locação registrada com sucesso!');
    }

    public function show($id)
    {
        $locacao = Locacao::with(['carro', 'cliente'])->findOrFail($id);
        return view('locacoes.show', compact('locacao'));
    }

    public function edit($id)
    {
        $locacao = Locacao::findOrFail($id);
        $carros = Carro::all();
        $clientes = Cliente::all();
        return view('locacoes.edit', compact('locacao', 'carros', 'clientes'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'carro_id' => 'required|exists:carros,id',
            'cliente_id' => 'required|exists:clientes,id',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after:data_inicio',
            'valor_pago' => 'required|numeric',
        ]);

        $locacao = Locacao::findOrFail($id);
        $locacao->carro_id = $request->carro_id;
        $locacao->cliente_id = $request->cliente_id;
        $locacao->data_inicio = $request->data_inicio;
        $locacao->data_fim = $request->data_fim;
        $locacao->valor_pago = $request->valor_pago;
        $locacao->save();

        return redirect()->route('locacoes.index')->with('success', 'Locação atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $locacao = Locacao::findOrFail($id);

        // Atualizar status do carro para 'disponível' antes de deletar a locação
        $carro = Carro::find($locacao->carro_id);
        $carro->status = 'disponível';
        $carro->save();

        $locacao->delete();

        return redirect()->route('locacoes.index')->with('success', 'Locação removida com sucesso!');
    }
}
