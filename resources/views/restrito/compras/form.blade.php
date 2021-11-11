@extends('adminlte::page')

@section('title', 'Compras')

@section('content_header')
<h1 class="m-0 text-dark"><i class="fas fa-home"></i> Compras
    <small class="text-muted">- Formulário</small>
</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Formulário de Compras
        </h3>
    </div>

    <div class="card-body">
        @if($errors->any())
            <div class="alert alert-danger">
                <p><strong>Erro ao realizar esta operação</strong></p>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        @if (isset($compras))
            <form action="/compra/{{ $compra->id }}" method="POST">
            @method('PUT')
        @else
            <form action="/compra" method="POST" enctype="multipart/form-data">
        @endif

            @csrf

            <div class="form-group">
                <label for="fornecedor_id">Forncedor</label>
                {!! Form::select('produto_id', $fornecedores, (isset($fornecedorSelecionado) ? $fornecedorSelecionado : null), ['class'=> 'form-control isSelect2'])  !!}
            </div>

            <div class="form-group">
                <label for="descricao">Nome Descricao</label>
                <input type="text" name="descricao" placeholder="Digite o nome descricao" class="form-control" value="{{ isset($compra) ? $compra->descricao : null }}">
            </div>

            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input type="number" name="quantidade" placeholder="Digite o nome quantidade" class="form-control" value="{{ isset($compra) ? $compra->quantidade : null }}">
            </div>

            <div class="form-group">
                <label for="valor_unitario">Valor Unitário</label>
                <input type="decimal" name="valor_unitario" placeholder="Digite o nome valor_unitario" class="form-control" value="{{ isset($compra) ? $compra->valor_unitario : null }}">
            </div>

            <div class="form-group">
                <label for="total">Total da Compra</label>
                <input type="decimal" name="total" placeholder="Digite o nome total" disabled class="form-control" value="{{ isset($compra) ? $compra->total : null }}">
            </div>

            <button type="submit" class="btn btn-success">Salvar</button>

        </form>
        <hr>
    </div>
</div>

@stop
