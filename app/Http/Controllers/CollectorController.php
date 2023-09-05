<?php

namespace App\Http\Controllers;

use App\Models\Collector;
use Illuminate\Http\Request;

class CollectorController extends Controller
{
    public function index() {
        $collectors = Collector::with('clients')->get();
        return view('collectors.index', ['collectors'=>$collectors]);
    }
}
