@extends('layouts.app')

@section('title', 'Cobranças')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-10"><h4>Cobranças</h4></div>
        <div class="col-2">
            <a class="btn btn-success btn-sm" href="{{ route('dashboards-index') }}">Dashboard</a>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-12">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nome do cliente</th>
                        <th>Valor Emprestado</th>
                        <th>Total de Parcelas</th>
                        <th>Total a Pagar</th>
                        <th>Data / Hora</th>
                      
                    </tr>
                </thead>
                <tbody>
                    @foreach( $clients as $client )
                    <tr>
                        <td>{{ $client->nome }}</td>
                        <td>{{ $client->valor_emprestado }},00 R$</td>
                        <td>{{ $client->dias_pagamento }}</td> 
                        <td>{{ $client->valor_emprestado * 1.2 }},00 R$</td>
                        <td>{{ \Carbon\Carbon::parse($client->created_at)->timezone('America/Sao_Paulo')->format('d/m/Y H:i:s') }}</td>
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $clients->links('pagination::simple-bootstrap-4', ['whitoutTotalCount', 'true']) }}
        </div>
    </div>
</div>


@endsection