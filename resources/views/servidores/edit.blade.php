@extends('common.comum')
@section('title')
    Editar
@endsection
@section('conteudo')

    <div id="componentC" class="container rounded">
        <div class="container pb-4">
            <div class="row">
                <div id="cadastro" class="col-lg-12 rounded" style="background-color: #fff;">

                    <form action=" {{ route('servidores.update',$servidores["id_servidor"]) }}" method="POST">
                        @method('PUT')
                        @csrf

                        <h1 class="mb-3 pt-3">Informações do Servidor</h1>
                        <div class="input-form col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nome</strong>
                                <label>
                                    <input type="text" name="nome" class="form-control" placeholder="Nome">
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
                                        <input type="text" name="link_servidor" class="form-control" placeholder="Exemplo: https://discord.gg/6duaudy">

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
