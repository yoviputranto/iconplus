<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use App\Models\Proyek;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    public function index()
    {
        $keuangans = Keuangan::with(['proyek','proyek.program'])->get();
        return view('keuangan',compact('keuangans'));
    }

    public function create()
    {
        $proyeks = Proyek::all();
        return view('createkeuangan',compact('proyeks'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'dokumen' => 'required|file|mimes:csv,txt,xlx,xlsx,xls,pdf|max:2048',
            'judul' => 'required|string',
            'periode_awal' => 'required',
            'periode_akhir' => 'required',
            'id_proyek' => 'required'

           ]);
           $data = $request->all();
           $filenameWithExt = $request->file('dokumen')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('dokumen')->getClientOriginalExtension();
            $filenameSimpan = $filename.'.'.$extension;

           $data['dokumen']= $request->file('dokumen')->storeAs('assets/laporan',$filenameSimpan,'public');

           Keuangan::create($data);
        return redirect()->route('keuangan');

    }
}
