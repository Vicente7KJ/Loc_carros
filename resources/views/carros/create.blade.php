@extends('layouts.app')

@section('title', 'Adicionar Carro')

@section('content')
<h1>Adicionar Carro</h1>
<form action="{{ route('carros.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Marca</label>
        <input type="text" name="marca" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Modelo</label>
        <input type="text" name="modelo" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Ano</label>
        <input type="number" name="ano" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Placa</label>
        <input type="text" name="placa" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Cor</label>
        <input type="text" name="cor" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Opcionais</label>
        <textarea name="opcionais" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
<a href="{{ route('carros.index') }}" class="btn btn-secondary mt-3">Voltar</a>
@endsection
