@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Dashboard</h1>
</div>
<!-- Carrossel de Carros -->
<div id="carrosselCarros" class="carousel slide mb-5" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://fotos-jornaldocarro-estadao.nyc3.cdn.digitaloceanspaces.com/wp-content/uploads/2020/05/11110138/2020-Chevrolet-Corvette-Stingray-245-1160x773.jpg" class="d-block w-100" alt="Chevrolet Corvette" style="max-height: 400px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
                <h5>Chevrolet Corvette</h5>
                <p>Esportivo com motor potente e design arrojado.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://fotos-jornaldocarro-estadao.nyc3.cdn.digitaloceanspaces.com/wp-content/uploads/2023/01/27155026/P90492711_highRes_the-all-new-bmw-m3-c-1536x864.jpg" class="d-block w-100" alt="BMW M3" style="max-height: 400px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
                <h5>BMW M3</h5>
                <p>Luxuoso, potente e com tecnologias avançadas.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://fotos-jornaldocarro-estadao.nyc3.cdn.digitaloceanspaces.com/wp-content/uploads/2023/03/23160100/Demon-170-3.png" class="d-block w-100" alt="Dodge Demon" style="max-height: 400px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block">
                <h5>Dodge Demon</h5>
                <p>O mais forte de sua geração.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carrosselCarros" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carrosselCarros" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
    </a>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Clientes</h5>
                <p class="card-text">Gerencie os registros de clientes.</p>
                <a href="{{ route('clientes.index') }}" class="btn btn-primary">Ver Clientes</a>
                <a href="{{ route('clientes.create') }}" class="btn btn-secondary">Adicionar Cliente</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Carros</h5>
                <p class="card-text">Gerencie os registros de carros.</p>
                <a href="{{ route('carros.index') }}" class="btn btn-primary">Ver Carros</a>
                <a href="{{ route('carros.create') }}" class="btn btn-secondary">Adicionar Carro</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Locações</h5>
                <p class="card-text">Gerencie os registros de locações.</p>
                <a href="{{ route('locacoes.index') }}" class="btn btn-primary">Ver Locações</a>
                <a href="{{ route('locacoes.create') }}" class="btn btn-secondary">Adicionar Locação</a>
            </div>
        </div>
    </div>
</div>
@endsection
