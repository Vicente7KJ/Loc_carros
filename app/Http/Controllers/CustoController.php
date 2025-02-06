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

        return redirect()->route('custos.index');
    }

    // Outros métodos para show, edit, update e destroy...
}
