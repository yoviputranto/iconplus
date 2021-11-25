<?php

namespace App\Http\Controllers;

use App\Models\Monitoring;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $monitorings = Monitoring::orderByDesc('created_at')->take(5)->get();
        return view('index',compact('monitorings'));
    }
}
