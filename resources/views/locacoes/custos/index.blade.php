<!DOCTYPE html>
<html>
<head>
    <title>Lista de Custos</title>
</head>
<body>
    <h1>Lista de Custos</h1>
    <a href="{{ route('custos.create') }}">Adicionar Custo</a>
    <ul>
        @foreach ($custos as $custo)
            <li>
                {{ $custo->descricao }} - R$ {{ $custo->valor }}
                <a href="{{ route('custos.show', $custo->id) }}">Ver</a>
                <a href="{{ route('custos.edit', $custo->id) }}">Editar</a>
                <form action="{{ route('custos.destroy', $custo->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
