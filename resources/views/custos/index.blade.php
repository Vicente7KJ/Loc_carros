@extends('layouts.app')

@section('title', 'Lista de Custos')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Lista de Custos</h1>
    <a href="{{ route('custos.create') }}" class="btn btn-primary mb-3">Adicionar Custo</a>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($custos as $custo)
                <tr>
                    <td>{{ $custo->id }}</td>
                    <td>{{ $custo->descricao }}</td>
                    <td>R$ {{ number_format($custo->valor, 2, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('custos.show', $custo->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('custos.edit', $custo->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('custos.destroy', $custo->id) }}" method="POST" style="display:inline;">
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
