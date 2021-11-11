@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
<h1 class="m-0 text-dark"><i class="fas fa-home"></i> Clientes
    <small class="text-muted">- Index</small>
</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Tabela de Clientes
        </h3>
    </div>

    <div class="card-body">
        @if(session()->has('mensagem'))
            <div class="alert alert-success">
                {{ session()->get('mensagem') }}
            </div>
        @endif

        <a href="/clientes/create" class="btn btn-primary mb-5">Novo Cliente</a>

        <table id="datatable" class="table table-striped">
            <thead>
                <tr>
                    <th>Ações</th>
                    <th>Nome</th>
                    <th>Documento</th>
                    <th>Email</th>
                    <th>Whatsapp</th>
                    <th>Cadastrado</th>
                    <th>Atualizado</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>
                            <a href="/clientes/{{ $cliente->id }}/edit" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Editar Item"><i class="fas fa-pen"></i></a>
                            <form action="/clientes/{{ $cliente->id }}" class="d-inline-block" method="POST" onSubmit="confirmarExclusao(event)">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Excluir Item"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                        <td>{{ $cliente->nome }}</td>
                        <td>{{ $cliente->documento }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td class="isFone">{{ $cliente->whatsapp }}</td>
                        <td>{{ $cliente->created_at->format('d/m/Y H:i') }}</td>
                        <td>{{ $cliente->updated_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination"> {{$clientes->links() }} </div>

    </div>
</div>

@stop
