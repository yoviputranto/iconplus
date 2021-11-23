<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    public function index()
    {
        return view('keuangan');
    }

    public function create()
    {
        return view('createkeuangan');
    }
}
