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
                    <tr style="font-size: 10px;">
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Empresa</th>
                        <th>Idade</th>
                        <th>CPF</th>
                        <th>Telefone</th>
                        <th>Valor do Emprestimo</th>
                        <th>Valor a pagar</th>
                        <th>Valor por dia</th>
                        <th>Total Parcelas</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                <tr style="font-size: 10px;">
                    <td>{{ $client->nome }}</td>
                    <td>{{ $client->endereco }}</td>
                    <td>{{ $client->empresa }}</td>
                    <td>{{ $client->idade }}</td>
                    <td>{{ $client->cpf }}</td>
                    <td>{{ $client->telefone }}</td>
                    <td>{{ $client->valor_emprestado }},00 R$</td>
                    <td>{{ $client->valor_emprestado * 1.2 }},00 R$</td>
                    <td>{{ $client->valor_dividido }} R$</td>
                    <td>{{ $client->dias_pagamento }}</td> 
                    <td class="d-flex">  
                        <div class="">
                            <a href="{{ route('clients-edit', ['id' => $client->id ]) }}" class="btn btn-warning btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
                            </a>
                        </div>
                        <div class="">
                            <form action="{{ route('clients-delete', ['id' => $client->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm ms-3" onclick="return confirm('Tem certeza que deseja excluir este cliente?')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                </svg>
                            </button>
                            </form>
                        </div>
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