@extends('layouts.app')

@section('title') - Cadastro de novo Cliente

@section('content')


<div class="container-fluid px-4">
    <div class="row">
        <div class="col-10">
            <h4>Cadastro de novo Cliente</h4>
        </div>
        <div class="col-2">
            <a class="btn btn-secondary btn-sm" href="{{ route('clients-index') }}">Voltar</a>
        </div>
    </div> 
    
    <div class="row">
        <div class="col-12">
            
        <form action="{{ route('clients-store') }}" method="POST">
            @csrf
            <div class="form-group my-2">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control">
                @error('nome')
                <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group my-2">
                <label for="endereco">Endereco</label>
                <input type="text" name="endereco" class="form-control">
                @error('endereco')
                <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group my-2">
                <label for="empresa">Empresa</label>
                <input type="text" name="empresa" class="form-control">
                @error('empresa')
                <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group my-2">
                <label for="idade">Idade</label>
                <input type="text" name="idade" class="form-control">
                @error('idade')
                <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group my-2">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" class="form-control">
                @error('cpf')
                <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group my-2">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" class="form-control">
                @error('telefone')
                <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group my-2">
                <label for="dias_pagamento">Escolha a quantidade de parcelas por dias:</label>
                <select name="dias_pagamento" id="dias_pagamento" class="form-control">
                    <option value="">Selecione os dias</option>
                    <option value="20">20 dias</option>
                    <option value="21">21 dias</option>
                    <option value="22">22 dias</option>
                    <option value="23">23 dias</option>
                    <option value="24">24 dias</option>
                    <option value="25">25 dias</option>
                    <option value="26">26 dias</option>
                    <option value="27">27 dias</option>
                    <option value="28">28 dias</option>
                    <option value="29">29 dias</option>
                    <option value="30">30 dias</option>
                </select>
            </div>

            <div class="form-group my-2">
                <label for="valor_emprestado">Valor Emprestado</label>
                <input type="text" name="valor_emprestado" class="form-control">
                @error('valor_emprestado')
                <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group my-2">
                <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Cadastrar">
            </div>

        </form>

        </div>
    </div>
</div>
@endsection




