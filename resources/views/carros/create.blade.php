@extends('layouts.app')

@section('title', 'Adicionar Carro')

@section('content')
<h1>Adicionar Carro</h1>
<form action="{{ route('carros.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Marca</label>
        <input type="text" name="marca" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Modelo</label>
        <input type="text" name="modelo" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Ano</label>
        <input type="number" name="ano" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Placa</label>
        <input type="text" name="placa" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Cor</label>
        <input type="text" name="cor" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Opcionais</label>
        <textarea name="opcionais" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Imagens do Veículo</label>
        <input type="file" name="imagens[]" class="form-control-file" multiple>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
<a href="{{ route('carros.index') }}" class="btn btn-secondary mt-3">Voltar</a>
@endsection
