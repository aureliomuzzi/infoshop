@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')
<h1 class="m-0 text-dark"><i class="fas fa-home"></i> Produtos
    <small class="text-muted">- Index</small>
</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Tabela de Produtos
        </h3>
    </div>

    <div class="card-body">
        @if(session()->has('mensagem'))
            <div class="alert alert-success">
                {{ session()->get('mensagem') }}
            </div>
        @endif

        <a href="/produtos/create" class="btn btn-primary mb-5">Nova Produtos</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Ações</th>
                    <th>Descrição</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>
                            <a href="/produtos/{{ $produto->id }}/edit" class="btn btn-primary btn-sm">Editar</a>
                            <form action="/produtos/{{ $produto->id }}" class="d-inline-block" method="POST" onSubmit="confirmarExclusao(event)">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Excluir</button>
                            </form>
                        </td>
                        <td>{{ $produto->descricao }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $produtos->links() }}
    </div>
</div>

@stop
