<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonte Google-->

    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/main.css"/>

    <title>Hello, world!</title>
  </head>
  <body>
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
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item" >
                <a class="nav-link" href="#">Servidores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Discord</a>
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

      <div id="componentP" class="container-fluid" style="background-color: #6265e9;">
        <div class="row">
          <div id="foto" class="col-lg-2 pt-5 ps-5">
            <img src="https://github.com/mdo.png" alt="mdo" width="100" height="100" class="rounded-circle">
          </div>
          <div class="col-lg-2 pt-5">
            <h2>andree</h2> <span>#0658</span>
          </div>
        </div>
      </div>
      <div id="kk" class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <h1>Seus servidores</h1>
            <button id="sls" type="button" class="btn btn-outline-info text-decoration-underline">Cadastrar Servidor</button>
          </div>
        </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>