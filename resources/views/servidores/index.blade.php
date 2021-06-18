@extends('common.comum')
@section('title')
    Home
@endsection
@section('conteudo')
     <div id="component" class="container-fluid">
        <div class="container pt-5 pb-4">
            <div class="row">
                <div class="col col-sm-12 col-lg-6 col-md-12">
                    <img  width="500px" src="{{ asset('img/intro.png') }}" alt="">
                </div>
                <div class="col col-sm-12 col-lg-6 col-md-12">
                    <br><br>
                    <h1>Encontre Seu Servidor Ideal</h1><br>
                    <h4 style="text-transform: none;">O Discord funciona com um servidor, onde acontece a comunicação. É possível incluir toda a empresa ou apenas um grupo de pessoas.</h4><br>
                    <div class="grid">
                        <a id="sla" type="button" class="btn btn-outline-info">Ir para servidores</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="servers" class="container">
        <div class="container pt-3">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light justify-content-between rounded">
                        <div class="container-fluid p-3">
                            <a class="navbar-brand">
                                <img src="{{ asset('img/logo.jpg') }}" width="50" class="d-inline-block align-text-center rounded-circle" alt="logo">
                                Servidores<br>
                                <h6 id="descubra" class="navbar-text fw-lighter">Descubra mais servidores</h6>
                            </a>
                        </div>
                    </nav><br>

                    <div class="g-4 row row-cols-3 row-cols-sm-1 row-cols-md-1">

                        <div id="cards" class="container" >

                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                                @foreach($servidores as $servidor)
                                <div class="col-lg-3 mb-4">
                                    <div class="card cartao" >

                                        <img src="https://placeholder.pics/svg/75x60/8BFFDA-8BFFDA/000000-8BFFDA" class="card-img-top" alt="i dont know">

                                            <div class="card-body">
                                                <h5 class="card-title text-center">{{$servidor->nome}}</h5>
                                                <p class="card-text text-center">{{$servidor->resumo_servidor}}</p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">-- colocar tags dps --</li>
                                            </ul>
                                            <div class="card-btn mt-2 ">

                                                <form action="{{ route('servidores.destroy', $servidor->id_servidor) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a id="btn" class="btn btn-primary mx-2 mb-md-1" type="button" href="{{$servidor->link_servidor}}">Entrar</a>
                                                    <button id="btn" class="btn btn-primary mx-2 mb-md-1" type="button">Sobre</button>
                                                    <a class="btn btn-primary mx-2 mb-md-1" type="button"
                                                       href="{{ route('servidores.edit',$servidor->id_servidor) }}">Editar</a>
                                                    <button class="btn btn-primary mx-2 mb-md-1" type="submit"
                                                            title="Apagar">Excluir
                                                    </button>
                                                </form>
                                            </div>

                                    </div>

                                </div>
                                @endforeach
                            </div>

                        </div>

                    </div>





  </div>
@endsection
