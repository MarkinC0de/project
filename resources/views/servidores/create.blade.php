@extends('common.comum')
@section('title')
    Create
@endsection
@section('conteudo')

    <div id="cadastro-body">
        <div id="componentC" class="container rounded">
            <div class="container pt-3 pb-4">
                <div class="row">
                    <div id="aviso" class="col-lg-5">
                        <h2>Obtendo o link do seu servidor</h2>
                        <p>acesse a aba do servidor que você vai cadastrar e clique na seta ao lado do nome dele</p>
                        <img class=" pt-2 rounded" src="{{ asset ('img/tutorial.jpg') }}" height="250px" alt="">
                        <p class="pt-2">Depois, abaixo aparecerá o link que deve ser colocado, basta clicar em
                            copiar</p>
                        <img class=" pt-2 rounded" src="{{ asset('img/tutorial2.jpg') }}" height="250px" alt="">
                    </div>
                    <div id="cadastro" class="col-lg-7 rounded" style="background-color: #fff;">
                        <form action="{{ route('servidores.store') }}" method="POST" >
                            @csrf
                            <h1 class="mb-3 pt-3">Informações do Servidor</h1>
                            <div class="input-form col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nome</strong>
                                    <label>
                                        <input type="text" name="nome" value="" class="form-control" placeholder="Nome">
                                    </label>
                                </div>
                                <div class="input-form col-xs-12 col-sm-12 col-md-12 ">
                                    <div class="form-group">
                                        <strong>Resumo</strong>
                                        <label >
                                            <input type="text" name="resumo_servidor" class="form-control" placeholder="Informe um breve resumo do seu servidor">
                                        </label>
                                    </div>
                            </div>
                            <div class="input-form col-xs-12 col-sm-12 col-md-12 pt-3">
                                <div class="form-group">
                                    <strong>Link do Servidor</strong>
                                    <label>
                                        <input type="text" name="link-servidor" value="" class="form-control"
                                               placeholder="Exemplo: https://discord.gg/6duaudy">
                                    </label>
                                </div>
                            </div>
                            <div class="input-form col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group mt-4">
                                    <strong>Descrição</strong>
                                    <label>
                                        <textarea class="form-control" style="height:50px" name="descricao"
                                            placeholder=""></textarea>
                                    </label>
                                </div>
                            </div>
                            <div class="input-form col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group mt-4">
                                    <strong>tags</strong>
                                    <label>
                                        <input type="text" name="tags" class="form-control" placeholder="jogos,etc">
                                    </label>
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
@endsection
