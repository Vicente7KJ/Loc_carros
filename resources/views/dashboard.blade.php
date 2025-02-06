<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
        }
        #sidebar {
            width: 250px;
            background: #343a40;
            color: #fff;
            min-height: 100vh;
            padding-top: 20px;
            display: none;
            position: fixed;
            z-index: 1000;
        }
        #sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px;
        }
        #sidebar a:hover {
            background: #495057;
        }
        .content {
            flex: 1;
            padding: 20px;
            margin-left: 250px;
        }
        .navbar-toggler {
            border: none;
            background: none;
        }
        .navbar-toggler-icon {
            background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 30 30\'%3E%3Cpath stroke=\'rgba%2888, 88, 88, 1%29\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-miterlimit=\'10\' d=\'M4 7h22M4 15h22M4 23h22\'/%3E%3C/svg%3E');
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" id="menu-toggle">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <div id="sidebar">
        <h4 class="text-center">Menu</h4>
        <a href="{{ route('clientes.index') }}">Ver Clientes</a>
        <a href="{{ route('clientes.create') }}">Adicionar Cliente</a>
        <a href="{{ route('carros.index') }}">Ver Carros</a>
        <a href="{{ route('carros.create') }}">Adicionar Carro</a>
        <a href="{{ route('locacoes.index') }}">Ver Locações</a>
        <a href="{{ route('locacoes.create') }}">Adicionar Locação</a>
    </div>
    <div class="content">
        <div class="container mt-5">
            <h1 class="mb-4">Dashboard</h1>
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
        </div>
    </div>
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            var sidebar = document.getElementById('sidebar');
            if (sidebar.style.display === 'block') {
                sidebar.style.display = 'none';
            } else {
                sidebar.style.display = 'block';
            }
        });
    </script>
</body>
</html>
