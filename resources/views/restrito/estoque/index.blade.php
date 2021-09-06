@extends('adminlte::page')

@section('title', 'Estoque')

@section('content_header')
<h1 class="m-0 text-dark"><i class="fas fa-home"></i> Estoque
    <small class="text-muted">- Index</small>
</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Tabela de Estoque
        </h3>
    </div>

    <div class="card-body">
        @if(session()->has('mensagem'))
            <div class="alert alert-success">
                {{ session()->get('mensagem') }}
            </div>
        @endif

        <a href="/estoque/create" class="btn btn-primary mb-5">Novo Estoque</a>

        <table id="datatable" class="table table-striped">
            <thead>
                <tr>
                    <th>Ações</th>
                    <th>Produto</th>
                    <th>Categoria</th>
                    <th>Qtd. Min</th>
                    <th>Qtd. Max</th>
                    <th>Qtd. Atual</th>
                    <th>Vl. Unitário</th>
                    <th>Atualizado</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($estoque as $est)
                    <tr>
                        <td>
                            <a href="/estoque/{{ $est->id }}/edit" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Editar Item"><i class="fas fa-pen"></i></a>
                            <form action="/estoque/{{ $est->id }}" class="d-inline-block" method="POST" onSubmit="confirmarExclusao(event)">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Excluir Item"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                        <td>{{ $est->produto->nome_do_produto }}</td>
                        <td>{{ $est->categoria->descricao }}</td>
                        <td>{{ $est->qtd_min }}</td>
                        <td>{{ $est->qtd_max }}</td>
                        <td>{{ $est->qtd_atual }}</td>
                        <td>{{ $est->vl_unitario }}</td>
                        <td>{{ $est->updated_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div style="padding-bottom:5px" class="pagination"> </div>

    </div>
</div>

@stop
