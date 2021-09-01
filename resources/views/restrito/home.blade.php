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
                    <h3>{{ $tClientes }}</h3>
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
                    <h3>{{ $tCompras }}</h3>
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
                    <h3>{{ $tVendas }}</h3>
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
                    <h3>{{ $tEstoque }}</h3>
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
        <div class="col-6">
            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Receitas vs Despesas</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <canvas id="receita-despesa" style="min-height: 250px; height: 350px; max-height: 350px; max-width: 100%;"></canvas>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-6">
            <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title"> Produtos em Estoque</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <canvas id="estoque" style="min-height: 250px; height: 350px; max-height: 350px; max-width: 100%;"></canvas>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
        </div>
    </div>
@stop
