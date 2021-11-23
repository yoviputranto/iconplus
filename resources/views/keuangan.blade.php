@extends('layouts.master')

@section('title')
    Keuangan
@endsection

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 heading-1 px-3">Keuangan</h1>
        <!-- DataTales Example -->
        <div class="card border-0 mb-4">
            <div class="card-header border-0 py-3">
                <span class="heading-2">Data Keuangan</span>
                <a href="{{ route('keuangan.create') }}"><button type="button"
                        class="btn btn-blue text-white float-right">Tambah
                        Laporan</button></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-5" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Proyek</th>
                                <th>Judul Laporan</th>
                                <th>Tanggal</th>
                                <th>Periode Keuangan (Bulan)</th>
                                <th>Dokumen</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">1</td>
                                <td class="align-middle">Penginstlan Aplikasi</td>
                                <td class="align-middle">Laporan Keuangan Penginstalan</td>
                                <td class="align-middle">2021-11-17</td>
                                <td class="align-middle">September - November</td>
                                <td><button type="button" class="btn btn-success text-white">Unduh</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
