<!DOCTYPE html>
<html>
<head>
    <title>Editar Locação</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Editar Locação</h1>
        <form action="{{ route('locacoes.update', $locacao->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="carro_id">Carro</label>
                <select class="form-control" id="carro_id" name="carro_id">
                    @foreach ($carros as $carro)
                        <option value="{{ $carro->id }}" @if ($locacao->carro_id == $carro->id) selected @endif>{{ $carro->modelo }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="cliente_id">Cliente</label>
                <select class="form-control" id="cliente_id" name="cliente_id">
                    @foreach ($clientes as $cliente)
                        <option value="{{ $cliente->id }}" @if ($locacao->cliente_id == $cliente->id) selected @endif>{{ $cliente->nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="data_inicio">Data Início</label>
                <input type="date" class="form-control" id="data_inicio" name="data_inicio" value="{{ $locacao->data_inicio }}">
            </div>
            <div class="form-group">
                <label for="data_fim">Data Fim</label>
                <input type="date" class="form-control" id="data_fim" name="data_fim" value="{{ $locacao->data_fim }}">
            </div>
            <div class="form-group">
                <label for="valor_pago">Valor Pago</label>
                <input type="number" step="0.01" class="form-control" id="valor_pago" name="valor_pago" value="{{ $locacao->valor_pago }}">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('locacoes.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</body>
</html>
