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
  <body id="cadastro-body">
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

  <div id="componentC" class="container rounded">
    <div class="container pt-3 pb-4">
      <div class="row">
        <div  id="aviso" class="col-lg-5">
          <h2>Obtendo o link do seu servidor</h2>
          <p>acesse a aba do servidor que você vai cadastrar e clique na seta ao lado do nome dele</p>
          <img  class=" pt-2 rounded" src="{{ asset ('img/tutorial.jpg') }}" height="250px" alt="">
          <p class="pt-2">Depois, abaixo aparecerá o link que deve ser colocado, basta clicar em copiar</p>
          <img  class=" pt-2 rounded" src="{{ asset('img/tutorial2.jpg') }}" height="250px" alt="">
        </div>
        <div id="cadastro" class="col-lg-7 rounded" style="background-color: #fff;">
          <form action="" method="POST">
            <h1 class="mb-3 pt-3">Informações do Servidor</h1>
              <div class="input-form col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Nome</strong>
                      <input type="text" name="name" value="" class="form-control" placeholder="">
                  </div>
              </div>
              <div class="input-form col-xs-12 col-sm-12 col-md-12 pt-3">
                  <div class="form-group">
                      <strong>Link do Servidor</strong>
                      <input type="text" name="name" value="" class="form-control" placeholder="Exemplo: https://discord.gg/6duaudy">
                  </div>
              </div>
              <div class="input-form col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group mt-4">
                      <strong>Descrição</strong>
                      <textarea class="form-control" style="height:50px" name=""
                          placeholder=""></textarea>
                  </div>
              </div>
              <div class="input-form col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group mt-4">
                      <strong>tags</strong>
                      <input type="text" name="price" class="form-control" placeholder="jogos,etc">
                  </div>
              </div>
              <div class="btn-final text-center pt-4 mb-3">
                  <button id="sla" type="submit" class="btn rounded p-2 px-3">Cadastrar</button>
              </div>
          </div>
      
        </form>

        </div>
      
      </div>
    </div>
  </div>

  </div>
</body>
</html>