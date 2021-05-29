<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>

    <script src="js/main.js"></script>
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
                    <a class="nav-link" aria-current="page" href="{{route('servidores.index')}}"> CASA </a>
                  </li>
                  <li class="nav-item" >
                    <a class="nav-link" href="{{route('servidores.create')}}">Servidores</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('servidores.create')}}">Discord</a>
                  </li>
                  <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="logbtn" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="https://github.com/mdo.png" alt="mdo" width="30" height="30" class="rounded-circle">
                    </a>
                    <ul id="dropdown-menu" class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="dropdownMenuLink">
                      <li><a class="dropdown-item" href="#">Configurações</a></li>
                      <li><a class="dropdown-item" href="#">Desconectar</a></li>
                    </ul>
                  </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <div id="component" class="container-fluid">
        <div class="container pt-2 pb-4">
          <div class="row">
            <div class="col col-sm-12 col-lg-6 col-md-12">
              <img src="https://placeholder.pics/svg/300x300" alt="">
            </div>
            <div class="col col-sm-12 col-lg-6 col-md-12">
              <br><br>
              <h1>texto aleatorio pra teste</h1><br>
              <h4>texto aleatorio pra teste</h4><br>
              <div class="grid">
                <a id="sla" type="button" class="btn btn-outline-info">Info</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="servers" class="block">
        <div class="container pt-3">
          <div class="row">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-light justify-content-between rounded">
                <div class="container-fluid p-3">
                  <a class="navbar-brand">
                    <img src="https://placeholder.pics/svg/50x50" class="d-inline-block align-text-center">
                    Servidores<br><h6  id="descubra" class="navbar-text fw-lighter">Descubra mais servidores</h6>
                  </a>
                  <form  id="search" class="d-flex">
                    <input class="form-control " type="search" placeholder="Pesquisar..." aria-label="Search">
                    <button id="sla" class="btn btn-outline-success" type="submit">calma</button>
                  </button>
                  </form>
                </div>
              </nav><br>
                {{--  @foreach ($servidores as $servidor) --}}
              <div id="cards" class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                  <div class="col-lg-3 mb-4">
                    <div class="card cartao text-center">
                    <img src="https://placeholder.pics/svg/75x60/8BFFDA-8BFFDA/000000-8BFFDA" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">$servidor->nome </h5>
                      <p class="card-text fw-lighter"> $servidor->descricao</p>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">$servidor->tags</li>
                    </ul>
                        {{--<div class="card-btn mt-2">


                            <button id="btn" class="btn btn-primary mx-2 mb-md-1" type="button">Sobre</button>
                            <button id="btn" class="btn btn-primary mb-md-1" type="button">Juntar-se</button>

                            --}}
                    </div>
                  </div>
                </div>
                    {{-- @endforeach--}}

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script> -->

  </body>
</html>
