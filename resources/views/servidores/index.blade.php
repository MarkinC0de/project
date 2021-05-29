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
      <div id="componentS" class="col">
        <div class="container pt-5">
          <div class="row">
            <div class="col-lg-3">
              <img src="https://placeholder.pics/svg/200x200" alt="" class="rounded"> <br>
            </div>
            <div class="col-lg-6">
              <br><br>
              <h1>Procure por Servidores</h1><br>
              <h4>Encontre pessoas por todo mundo</h4><br>
              <div class="input-group mb-3">
                <input type="text" class="form-control px-4 py-3" placeholder="Digite aqui..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                <a class="btn-lupa rounded" href="#"><img width="30px" src="/paginaweb/assets/lupa-arredondada.png" alt=""></a>
              </div>
            <div class="row">
              <div class="col-lg-12">
                <a id="sla" class="btn btn-primary" href="#" role="button">assunto</a>
                <a id="sla" class="btn btn-primary" href="#" role="button">assunto</a>
                <a id="sla" class="btn btn-primary" href="#" role="button">assunto</a>
                <a id="sla" class="btn btn-primary" href="#" role="button">assunto</a>
              </div>
            </div>
          </div>
        </div>
      </div><br>
      <div id="serversS" class="block">
        <div class="container">
          <div class="row">
            <div id="cards" class="container">
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                <div class="col-lg-3 mb-4"> 
                  <div class="card cartao text-center">
                  <img src="https://placeholder.pics/svg/75x60/8BFFDA-8BFFDA/000000-8BFFDA" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title">nome</h5>
                    <p class="card-text fw-lighter">deposite aqui as qualidades do seu servidor</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">conteudo, jogos,series, sla</li>
                  </ul>
                  <div class="card-btn mt-2">
                    <button id="btn" class="btn btn-primary mx-2 mb-md-1" type="button">Sobre</button>
                    <button id="btn" class="btn btn-primary mb-md-1" type="button">Juntar-se</button>
                  </div>
                </div>  
              </div>
                <div class="col-lg-3 mb-4"> 
                  <div class="card cartao text-center">
                  <img src="https://placeholder.pics/svg/75x60/8BFFDA-8BFFDA/000000-8BFFDA" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title">nome</h5>
                    <p class="card-text fw-lighter">deposite aqui as qualidades do seu servidor</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">conteudo, jogos,series, sla</li>
                  </ul>
                  <div class="card-btn mt-2">
                    <button id="btn" class="btn btn-primary mx-2 mb-md-1" type="button">Sobre</button>
                    <button id="btn" class="btn btn-primary mb-md-1" type="button">Juntar-se</button>
                  </div>
                </div>  
              </div>
                <div class="col-lg-3 mb-4"> 
                  <div class="card cartao text-center">
                  <img src="https://placeholder.pics/svg/75x60/8BFFDA-8BFFDA/000000-8BFFDA" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title">nome</h5>
                    <p class="card-text fw-lighter">deposite aqui as qualidades do seu servidor</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">conteudo, jogos,series, sla</li>
                  </ul>
                  <div class="card-btn mt-2">
                    <button id="btn" class="btn btn-primary mx-2 mb-md-1" type="button">Sobre</button>
                    <button id="btn" class="btn btn-primary mb-md-1" type="button">Juntar-se</button>
                  </div>
                </div>    
              </div>
                <div class="col-lg-3 mb-4"> 
                  <div class="card cartao text-center">
                  <img src="https://placeholder.pics/svg/75x60/8BFFDA-8BFFDA/000000-8BFFDA" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title">nome</h5>
                    <p class="card-text fw-lighter">deposite aqui as qualidades do seu servidor</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">conteudo, jogos,series, sla</li>
                  </ul>
                  <div class="card-btn mt-2">
                    <button id="btn" class="btn btn-primary mx-2 mb-md-1" type="button">Sobre</button>
                    <button id="btn" class="btn btn-primary mb-md-1" type="button">Juntar-se</button>
                  </div>
                </div>      
              </div>
                <div class="col-lg-3 mb-4"> 
                  <div class="card cartao text-center">
                  <img src="https://placeholder.pics/svg/75x60/8BFFDA-8BFFDA/000000-8BFFDA" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title">nome</h5>
                    <p class="card-text fw-lighter">deposite aqui as qualidades do seu servidor</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">conteudo, jogos,series, sla</li>
                  </ul>
                  <div class="card-btn mt-2">
                    <button id="btn" class="btn btn-primary mx-2 mb-md-1" type="button">Sobre</button>
                    <button id="btn" class="btn btn-primary mb-md-1" type="button">Juntar-se</button>
                  </div>
                </div>      
              </div>
                <div class="col-lg-3 mb-4"> 
                  <div class="card cartao text-center">
                  <img src="https://placeholder.pics/svg/75x60/8BFFDA-8BFFDA/000000-8BFFDA" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title">nome</h5>
                    <p class="card-text fw-lighter">deposite aqui as qualidades do seu servidor</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">conteudo, jogos,series, sla</li>
                  </ul>
                  <div class="card-btn mt-2">
                    <button id="btn" class="btn btn-primary mx-2 mb-md-1" type="button">Sobre</button>
                    <button id="btn" class="btn btn-primary mb-md-1" type="button">Juntar-se</button>
                  </div>
                </div>      
              </div>
                <div class="col-lg-3 mb-4"> 
                  <div class="card cartao text-center">
                  <img src="https://placeholder.pics/svg/75x60/8BFFDA-8BFFDA/000000-8BFFDA" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title">nome</h5>
                    <p class="card-text fw-lighter">deposite aqui as qualidades do seu servidor</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">conteudo, jogos,series, sla</li>
                  </ul>
                  <div class="card-btn mt-2">
                    <button id="btn" class="btn btn-primary mx-2 mb-md-1" type="button">Sobre</button>
                    <button id="btn" class="btn btn-primary mb-md-1" type="button">Juntar-se</button>
                  </div>
                </div>      
              </div>
                <div class="col-lg-3 mb-4"> 
                  <div class="card cartao text-center">
                <img src="https://placeholder.pics/svg/75x60/8BFFDA-8BFFDA/000000-8BFFDA" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">nome</h5>
                  <p class="card-text fw-lighter">deposite aqui as qualidades do seu servidor</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">conteudo, jogos,series, sla</li>
                </ul>
                <div class="card-btn mt-2">
                  <button id="btn" class="btn btn-primary mx-2 mb-md-1" type="button">Sobre</button>
                  <button id="btn" class="btn btn-primary mb-md-1" type="button">Juntar-se</button>
                </div>
              </div></div>
            </div> 
    <div id="page" class="container">
      <nav class="page-nav" aria-label="page-nav">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
      </div>
  </body>
</html>