<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use App\Models\WeeklyReport;
use Illuminate\Http\Request;

class ProyekController extends Controller
{
    public function index()
    {
        $proyeks = Proyek::with('program')->get();
        $weeks  = WeeklyReport::all();
        // dd($proyeks);
        return view('proyek',compact(['proyeks','weeks']));
    }
}

