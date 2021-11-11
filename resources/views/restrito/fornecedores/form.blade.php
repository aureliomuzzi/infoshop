@extends('adminlte::page')

@section('title', 'Fornecedores')

@section('content_header')
<h1 class="m-0 text-dark"><i class="fas fa-home"></i> Fornecedores
    <small class="text-muted">- Formulário</small>
</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Formulário de Fornecedores
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

        @if (isset($fornecedor))
            <form action="/fornecedor/{{ $fornecedor->id }}" method="POST">
            @method('PUT')
        @else
            <form action="/fornecedor" method="POST" enctype="multipart/form-data">
        @endif

            @csrf

            <div class="form-group">
                <label for="nome">Nome do Fornecedor</label>
                <input type="text" name="nome" placeholder="Digite o nome do fornecedor" class="form-control" value="{{ isset($fornecedor) ? $fornecedor->nome : null }}">
            </div>

            <div class="form-group">
                <label for="fantasia">Nome Fantasia</label>
                <input type="text" name="fantasia" placeholder="Digite o nome fantasia" class="form-control" value="{{ isset($fornecedor) ? $fornecedor->fantasia : null }}">
            </div>

            <div class="form-group">
                <label for="tipo">Tipo</label>
                <select id="tipoPessoa" name="tipo" class="form-control isTipo">
                    <option value="">Selecione o tipo de pessoa...</option>
                    <option value="PF" {{ isset($fornecedor) && $fornecedor->tipo == "PF" ? "selected='selected'" : "" }}>Pessoa Física</option>
                    <option value="PJ" {{ isset($fornecedor) && $fornecedor->tipo == "PJ" ? "selected='selected'" : "" }}>Pessoa Jurídica</option>
                </select>
            </div>

            <div class="form-group">
                <label for="documento">CPF ou CNPJ</label>
                <input type="text" id="documento" name="documento" placeholder="Numero de CPF ou CNPJ" class="form-control" value="{{ isset($fornecedor) ? $fornecedor->documento : null }}">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control">
                    <option value= 1 {{ isset($fornecedor) && $fornecedor->status == 1 ? "selected='selected'" : "" }}>Ativo</option>
                    <option value= 0 {{ isset($fornecedor) && $fornecedor->status == 0 ? "selected='selected'" : "" }}>Inativo</option>
                </select>
            </div>

            <div class="form-group">
                <label for="cep">CEP</label>
                <input type="cep" id="cep" name="cep" placeholder="Digite número cep principal" class="form-control" value="{{ isset($fornecedor) ? $fornecedor->cep : null }}">
            </div>

            <div class="form-group">
                <label for="logradouro">Logradouro</label>
                <input type="logradouro" id="logradouro" name="logradouro" placeholder="Digite logradouro" class="form-control" value="{{ isset($fornecedor) ? $fornecedor->logradouro : null }}">
            </div>

            <div class="form-group">
                <label for="numero">Numero</label>
                <input type="numero" id="numero" name="numero" placeholder="Digite numero" class="form-control" value="{{ isset($fornecedor) ? $fornecedor->numero : null }}">
            </div>

            <div class="form-group">
                <label for="complemento">Complemento</label>
                <input type="complemento" id="complemento" name="complemento" placeholder="Digite o complemento" class="form-control" value="{{ isset($fornecedor) ? $fornecedor->complemento : null }}">
            </div>

            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input type="bairro" id="bairro" name="bairro" placeholder="Digite bairro" class="form-control" value="{{ isset($fornecedor) ? $fornecedor->bairro : null }}">
            </div>

            <div class="form-group">
                <label for="localidade">Localidade</label>
                <input type="localidade" id="localidade" name="localidade" placeholder="Digite a localidade" class="form-control" value="{{ isset($fornecedor) ? $fornecedor->localidade : null }}">
            </div>

            <div class="form-group">
                <label for="uf">UF</label>
                <input type="uf" id="uf" name="uf" placeholder="Digite a UF" class="form-control" value="{{ isset($fornecedor) ? $fornecedor->uf : null }}">
            </div>

            <button type="submit" class="btn btn-success">Salvar</button>

        </form>
        <hr>
    </div>
</div>

@stop
