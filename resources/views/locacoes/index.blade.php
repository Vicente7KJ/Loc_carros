@extends('layouts.app')

@section('title', 'Lista de Locações')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Lista de Locações</h1>
    <a href="{{ route('locacoes.create') }}" class="btn btn-primary mb-3">Adicionar Locação</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Carro</th>
                <th>Cliente</th>
                <th>Data Início</th>
                <th>Data Fim</th>
                <th>Valor Pago</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($locacoes as $locacao)
                <tr>
                    <td>{{ $locacao->carro->modelo }}</td>
                    <td>{{ $locacao->cliente->nome }}</td>
                    <td>{{ $locacao->data_inicio }}</td>
                    <td>{{ $locacao->data_fim }}</td>
                    <td>R$ {{ $locacao->valor_pago }}</td>
                    <td>
                        <a href="{{ route('locacoes.show', $locacao->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('locacoes.edit', $locacao->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('locacoes.destroy', $locacao->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
