<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Carro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Detalhes do Carro</h1>
        <p><strong>Marca:</strong> {{ $carro->marca }}</p>
        <p><strong>Modelo:</strong> {{ $carro->modelo }}</p>
        <p><strong>Ano:</strong> {{ $carro->ano }}</p>
        <p><strong>Placa:</strong> {{ $carro->placa }}</p>
        <p><strong>Cor:</strong> {{ $carro->cor }}</p>
        <p><strong>Opcionais:</strong> {{ $carro->opcionais }}</p>
        <a href="{{ route('carros.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</body>
</html>
