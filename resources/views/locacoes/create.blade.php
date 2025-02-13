@extends('layouts.app')

@section('title', 'Adicionar Locação')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Adicionar Locação</h1>
    <form action="{{ route('locacoes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="carro_id">Carro</label>
            <select class="form-control" id="carro_id" name="carro_id">
                @foreach ($carros as $carro)
                    <option value="{{ $carro->id }}">{{ $carro->nome }} ({{ $carro->placa }})</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="cliente_id">Cliente</label>
            <select class="form-control" id="cliente_id" name="cliente_id">
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="data_inicio">Data Início</label>
            <input type="date" class="form-control" id="data_inicio" name="data_inicio">
        </div>
        <div class="form-group">
            <label for="data_fim">Data Fim</label>
            <input type="date" class="form-control" id="data_fim" name="data_fim">
        </div>
        <div class="form-group">
            <label for="valor_pago">Valor Pago</label>
            <input type="number" step="0.01" class="form-control" id="valor_pago" name="valor_pago">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('locacoes.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection
