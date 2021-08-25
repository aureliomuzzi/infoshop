@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')
<h1 class="m-0 text-dark"><i class="fas fa-home"></i> Produtos
    <small class="text-muted">- Formulário</small>
</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Formulário de Produtos
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

        @if (isset($produto))
            <form action="/produtos/{{ $produto->id }}" method="POST">
            @method('PUT')
        @else
            <form action="/produtos" method="POST" enctype="multipart/form-data">
        @endif

            @csrf

            <div class="form-group">
                <label for="nome_do_produto">Nome do Produto</label>
                <input type="text" name="nome_do_produto" placeholder="Digite o nome do produto" class="form-control" value="{{ isset($produto) ? $produto->nome_do_produto : null }}">
            </div>

            <div class="form-group">
                <label for="descricao_do_produto">Descrição do Produto</label>
                <input type="text" name="descricao_do_produto" placeholder="Digite a descrição do produto" class="form-control" value="{{ isset($produto) ? $produto->descricao_do_produto : null }}">
            </div>

            <div class="form-group">
                <label for="referencia_do_produto">Referência do Produto</label>
                <input type="text" name="referencia_do_produto" placeholder="Digite a referência do produto" class="form-control" value="{{ isset($produto) ? $produto->referencia_do_produto : null }}">
            </div>

            <div class="form-group">
                <label for="imagem_do_produto">Imagem do Produto</label>
                <input type="file" name="imagem_do_produto" placeholder="Digite a referência do produto" class="form-control" value="{{ isset($produto) ? $produto->imagem_do_produto : null }}">
            </div>

            <div class="form-group">
                <label for="categoria_id">Referência do Produto</label>
                <input type="text" name="categoria_id" placeholder="Informe a Categoria do Produto" class="form-control" value="{{ isset($produto) ? $produto->categoria_id : null }}">
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>

        </form>
        <hr>
    </div>
</div>

@stop
