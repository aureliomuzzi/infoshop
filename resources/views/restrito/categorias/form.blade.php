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
            {!! Form::model($categoria, ['route' => ['restrito.categorias.update', $categoria->id], 'method' => 'PUT']) !!}
        @else
            {!! Form::open(['url' => route('restrito.categorias.store'), 'files' => true]) !!}
        @endif

        {{-- @if (isset($categoria))
            <form action="/categorias/{{ $categoria->id }}" method="POST">
            @method('PUT')
        @else
            <form action="/categorias" method="POST" enctype="multipart/form-data">
        @endif --}}
            @csrf

            <div class="form-group">
                {{-- <label for="descricao">Nome da Descrição</label>
                <input type="text" name="descricao" placeholder="Digite a descrição da categoria" class="form-control" value="{{ isset($categoria) ? $categoria->descricao : null }}"> --}}

                {!! Form::label('descricao', 'Nome da Descrição') !!}
                {!! Form::text('descricao', isset($categoria) ? $categoria->descricao : null, ['class' => 'form-control', 'required' => 'required']) !!}
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
            {{-- {!! Form::button('<span class="fa fa-fw fa-caret-square-o-right"></span> Continuar', ['type'=>'submit','class' => 'btn btn-primary']); !!} --}}
            {!! Form::close() !!}
        </form>
        <hr>
    </div>
</div>

@stop
