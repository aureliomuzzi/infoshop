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
            {!! Form::model($categoria, ['route' => ['categorias.update', $categoria->id], 'method' => 'PUT']) !!}
        @else
            {!! Form::open(['url' => route('categorias.store'), 'files' => true]) !!}
        @endif

        <div class="form-group">
            {!! Form::label('descricao', 'Nome da Descrição') !!}
            {!! Form::text('descricao', isset($categoria) ? $categoria->descricao : null, ['class' => 'form-control', 'required' => 'required']) !!}
        </div>

        {!! Form::button('Salvar', ['type'=>'submit','class' => 'btn btn-outline-primary']); !!}
        {!! Form::close() !!}
        <hr>
    </div>
</div>
@endsection

