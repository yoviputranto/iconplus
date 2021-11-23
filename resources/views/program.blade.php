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
                                <th>No Surat</th>
                                <th>Perihal</th>
                                <th>Tgl Surat</th>
                                <th>Nama Pekerjaan</th>
                                <th>Pemberi Kerja</th>
                                <th>Kategori</th>
                                <th>PIC</th>
                                <th>Target Selesai</th>
                                <th>Dokumen</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">1</td>
                                <td class="align-middle">P001</td>
                                <td class="align-middle">SA2134</td>
                                <td class="align-middle">-</td>
                                <td class="align-middle">2021/10/20</td>
                                <td class="align-middle">Instalasi Jaringan</td>
                                <td class="align-middle">PIN</td>
                                <td class="align-middle">PS</td>
                                <td class="align-middle">VP Backbone</td>
                                <td class="align-middle">2021/10/20</td>
                                <td class="align-middle">-</td>
                                <!-- <td class="align-middle">
                              <div class="progress">
                                <div class="progress-done" data-done="34" time-left="10">
                                  34%
                                </div>
                              </div>
                            </td> -->
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
