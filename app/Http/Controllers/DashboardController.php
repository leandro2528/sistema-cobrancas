<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $clients = Client::paginate(4);
        return view('dashboards.index', ['clients'=>$clients]);
    }
}
