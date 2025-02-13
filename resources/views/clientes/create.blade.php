@extends('layouts.app')

@section('title', 'Adicionar Cliente')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Adicionar Cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" required>
        </div>
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <textarea class="form-control" id="endereco" name="endereco" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection
