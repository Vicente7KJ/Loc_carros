<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Custo</title>
</head>
<body>
    <h1>Adicionar Custo</h1>
    <form action="{{ route('custos.store') }}" method="POST">
        @csrf
        <label>Descrição: <input type="text" name="descricao"></label><br>
        <label>Valor: <input type="number" step="0.01" name="valor"></label><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
