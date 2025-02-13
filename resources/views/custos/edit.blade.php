@extends('layouts.app')

@section('title', 'Editar Custo')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Editar Custo</h1>
    <form action="{{ route('custos.update', $custo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Descrição:</label>
            <input type="text" name="descricao" value="{{ $custo->descricao }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Valor:</label>
            <input type="number" step="0.01" name="valor" value="{{ $custo->valor }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Salvar</button>
        <a href="{{ route('custos.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </form>
</div>
@endsection
