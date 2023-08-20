@extends('layouts.app')

@section('title') - Clientes Cadastrado

@section('content')


<div class="container-fluid px-4">
    <div class="row">
        <div class="col-10 my-2">
            <h4>Clientes Cadastrados</h4>
        </div>
        <div class="col-2">
            <a class="btn btn-primary btn-sm" href="{{ route('clients-create') }}">Novo</a>
        </div>
    </div> 
    
    <div class="row">
        @if(count($clients) > 0)
        <div class="col-12">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr style="font-size: 12px;">
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Empresa</th>
                        <th>Idade</th>
                        <th>CPF</th>
                        <th>Telefone</th>
                        <th>Valor do Emprestimo</th>
                        <th>Valor a pagar</th>
                        <th>Valor por dia</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                <tr style="font-size: 12px;">
                    <td>{{ $client->nome }}</td>
                    <td>{{ $client->endereco }}</td>
                    <td>{{ $client->empresa }}</td>
                    <td>{{ $client->idade }}</td>
                    <td>{{ $client->cpf }}</td>
                    <td>{{ $client->telefone }}</td>
                    <td>{{ $client->valor_emprestado }}</td>
                    <td>{{ $client->valor_emprestado * 1.2 }}</td>
                    <td>{{ $client->valor_dividido }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="">Editar</a>
                        <a class="btn btn-danger btn-sm" href="">Excluir</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
                {{ $clients->links('pagination::simple-bootstrap-4', ['whitoutTotalCount', 'true']) }}
        </div>
        @else 
        <p class="my-3 alert alert-danger">Não possui dados nessa tabela</p>
        @endif
    </div>
</div>

@endsection