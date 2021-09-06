@extends('adminlte::page')

@section('title', 'Estoque')

@section('content_header')
<h1 class="m-0 text-dark"><i class="fas fa-home"></i> Estoque
    <small class="text-muted">- Formulário</small>
</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Formulário de Controle de Estoque
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

        @if (isset($estoque))
            <form action="/estoque/{{ $estoque->id }}" method="POST">
            @method('PUT')
        @else
            <form action="/estoque" method="POST" enctype="multipart/form-data">
        @endif

            @csrf

            <div class="form-group">
                <label for="produto_id">Nome do produto</label>
                {!! Form::select('produto_id', $produtos, (isset($produtoSelecionado) ? $produtoSelecionado : null), ['class'=> 'form-control isSelect2'])  !!}
            </div>

            <div class="form-group">
                <label for="categoria_id">Categoria do produto</label>
                {!! Form::select('categoria_id', $categorias, (isset($categoriaSelecionada) ? $categoriaSelecionada : null), ['class'=> 'form-control isSelect2'])  !!}
            </div>

            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <label for="qtd_min">Quantidade Minima</label>
                        <input type="number" name="qtd_min" placeholder="Quantidade minima" class="form-control" value="{{ isset($estoque) ? $estoque->qtd_min : null }}">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="qtd_max">Quantidade Maxima</label>
                        <input type="number" name="qtd_max" placeholder="Quantidade maxima" class="form-control" value="{{ isset($estoque) ? $estoque->qtd_max : null }}">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="qtd_atual">Quantidade Atual</label>
                        <input type="number" name="qtd_atual" placeholder="Quantidade atual" class="form-control" value="{{ isset($estoque) ? $estoque->qtd_atual : null }}">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="vl_unitario">Valor Unitário</label>
                        <input type="decimal" name="vl_unitario" placeholder="Valor Unitário" class="form-control" value="{{ isset($estoque) ? $estoque->vl_unitario : null }}">
                    </div>
                </div>
            </div>
        
            <button type="submit" class="btn btn-success">Salvar</button>

        </form>
        <hr>
    </div>
</div>

@stop
