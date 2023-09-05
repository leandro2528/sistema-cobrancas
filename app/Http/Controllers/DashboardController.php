<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Collector;
use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $clients = Client::paginate(4);
        $totalClients = Client::count();
        $totalCollectors = Collector::count();
        return view('dashboards.index', ['clients'=>$clients, 'totalClients'=>$totalClients, 'totalCollectors'=>$totalCollectors]);
    }
}
