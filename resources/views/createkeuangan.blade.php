@extends('layouts.master')

@section('title')
    Tambah Keuangan
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 heading-1 px-3">Keuangan</h1>
        <!-- DataTales Example -->
        <div class="keuangan-input card border-0 mb-4">
            <div class="card-header border-0 py-3">
                <span class="heading-2">Tambah Data Keuangan</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <form action="">
                            <div class="mb-3">
                                <div class="project-file">
                                    <h6 class="form-heading m-0">Template Laporan</h6>
                                    <div class="input-group mb-3">
                                        <a href="./assets/template-keuangan.pdf" download="Template Laporan Keuangan"
                                            target="_blank">
                                            <button type="button" class="btn btn-success text-white">Unduh Template
                                                Laporan</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="project-name">
                                    <h6 class="form-heading m-0">Nama Proyek</h6>
                                    <div class="input-group mb-3">
                                        <select class="btn-dropdown custom-select">
                                            <option value="1">Project A</option>
                                            <option value="2">Project B</option>
                                            <option value="3">Project C</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="report-title">
                                    <h6 class="form-heading m-0">Judul Laporan</h6>
                                    <input type="text" placeholder="Type here..."
                                        class="form-control casual-input form-input-box" id="input">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="project-date">
                                    <h6 class="form-heading m-0">Tanggal</h6>
                                    <div class="form-date d-flex">
                                        <input type="date" id=""
                                            class="form-control casual-input form-input-box date-picker">
                                        <!-- <span class="align-content-center mx-3 py-1">-</span> -->
                                        <!-- <input type="time" id="" class="form-control form-input-box date-picker"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="finance-period">
                                    <h6 class="form-heading m-0">Periode (Bulan)</h6>
                                    <div class="form-date d-flex">
                                        <input type="text" placeholder="Bulan awal"
                                            class="form-control casual-input form-input-box">
                                        <span class="align-content-center mx-3 py-1">-</span>
                                        <input type="text" placeholder="Bulan akhir"
                                            class="form-control casual-input form-input-box">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="project-file">
                                    <h6 class="form-heading m-0">Dokumen Laporan</h6>
                                    <div class="input-group mb-3">
                                        <input class="form-control file-input P-0" id="formFileSm" type="file">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button type="submit" class="btn btn-primary ms-auto">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- End of Main Content -->
@endsection
