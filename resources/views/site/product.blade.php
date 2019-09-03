@extends('site.layout')

@section('titulo')
    {{$titulo}}
@stop

@section('conteudo')
<main role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
    <div class="container">
        <h1 class="display-3">MarketPrice</h1>
        <p>Produtos</p>
    </div>
    </div>

    <div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
        <h2>Arroz Preto Tio João</h2>
        <img src="{{URL::to('/')}}/images/arrozpreto.png" alt="Picareta" title="Produto 1" width="220px" height="290px">
        </div>
        <div class="col-md-4">
        <h2>Feijão Kicaldo</h2>
        <img src="{{URL::to('/')}}/images/feijao.png" alt="Produto" title="Produto" width="250px" height="260px">
        </div>
        <div class="col-md-4">
        <h2>Macarrão Renata</h2>
        <img src="{{URL::to('/')}}/images/macarrao.png" alt="Produto" title="Produto" width="250px" height="260px">
        </div>
    </div>

    <hr>

    </div> <!-- /container -->

    </main>
@stop

@section('textoRodape')
    {{$rodape}}
@stop
