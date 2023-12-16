<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Charge;
use App\Models\Client;
use App\Models\Collector;

class ChargeController extends Controller
{
    public function index() {
        $clients = Client::orderBy('created_at', 'desc')->paginate(12);
        $collectors = Collector::all();
        return view('charges.index', ['clients'=>$clients, 'collectors'=>$collectors]);
    }


    public function searchClients(Request $request)
    {
        $search = $request->input('search');

        $clients = Client::where('nome', 'like', '%' . $search . '%')
            ->orWhere('cpf', 'like', '%' . $search . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        $collectors = Collector::all();

        return view('charges.index', ['clients' => $clients, 'collectors' => $collectors]);
    }

    public function edit($id) {
        $client = Client::findOrFail($id);

        return view('charges.edit', ['client'=>$client]);
    }

    public function update(Request $request, $id) {
        $clients = Client::findOrFail($id);
        $clients->update($request->only('nome', 'valor_emprestado','dias_pagamento'
        ));
    
        return redirect()->route('charges-index');
   }
   
    public function delete($id) {
        $client = Client::findOrFail($id);
        $client->delete();
        return redirect()->route('charges-index');
    }



}
