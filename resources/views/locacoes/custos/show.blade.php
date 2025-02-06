<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Custo</title>
</head>
<body>
    <h1>Detalhes do Custo</h1>
    <p>Descrição: {{ $custo->descricao }}</p>
    <p>Valor: R$ {{ $custo->valor }}</p>
    <a href="{{ route('custos.index') }}">Voltar</a>
</body>
</html>
