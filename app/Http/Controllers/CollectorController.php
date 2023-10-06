<?php

namespace App\Http\Controllers;

use App\Models\Collector;
use App\Models\Client;
use Illuminate\Http\Request;

class CollectorController extends Controller
{
    public function index() {
        $collectors = Collector::with('clients')->get();
        return view('collectors.index', ['collectors'=>$collectors]);
    }

    public function create() {
        $collectors = Collector::all();
        $clients = Client::all();
        return view('collectors.create', ['collectors'=>$collectors, 'clients'=>$clients]);
    }

    public function store(Request $request) {

        $request->validate([
            'nome' => 'required',
            'endereco' => 'required',
            'idade' => 'required',
            'cpf' => 'required',
            'telefone' => 'required',
            'rg' => 'required',
            'id_collector' => 'required'
        ]);
    
        $collector = new Collector($request->only('nome','endereco','idade','cpf','telefone','rg','id_clients'));
        $collector->id_collector = $request->input('id_collector');
        $collector->save();

        return redirect()->route('collectors-index');
    }

    public function edit($id) {
        $collector = Collector::findOrFail($id); 
        $clients = Client::all();
        return view('collectors.edit', compact('collector', 'clients'));
    }

    public function update(Request $request, $id) {
        $collector = Collector::findOrFail($id);
        $collector->update($request->only('nome','endereco','idade','cpf','telefone','rg','id_collector',));
        $collector->save();

        return redirect()->route('collectors-index');
    }

    public function delete($id) {
        $collector = Collector::findOrFail($id);
        $collector->delete();
        return redirect()->route('collectors-index');
    }

    
}
