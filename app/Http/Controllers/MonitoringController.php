<?php

namespace App\Http\Controllers;

use App\Models\Monitoring;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function index()
    {
        $monitorings = Monitoring::with(['proyek','proyek.program'])->get();

        return view('monitoring',compact('monitorings'));
    }
}
