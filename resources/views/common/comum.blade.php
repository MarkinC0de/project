<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonte Google-->

    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css') }}">
    <title>Meet Find - App @yield('title')</title>
</head>
<body style="background-color: #6265e9" >
<div id="header" class="col-sm-12 col-lg-12 col-md-12">
    <nav id="nav" class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">MeetFind</a>
            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-1">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('servidores.index') }}">Home</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="{{ route('servidores.create') }}">Criar Servidores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{-- route('servidores.show') --}}">Servidores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Discord</a>
                    </li>
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="logbtn" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="mdo" width="30" height="30" class="rounded-circle">
                        </a>
                    </div>
                </ul>
                <ul id="dropdown-menu" class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Configurações</a></li>
                    <li><a class="dropdown-item" href="#">Desconectar</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>


    @yield('conteudo')
</body>
</html>
