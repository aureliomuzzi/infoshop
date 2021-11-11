@extends('adminlte::page')

@section('title', 'Fornecedores')

@section('content_header')
<h1 class="m-0 text-dark"><i class="fas fa-home"></i> Fornecedores
    <small class="text-muted">- Informações Completas</small>
</h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-6 col-md-12">
        <div class="card card-secondary">
            <div class="card-header">
              @if ( $fornecedor->fantasia == null )
                <h2 class="card-title">Razão Social: <b>{{ $fornecedor->nome }}</b></h2>
              @else
                <h2 class="card-title">Nome Fantasia: <b>{{ $fornecedor->fantasia }}</b></h2>
              @endif
              <div class="card-tools">
                @switch($fornecedor->status)
                    @case(1)
                        <span class="badge badge-primary">{{ $fornecedor->status_formatado }}</span>
                        @break
                    @case(0)
                        <span class="badge badge-danger">{{ $fornecedor->status_formatado }}</span>
                        @break
                @endswitch
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <p class="h4">Tipo de Fornecedor: <b>{{$fornecedor->tipo_formatado}}</b></p>
                <p class="h4">Razão Social: <b>{{$fornecedor->nome}}</b></p>
                <p class="h4">Nome Fantasia: <b>{{$fornecedor->fantasia}}</b></p>
                @if ($fornecedor->tipo == "PF")
                    <p class="h4">Numero do Documento: <b class="isCPF">{{$fornecedor->documento}}</b></p>
                @else
                    <p class="h4">Numero do Documento: <b class="isCNPJ">{{$fornecedor->documento}}</b></p>
                @endif
                <p class="h4">CEP: <b>{{$fornecedor->cep}}</b></p>
                <p class="h4">Logradouro: <b>{{ $fornecedor->logradouro }}</b></p>
                <p class="h4">Número: <b>{{ $fornecedor->numero }}</b></p>
                <p class="h4">Complemento: <b>{{ $fornecedor->complemento }}</b></p>
                <p class="h4">Bairro: <b>{{ $fornecedor->bairro }}</b></p>
                <p class="h4">Localidade: <b>{{ $fornecedor->localidade }}</b></p>
                <p class="h4">Estado: <b>{{ $fornecedor->uf }}</b></p>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <div class="row text-center">
                    <div class="col-6">
                        Criado em: <b>{{ $fornecedor->created_at->format('d/m/Y H:i') }}</b>
                    </div>
                    <div class="col-6">
                        Atualizado em: <b>{{ $fornecedor->updated_at->format('d/m/Y H:i') }}</b>
                    </div>
                </div>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
    </div>
</div>
@stop
