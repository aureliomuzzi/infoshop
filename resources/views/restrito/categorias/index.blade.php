@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
<h1 class="m-0 text-dark"><i class="fas fa-home"></i> Categorias
    <small class="text-muted">- Index</small>
</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Tabela de Categorias
        </h3>
    </div>

    <div class="card-body">
        @if(session()->has('mensagem'))
            <div class="alert alert-success">
                {{ session()->get('mensagem') }}
            </div>
        @endif

        <a href="/categorias/create" class="btn btn-primary mb-5">Nova Categoria</a>
    
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Ações</th>
                    <th>Descrição</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td>
                            <a href="/categorias/{{ $categoria->id }}/edit" class="btn btn-primary btn-sm">Editar</a>
                            <form action="/categorias/{{ $categoria->id }}" class="d-inline-block" method="POST" onSubmit="confirmarExclusao(event)">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Excluir</button>
                            </form>
                        </td>
                        <td>{{ $categoria->descricao }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        {{ $categorias->links() }}
    </div>
</div>
{{-- <script>
    function confirmarExclusao(event) {
    event.preventDefault();
    swal({
        title: "Voce tem certeza que deseja excluir esse registro?",
        icon: "warning",
        dangerMode: true,
        buttons: {
        cancel: "Cancelar",
        catch: {
            text: "Excluir",
            value: true,
        },
        }
    })
    .then((willDelete) => {
        if (willDelete) {
        event.target.submit();
        } else {
        return false;
        }
    });
    }
</script> --}}
@stop