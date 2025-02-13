@extends('layouts.app')

@section('title', 'Detalhes do Custo')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Detalhes do Custo</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>Descrição:</strong> {{ $custo->descricao }}</p>
            <p><strong>Valor:</strong> R$ {{ number_format($custo->valor, 2, ',', '.') }}</p>
            <a href="{{ route('custos.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
</div>
@endsection
