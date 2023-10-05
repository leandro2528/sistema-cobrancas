@extends('layouts.app')

@section('title', ' Editar de Clientes')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h4>Editar Cliente</h4>
        </div>
        <div class="col-2">
            <a class="btn btn-secondary" href="{{ route('clients-index') }}">Voltar</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('clients-update', $client->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3 mt-3">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control" value="{{ $client->nome }}">
                </div>
                <div class="form-group mb-3 mt-3">
                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" class="form-control" value="{{ $client->endereco }}">
                </div>
                <div class="form-group mb-3 mt-3">
                    <label for="empresa">Empresa</label>
                    <input type="text" name="empresa" class="form-control" value="{{ $client->empresa }}">
                </div>
                <div class="form-group mb-3 mt-3">
                    <label for="idade">Idade</label>
                    <input type="text" name="idade" class="form-control" value="{{ $client->idade }}">
                </div>
                <div class="form-group mb-3 mt-3">
                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf" class="form-control" value="{{ $client->cpf }}">
                </div>
                <div class="form-group mb-3 mt-3">
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" class="form-control" value="{{ $client->telefone }}">
                </div>
                <div class="form-group mb-3 mt-3">
                    <label for="valor_emprestado">Valor Emprestado</label>
                    <input type="text" name="valor_emprestado" class="form-control" value="{{ $client->valor_emprestado }}">
                </div>
                <div class="form-group mb-3 mt-3">
                    <label for="dias_pagamento">Dias Pagamento</label>
                    <input type="text" name="dias_pagamento" class="form-control" value="{{ $client->dias_pagamento }}">
                </div>
                <div class="form-group mb-3 mt-3">
                    <input type="submit" name="submit" value="Editar" class="btn btn-success btn-sm">
                </div>
            </form>
        </div>
    </div>
</div>


@endsection















