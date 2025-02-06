<!DOCTYPE html>
<html>
<head>
    <title>Editar Custo</title>
</head>
<body>
    <h1>Editar Custo</h1>
    <form action="{{ route('custos.update', $custo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Descrição: <input type="text" name="descricao" value="{{ $custo->descricao }}"></label><br>
        <label>Valor: <input type="number" step="0.01" name="valor" value="{{ $custo->valor }}"></label><br>
        <button type="submit">Salvar</button>
    </form>
    <a href="{{ route('custos.index') }}">Voltar</a>
</body>
</html>
