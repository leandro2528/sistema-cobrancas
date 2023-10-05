@extends('layouts.app')

@section('title', '- Cadastro de Novos Cobradores') 

@section('content')


<div class="container-fluid px-4">
    <div class="row">
        <div class="col-10">
            <h4>Cadastro de novo Cobradores</h4>
        </div>
        <div class="col-2">
            <a class="btn btn-secondary btn-sm" href="{{ route('collectors-index') }}">Voltar</a>
        </div>
    </div> 
    
    <div class="row">
        <div class="col-12">
            
        <form action="{{ route('collectors-store') }}" method="POST">
            @csrf
            <div class="form-group my-2">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
               
            </div>

            <div class="form-group my-2">
                <label for="id_collector">Cliente</label>
                <select name="id_collector" id="id_collector" class="form-control">
                        <option value="">-- Selecione um cliente --</option>
                    @foreach( $clients as $client )
                        <option value="{{ $client->id }}">{{ $client->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group my-2">
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" class="form-control" required>
               
            </div>

            <div class="form-group my-2">
                <label for="idade">Idade</label>
                <input type="number" name="idade" id="idade" class="form-control" required>
               
            </div>

            <div class="form-group my-2">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf" class="form-control" required>
               
            </div>

            <div class="form-group my-2">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="telefone" maxlength="16" class="form-control" required>
            </div>

            <div class="form-group my-2">
                <label for="rg">RG</label>
                <input type="text" name="rg" id="rg" class="form-control" required>
              
            </div>

            <div class="form-group my-2">
                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Cadastrar">
            </div>

        </form>

        </div>
    </div>
</div>

@endsection




