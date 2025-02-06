<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Detalhes do Cliente</h1>
        <p><strong>Nome:</strong> {{ $cliente->nome }}</p>
        <p><strong>Email:</strong> {{ $cliente->email }}</p>
        <p><strong>Telefone:</strong> {{ $cliente->telefone }}</p>
        <p><strong>Endereço:</strong> {{ $cliente->endereco }}</p>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</body>
</html>
