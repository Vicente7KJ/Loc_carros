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
        $carros = Carro::all();
        $clientes = Cliente::all();
        return view('locacoes.create', compact('carros', 'clientes'));
    }

    public function store(Request $request)
    {
        $locacao = new Locacao;
        $locacao->carro_id = $request->carro_id;
        $locacao->cliente_id = $request->cliente_id;
        $locacao->data_inicio = $request->data_inicio;
        $locacao->data_fim = $request->data_fim;
        $locacao->valor_pago = $request->valor_pago;
        $locacao->save();

        return redirect()->route('locacoes.index');
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
        $locacao = Locacao::findOrFail($id);
        $locacao->carro_id = $request->carro_id;
        $locacao->cliente_id = $request->cliente_id;
        $locacao->data_inicio = $request->data_inicio;
        $locacao->data_fim = $request->data_fim;
        $locacao->valor_pago = $request->valor_pago;
        $locacao->save();

        return redirect()->route('locacoes.index');
    }

    public function destroy($id)
    {
        $locacao = Locacao::findOrFail($id);
        $locacao->delete();

        return redirect()->route('locacoes.index');
    }
}
