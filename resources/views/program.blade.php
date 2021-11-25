@extends('layouts.master')
@section('title')
    Program
@endsection
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 heading-1 px-3">Program</h1>
        <!-- DataTales Example -->
        <div class="card border-0 mb-4">
            <div class="card-header border-0 py-3">
                <span class="heading-2">Data Program</span>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-5" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Tugas</th>
                                <th>Divisi</th>
                                <th>Nama Program</th>
                                <th>No Surat</th>
                                <th>Perihal</th>
                                <th>Tgl Surat</th>

                                <th>Pemberi Kerja</th>
                                <th>Kategori</th>

                                <th>Target Selesai</th>
                                <th>Dokumen</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($programs as $program)
                                <tr>
                                    <td class="align-middle">{{ $no++ }}</td>
                                    <td class="align-middle">{{ $program->id }}</td>
                                    <td class="align-middle">{{ $program->divisi }}</td>
                                    <td class="align-middle">{{ $program->nama_program }}</td>
                                    <td class="align-middle">{{ $program->no_surat }}</td>
                                    <td class="align-middle">{{ $program->perihal }}</td>
                                    <td class="align-middle">{{ $program->tgl_surat }}</td>
                                    <td class="align-middle">{{ $program->pemberi_kerja }}</td>
                                    <td class="align-middle">{{ $program->kategori }}</td>
                                    <td class="align-middle">{{ $program->target_selesai }}</td>
                                    <td class="align-middle">{{ $program->dokumen }}</td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
