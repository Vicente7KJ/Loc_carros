@extends('layouts.app')

@section('title', 'Lista de Carros')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Lista de Carros</h1>
    <a href="{{ route('carros.create') }}" class="btn btn-primary">Adicionar Carro</a>
</div>
<div class="row">
    @foreach ($carros as $carro)
        <div class="col-md-4">
            <div class="card mb-4">
                @if($carro->imagens->count() > 0)
                    <div id="carrossel-{{ $carro->id }}" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($carro->imagens as $index => $imagem)
                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                    <img src="{{ asset('storage/' . $imagem->caminho) }}" class="d-block w-100" alt="{{ $carro->modelo }}" style="max-height: 400px; object-fit: cover;">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carrossel-{{ $carro->id }}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carrossel-{{ $carro->id }}" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                        <div class="carousel-indicators">
                            @foreach ($carro->imagens as $index => $imagem)
                                <button type="button" data-bs-target="#carrossel-{{ $carro->id }}" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $index + 1 }}"></button>
                            @endforeach
                        </div>
                    </div>
                @else
                    <img src="https://via.placeholder.com/800x400?text=Sem+Imagem" class="card-img-top" alt="{{ $carro->modelo }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $carro->marca }} {{ $carro->modelo }}</h5>
                    <p class="card-text">Ano: {{ $carro->ano }}</p>
                    <p class="card-text">Placa: {{ $carro->placa }}</p>
                    <p class="card-text">Cor: {{ $carro->cor }}</p>
                    <p class="card-text">Status: {{ $carro->status }}</p> <!-- Exibir status -->
                    <a href="{{ route('carros.show', $carro->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('carros.edit', $carro->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('carros.destroy', $carro->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
