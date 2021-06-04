@extends('common.comum')
@section('title')
    Home
@endsection
@section('conteudo')

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
                      <input type="text" class="form-control px-4 py-3" placeholder="Digite aqui..."
                             aria-label="Recipient's username" aria-describedby="basic-addon2">
                      <a class="btn-lupa rounded" href="#"></a>
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
      </div>
      @foreach($servidores as $servidor)

          <div id="serversS" class="block">
            <div class="container">
              <div class="row">

                  <div class="row row-cols-3 row-cols-sm-1 row-cols-md-1">
                    <div class="col-lg-3 mb-4">

                      <img src="https://placeholder.pics/svg/75x60/8BFFDA-8BFFDA/000000-8BFFDA" class="card-img-top" alt="">
                      <div class="card-body">
                        <h5 class="card-title">{{$servidor->nome}}</h5>
                        <p class="card-text fw-lighter">deposite aqui as qualidades do seu servidor</p>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">conteudo, jogos,series, sla</li>
                      </ul>
                        <a class="btn btn-primary mb-md-1" type="button" href="{{ route('servidores.edit',$servidor->id_servidor) }}">Editar</a>
                    <form action="{{ route('servidores.destroy', $servidor->id_servidor) }}" method="POST">
                              @csrf
                              @method('DELETE')
                            <button class="btn btn-primary mb-md-1" type="submit" title="delete" >Excluir</button>
                    </form>
                    </div>


                    </div>

                  </div>
      @endforeach
  </div>
@endsection
