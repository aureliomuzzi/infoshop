@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
<h1 class="m-0 text-dark"><i class="fas fa-home"></i> Clientes
    <small class="text-muted">- Formulário</small>
</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Formulário de Clientes
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

        @if (isset($cliente))
            <form action="/clientes/{{ $cliente->id }}" method="POST">
            @method('PUT')
        @else
            <form action="/clientes" method="POST" enctype="multipart/form-data">
        @endif

            @csrf

            <div class="form-group">
                <label for="nome">Nome do Cliente</label>
                <input type="text" name="nome" placeholder="Digite o nome do cliente" class="form-control" value="{{ isset($cliente) ? $cliente->nome : null }}">
            </div>

            <div class="form-group">
                <label for="documento">CPF ou CNPJ</label>
                <input type="text" name="documento" placeholder="Numero de CPF ou CNPJ" class="form-control" value="{{ isset($cliente) ? $cliente->documento : null }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Digite email principal" class="form-control" value="{{ isset($cliente) ? $cliente->email : null }}">
            </div>

            <div class="form-group">
                <label for="whatsapp">Whatsapp</label>
                <input type="whatsapp" name="whatsapp" placeholder="Digite número Whatsapp principal" class="form-control isFone" value="{{ isset($cliente) ? $cliente->whatsapp : null }}">
            </div>

            <div class="form-group">
                <label for="cep">CEP</label>
                <input type="cep" id="cep" name="cep" placeholder="Digite número cep principal" class="form-control" value="{{ isset($cliente) ? $cliente->cep : null }}">
            </div>

            <div class="form-group">
                <label for="logradouro">Logradouro</label>
                <input type="logradouro" id="logradouro" name="logradouro" placeholder="Digite logradouro" class="form-control" value="{{ isset($cliente) ? $cliente->logradouro : null }}">
            </div>

            <div class="form-group">
                <label for="numero">Numero</label>
                <input type="numero" id="numero" name="numero" placeholder="Digite numero" class="form-control" value="{{ isset($cliente) ? $cliente->numero : null }}">
            </div>

            <div class="form-group">
                <label for="complemento">Complemento</label>
                <input type="complemento" id="complemento" name="complemento" placeholder="Digite o complemento" class="form-control" value="{{ isset($cliente) ? $cliente->complemento : null }}">
            </div>

            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input type="bairro" id="bairro" name="bairro" placeholder="Digite bairro" class="form-control" value="{{ isset($cliente) ? $cliente->bairro : null }}">
            </div>

            <div class="form-group">
                <label for="localidade">Localidade</label>
                <input type="localidade" id="localidade" name="localidade" placeholder="Digite a localidade" class="form-control" value="{{ isset($cliente) ? $cliente->localidade : null }}">
            </div>

            <div class="form-group">
                <label for="uf">UF</label>
                <input type="uf" id="uf" name="uf" placeholder="Digite a UF" class="form-control" value="{{ isset($cliente) ? $cliente->uf : null }}">
            </div>

            <button type="submit" class="btn btn-success">Salvar</button>

        </form>
        <hr>
    </div>
</div>

@stop
