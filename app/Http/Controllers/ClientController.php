<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() {
        $clients = Client::orderBy('created_at', 'desc')->paginate(10);
        return view('clients.index', ['clients'=>$clients]);
    }

    public function create() {
        $clients = Client::all();
        return view('clients.create', ['clients'=>$clients]);
    }

    public function store(Request $request) {
        $request->validate([
            'nome' => 'required',
            'endereco' => 'required',
            'empresa' => 'required',
            'idade' => 'required',
            'cpf' => 'required',
            'telefone' => 'required',
            'valor_emprestado' => 'required|numeric',
            'dias_pagamento' => 'required|numeric'
        ]);

    
        $valor_emprestado = $request->input('valor_emprestado');
        $dias_pagamento = $request->input('dias_pagamento');

        $valor_dividido = $valor_emprestado * 1.2 / $dias_pagamento;

        $client = new Client($request->only('nome', 'endereco', 'empresa', 'idade', 'cpf', 'telefone', 'dias_pagamento'));
        $client->valor_emprestado = $valor_emprestado;
        $client->valor_dividido = $valor_dividido; // Armazena o valor dividido no objeto

        $client->save();

    return redirect()->route('clients-index');
    }

    public function edit($id) {
        $client = Client::findOrFail($id);

        return view('clients.edit', ['client'=>$client]);
    }

    public function update(Request $request, $id) {
        $clients = Client::findOrFail($id);
        $clients->update($request->only('nome', 'endereco', 'empresa', 'idade', 'cpf', 'telefone', 'valor_emprestado','dias_pagamento'
        ));
    
        return redirect()->route('clients-index');
   }
    public function delete($id) {
        $client = Client::findOrFail($id);
        $client->delete();
        return redirect()->route('clients-index');
    }

}
