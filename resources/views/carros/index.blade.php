@extends('layouts.app')

@section('title', 'Lista de Carros')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Lista de Carros</h1>
    <a href="{{ route('carros.create') }}" class="btn btn-primary">Adicionar Carro</a>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($carros as $carro)
        <tr>
            <td>{{ $carro->marca }}</td>
            <td>{{ $carro->modelo }}</td>
            <td>
                <a href="{{ route('carros.show', $carro->id) }}" class="btn btn-info btn-sm">Ver</a>
                <a href="{{ route('carros.edit', $carro->id) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('carros.destroy', $carro->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
