@extends('layouts.app')

@section('title','Painel Inicial')

@section('content')


                    <div class="container-fluid">
                        <h3 class="">Painel Inicial</h3>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Clientes</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="d-flex align-items-center text-white text-decoration-none" href="{{ route('clients-index') }}">
                                            <h6>0{{ $totalClients }} Cadastrados</h6>
                                            <div class="small text-white ms-4"><i class="fas fa-angle-right"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Cobradores</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="d-flex align-items-center text-white text-decoration-none" href="{{ route('collectors-index') }}">
                                            <h6>0{{ $totalCollectors }} Cadastrados</h6>
                                            <div class="small text-white ms-4"><i class="fas fa-angle-right"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Cobranças</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="d-flex align-items-center text-white text-decoration-none" href="{{ route('clients-index') }}">
                                            <h6> Cadastrados</h6>
                                            <div class="small text-white ms-4"><i class="fas fa-angle-right"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Relatórios</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h6 class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Exibir
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('clients-index') }}">Clientes</a></li>
                                                <li><a class="dropdown-item" href="{{ route('collectors-index') }}"> Cobradores</a></li>
                                                <li><a class="dropdown-item" href="#"> Cobranças </a></li>
                                            </ul>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Clientes Cadastrado
                            </div>
                            @if(count($clients) > 0)
                            <div class="card-body">
                                
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
                                        <td>{{ $client->valor_emprestado }}</td>
                                        <td>{{ $client->valor_emprestado * 1.2 }}</td>
                                        <td>{{ $client->valor_dividido }}</td>
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