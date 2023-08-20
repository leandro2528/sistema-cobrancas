@extends('layouts.app')

@section('title') - Painel Inicial

@section('content')


                    <div class="container-fluid">
                        <h3 class="">Painel Inicial</h3>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Clientes</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Cobradores</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Cobranças</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Relatórios</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Clientes Cadastrado
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple "style="font-size: 12px;" class="table table-hover table-striped table-bordered" >
                                <table class="table table-hover table-striped table-bordered">
                                    <thead">
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
                        </div>
                    </div>
                

@endsection