@extends('common.comum')
@section('title')
    Show
@endsection
@section('conteudo')

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
                                <img src="https://placeholder.pics/svg/50x50" class="d-inline-block align-text-center"
                                     alt="">
                                Servidores<br><h6 id="descubra" class="navbar-text fw-lighter">Descubra mais
                                    servidores</h6>
                            </a>
                            <form id="search" class="d-flex">
                                <input class="form-control " type="search" placeholder="Pesquisar..."
                                       aria-label="Search">
                                <button id="sla" class="btn btn-outline-success" type="submit">calma</button>
                            </form>
                        </div>
                    </nav>
                    <br>
                    {{--  @foreach ($servidores as $servidor) --}}
                    <div id="cards" class="container">

                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                            <div class="col-lg-3 mb-4">
                                <div class="card cartao text-center">
                                    <img src="https://placeholder.pics/svg/75x60/8BFFDA-8BFFDA/000000-8BFFDA"
                                         class="card-img-top" alt="">
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
@endsection
