<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Charge;
use App\Models\Client;

class ChargeController extends Controller
{
    public function index() {
        $clients = Client::orderBy('created_at', 'desc')->paginate(12);
        return view('charges.index', ['clients'=>$clients]);
    }
}
