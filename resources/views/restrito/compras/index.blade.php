@extends('adminlte::page')

@section('title', 'Compras')

@section('content_header')
<h1 class="m-0 text-dark"><i class="fas fa-home"></i> Compras
    <small class="text-muted">- Index</small>
</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Tabela de Compras
        </h3>
    </div>

    <div class="card-body">
        @if(session()->has('mensagem'))
            <div class="alert alert-success">
                {{ session()->get('mensagem') }}
            </div>
        @endif

        <a href="/compra/create" class="btn btn-primary mb-5">Nova Compra</a>

        <table id="datatable" class="table table-striped">
            <thead>
                <tr>
                    <th>Ações</th>
                    <th>Fornecedor</th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Valor Unitário</th>
                    <th>Total</th>
                    <th>Data Compra</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($compras as $compra)
                    <tr>
                        <td>
                            <a href="/compra/{{ $compra->id }}/edit" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Editar Item"><i class="fas fa-pen"></i></a>
                            <form action="/compra/{{ $compra->id }}" class="d-inline-block" method="POST" onSubmit="confirmarExclusao(event)">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Excluir Item"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                        <td>{{ $compra->nome }}</td>
                        <td>{{ $compra->descricao }}</td>
                        <td>{{ $compra->quantidade }}</td>
                        <td>{{ $compra->valor_unitario }}</td>
                        <td>{{ $compra->total }}</td>
                        <td>{{ $compra->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination"> {{$compras->links() }} </div>

    </div>
</div>

@stop
