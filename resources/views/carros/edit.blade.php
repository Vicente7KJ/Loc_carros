<!DOCTYPE html>
<html>
<head>
    <title>Editar Carro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Editar Carro</h1>
        <form action="{{ route('carros.update', $carro->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca" value="{{ $carro->marca }}">
            </div>
            <div class="form-group">
                <label for="modelo">Modelo</label>
                <input type="text" class="form-control" id="modelo" name="modelo" value="{{ $carro->modelo }}">
            </div>
            <div class="form-group">
                <label for="ano">Ano</label>
                <input type="number" class="form-control" id="ano" name="ano" value="{{ $carro->ano }}">
            </div>
            <div class="form-group">
                <label for="placa">Placa</label>
                <input type="text" class="form-control" id="placa" name="placa" value="{{ $carro->placa }}">
            </div>
            <div class="form-group">
                <label for="cor">Cor</label>
                <input type="text" class="form-control" id="cor" name="cor" value="{{ $carro->cor }}">
            </div>
            <div class="form-group">
                <label for="opcionais">Opcionais</label>
                <textarea class="form-control" id="opcionais" name="opcionais">{{ $carro->opcionais }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('carros.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</body>
</html>
