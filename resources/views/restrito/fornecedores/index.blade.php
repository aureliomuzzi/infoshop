@extends('adminlte::page')

@section('title', 'Fornecedores')

@section('content_header')
<h1 class="m-0 text-dark"><i class="fas fa-home"></i> Fornecedores
    <small class="text-muted">- Index</small>
</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Tabela de Fornecedores
        </h3>
    </div>

    <div class="card-body">
        @if(session()->has('mensagem'))
            <div class="alert alert-success">
                {{ session()->get('mensagem') }}
            </div>
        @endif

        <a href="/fornecedor/create" class="btn btn-primary mb-5">Novo Fornecedor</a>

        <table id="datatable" class="table table-striped">
            <thead>
                <tr>
                    <th>Ações</th>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Documento</th>
                    <th>UF</th>
                    <th>Cadastrado</th>
                    <th>Atualizado</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($fornecedores as $fornecedor)
                    <tr>
                        <td>
                            <a href="/fornecedor/{{ $fornecedor->id }}/edit" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Editar Item"><i class="fas fa-pen"></i></a>
                            <form action="/fornecedor/{{ $fornecedor->id }}" class="d-inline-block" method="POST" onSubmit="confirmarExclusao(event)">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Excluir Item"><i class="fas fa-trash"></i></button>
                            </form>
                            <a href="/fornecedor/{{ $fornecedor->id }}" class="btn btn-outline-info btn-sm" data-toggle="tooltip" data-placement="top" title="Exibir Informações Completas"><i class="fas fa-eye"></i></a>
                        </td>
                        <td>{{ $fornecedor->nome }}</td>
                        <td>{{ $fornecedor->tipo_formatado }}</td>

                        @if ($fornecedor->tipo == "PF")
                            <td class="isCPF">{{ $fornecedor->documento }}</td>
                        @else
                            <td class="isCNPJ">{{ $fornecedor->documento }}</td>
                        @endif

                        <td>{{ $fornecedor->uf }}</td>
                        <td>{{ $fornecedor->created_at->format('d/m/Y H:i') }}</td>
                        <td>{{ $fornecedor->updated_at->format('d/m/Y H:i') }}</td>

                        @switch($fornecedor->status)
                            @case(1)
                                <td><span class="badge badge-primary">{{ $fornecedor->status_formatado }}</span></td>
                                @break
                            @case(0)
                                <td><span class="badge badge-danger">{{ $fornecedor->status_formatado }}</span></td>
                                @break
                        @endswitch

                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination"> {{$fornecedores->links() }} </div>

    </div>
</div>

@stop
