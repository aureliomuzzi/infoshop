@extends('adminlte::page')

@section('title', 'Início')

@section('content_header')
<h1 class="m-0 text-dark"><i class="fas fa-home"></i> Início
    <small class="text-muted">- Bem-vindo ao sistema InfoShop - Loja de Informática</small>
</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-3">
            <div class="small-box bg-gradient-success">
                <div class="inner">
                    <h3>44</h3>
                    <p>Clientes Cadastrados</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Mais Informações <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-3">
            <div class="small-box bg-gradient-secondary">
                <div class="inner">
                    <h3>44</h3>
                    <p>Total de Compras</p>
                </div>
                <div class="icon">
                    <i class="fas fa-hand-holding-usd"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Mais Informações <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-3">
            <div class="small-box bg-gradient-primary">
                <div class="inner">
                    <h3>44</h3>
                    <p>Total de Vendas</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Mais Informações <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-3">
            <div class="small-box bg-gradient-warning">
                <div class="inner">
                    <h3>44</h3>
                    <p>Estoque Total</p>
                </div>
                <div class="icon">
                    <i class="fas fa-cube"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Mais Informações <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12">
            <p class="text-center">Área do Gráfico Despesas x Receitas</p>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12">
            <p class="text-center">Área do Gráfico Estoque por Categorias</p>
        </div>
    </div>
@stop
