@extends('layouts.app')

@section('title', 'Adicionar Custo')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Adicionar Custo</h1>
    <form action="{{ route('custos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Descrição:</label>
            <input type="text" name="descricao" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Valor:</label>
            <input type="number" step="0.01" name="valor" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Salvar</button>
        <a href="{{ route('custos.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </form>
</div>
@endsection
