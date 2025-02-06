<!DOCTYPE html>
<html>
<head>
    <title>Detalhes da Locação</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Detalhes da Locação</h1>
        <p><strong>Carro:</strong> {{ $locacao->carro->modelo }}</p>
        <p><strong>Cliente:</strong> {{ $locacao->cliente->nome }}</p>
        <p><strong>Data Início:</strong> {{ $locacao->data_inicio }}</p>
        <p><strong>Data Fim:</strong> {{ $locacao->data_fim }}</p>
        <p><strong>Valor Pago:</strong> R$ {{ $locacao->valor_pago }}</p>
        <a href="{{ route('locacoes.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</body>
</html>
