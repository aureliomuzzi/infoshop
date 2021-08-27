@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
<h1 class="m-0 text-dark"><i class="fas fa-home"></i> Categorias
    <small class="text-muted">- Formulário</small>
</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Formulário de Categorias
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

        @if (isset($categoria))
            <form action="/categorias/{{ $categoria->id }}" method="POST">
            @method('PUT')
        @else
            <form action="/categorias" method="POST" enctype="multipart/form-data">
        @endif

        @csrf

        <div class="form-group">
            <label for="descricao">Nome da Descricao</label>
            <input type="text" name="descricao" placeholder="Digite o nome da descrição" class="form-control" value="{{ isset($categoria) ? $categoria->descricao : null }}">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>

        </form>

        <hr>
    </div>
</div>
@endsection

