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

        <a href="/produtos/create" class="btn btn-primary mb-5">Novo Produto</a>

        <table id="datatable" class="table table-striped">
            <thead>
                <tr>
                    <th>Ações</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Categoria</th>
                    <th>Imagem</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>
                            <a href="/produtos/{{ $produto->id }}/edit" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Editar Item"><i class="fas fa-pen"></i></a>
                            <form action="/produtos/{{ $produto->id }}" class="d-inline-block" method="POST" onSubmit="confirmarExclusao(event)">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Excluir Item"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                        <td>{{ $produto->nome_do_produto }}</td>
                        <td>{{ $produto->descricao_do_produto }}</td>
                        <td>{{ $produto->categoria->descricao }}</td>
                        <td><img src="{{ $produto->imagem_do_produto }}" height="40px"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $produtos->links() }}
    </div>
</div>

@stop
