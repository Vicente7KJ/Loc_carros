<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Locadora de Veículos')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
        }
        .footer-icon {
            width: 50px;
            height: auto;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('dashboard') }}">Locadora de Veículos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('carros.index') }}">Carros</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('clientes.index') }}">Clientes</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('locacoes.index') }}">Locações</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('custos.index') }}">Custos</a></li>
                </ul>
                <ul class="navbar-nav">
                    @auth
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-danger">Logout</button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4 content">
        @yield('content')
    </div>

    <footer class="bg-dark text-white pt-4 pb-4 mt-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3">
                    <img src="{{ asset('icons/tarifa.png') }}" alt="Tarifa com Preço Justo" class="footer-icon mb-2">
                    <h5>TARIFA COM PREÇO JUSTO</h5>
                    <p>Oferecemos tarifas justas e competitivas.</p>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('icons/km.png') }}" alt="Quilometragem Livre" class="footer-icon mb-2">
                    <h5>QUILOMETRAGEM LIVRE</h5>
                    <p>Aproveite a quilometragem ilimitada.</p>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('icons/car.png') }}" alt="3 Horas Extras na Devolução" class="footer-icon mb-2">
                    <h5>3H EXTRAS NA DEVOLUÇÃO</h5>
                    <p>Ganhe 3 horas extras na devolução do veículo.</p>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('icons/atendimento.png') }}" alt="Atendimento Personalizado" class="footer-icon mb-2">
                    <h5>ATENDIMENTO PERSONALIZADO</h5>
                    <p>Oferecemos um atendimento personalizado e de qualidade.</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col text-center">
                    <p>Aqui você encontra as melhores vantagens e o preço mais justo do mercado. Confira as ofertas que mais se adequam ao seu perfil e garanta a sua viagem com maior tranquilidade.</p>
                    <small> Válida para períodos de locação de até 30 dias.</small>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
