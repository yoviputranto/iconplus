@extends('layouts.master')

@section('title')
    Proyek
@endsection

@push('css')
    <link href="{{ asset('frontend') }}/css/table.css" rel="stylesheet">
@endpush

@section('review')
    <nav style="z-index: 10;" class="navbar-review d-flex flex-column align-item-start bg-white" id="sidebar">
        <div class="comment-heading container d-flex justify-content-between mt-3">
            <span style="color: #5A5C69;">Review</span>
            <button type="button" class="btn text-white" id="menu-btn-close">
                <img class="p-0" src="{{ asset('frontend') }}/img/cancel.png" alt="cancel">
            </button>
        </div>
        <div class="comment-section container d-block mt-2">
            <h6 class="d-inline font-weight-bold text-primary">Laporan Keuangan Tahunan</h6>
            <span class="d-inline">|</span>
            <h6 class="comment-info d-inline text-gray-800">Row 1</h6>
            <div class="form-floating my-3">
                <textarea class="form-control" placeholder="Add a comment" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Add a comment</label>
            </div>
            <div class="submit-button d-flex justify-content-end">
                <a href="#" type="submit" class="btn btn-primary mb-3 py-0 px-3">Add</a>
            </div>
            <div class="comment-display d-block mt-2">
                <div class="display-heading">
                    <h6 class="d-inline">All comments</h6>
                    <span class="d-inline">|</span>
                    <h6 class="comment-info d-inline">2 comments</h6>
                </div>
                <div class="comment-list my-3">
                    <div class="comment-item">
                        <div class="d-flex justify-content-between">
                            <div class="comment-user">
                                <img class="img-fluid mr-2 mb-0" src="{{ asset('frontend') }}/img/profile-1.jpeg"
                                    alt="profile" width="24px">
                                <div class="comment-user">
                                    <h6>
                                        Aldo Bramantio
                                    </h6>
                                    <span>15:30 | June 30</span>
                                </div>
                            </div>
                            <span class="d-inline-block">
                                <div class="dropdown">
                                    <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <!-- <i class="fas fa-ellipsis-v"></i> -->
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item disabled" href="#">Delete</a></li>
                                        <!-- <li><a class="dropdown-item" href="#">Report</a></li> -->
                                    </ul>
                                </div>
                            </span>
                        </div>
                        <p>Mohon laporan progress segera diperbaharui</p>
                        <div class="action-button d-flex">
                            <a class="ml-auto" id="reply-btn" href="#">reply</a>
                        </div>
                    </div>
                    <div class="comment-item pl-3 mt-3">
                        <div class="d-flex justify-content-between">
                            <div class="comment-user">
                                <img class="img-fluid mr-2 mb-0" src="{{ asset('frontend') }}/img/profile-user.png"
                                    alt="profile" width="24px">
                                <div class="comment-user">
                                    <h6>
                                        Irfan Zafar
                                    </h6>
                                    <span>15:35 | June 30</span>
                                </div>
                            </div>
                            <span class="d-inline-block">
                                <div class="dropdown">
                                    <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <!-- <i class="fas fa-ellipsis-v"></i> -->
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                href="#">Delete</a></li>
                                        <!-- <li><a class="dropdown-item" href="#">Report</a></li> -->
                                    </ul>
                                </div>
                            </span>
                        </div>
                        <p>Baik pak, dimengerti.</p>
                        <div class="action-button d-flex">
                            <a class="ml-auto" id="reply-btn-2" href="#">reply</a>
                        </div>
                    </div>
                    <!-- <div class="comment-item">
                          <img class="img-fluid mr-2 mb-2" src="{{ asset('frontend') }}/img/profile-1.jpeg" alt="profile" width="24px">
                          <div class="comment-user">
                            <h6>Aldo Bramantio
                              <span class="d-inline-block" style="margin-left: 55px;">
                                <div class="dropdown">
                                  <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item disabled" href="#">Delete</a></li>
                                    <li><a class="dropdown-item" href="#">Report</a></li>
                                  </ul>
                                </div>
                              </span>
                            </h6>
                            <span>15:30 | June 30</span>
                          </div>
                          <p>Dek, abang pulang</p>
                          <div class="action-button d-flex">
                            <a class="ml-auto" id="reply-btn" href="#">reply</a>
                          </div>
                        </div>
                        <div class="comment-item">
                          <img class="img-fluid mr-2 mb-2" src="{{ asset('frontend') }}/img/profile-1.jpeg" alt="profile" width="24px">
                          <div class="comment-user">
                            <h6>Aldo Bramantio
                              <span class="d-inline-block" style="margin-left: 55px;">
                                <div class="dropdown">
                                  <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item disabled" href="#">Delete</a></li>
                                    <li><a class="dropdown-item" href="#">Report</a></li>
                                  </ul>
                                </div>
                              </span>
                            </h6>
                            <span>15:30 | June 30</span>
                          </div>
                          <p>Dek, abang pulang</p>
                          <div class="action-button d-flex">
                            <a class="ml-auto" id="reply-btn" href="#">reply</a>
                          </div>
                        </div>
                        <div class="comment-item">
                          <img class="img-fluid mr-2 mb-2" src="{{ asset('frontend') }}/img/profile-1.jpeg" alt="profile" width="24px">
                          <div class="comment-user">
                            <h6>Aldo Bramantio
                              <span class="d-inline-block" style="margin-left: 55px;">
                                <div class="dropdown">
                                  <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item disabled" href="#">Delete</a></li>
                                    <li><a class="dropdown-item" href="#">Report</a></li>
                                  </ul>
                                </div>
                              </span>
                            </h6>
                            <span>15:30 | June 30</span>
                          </div>
                          <p>Dek, abang pulang</p>
                          <div class="action-button d-flex">
                            <a class="ml-auto" id="reply-btn" href="#">reply</a>
                          </div>
                        </div> -->
                </div>
                <div class="form-floating reply-form-section d-none d-lg-block m-0 ml-0 mr-2" id="reply-form">
                    <textarea class="form-control reply" placeholder="Add a reply" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Add a reply</label>
                    <div class="submit-reply-button d-flex justify-content-end mt-3">
                        <a href="#" type="submit" class="btn btn-primary mb-3 py-0">Reply</a>
                    </div>
                </div>
            </div>
    </nav>
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 heading-1 px-3">Proyek</h1>
        <div class="px-4">
            <div class="card border-0 mb-4">
                <div class="card-header border-0 py-3">
                    <h6 class="m-0 heading-2">Data Proyek</h6>
                </div>
                <div class="table-responsive p-3">
                    <table class="table fold-table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Web Code</th>
                                <th>PIC</th>
                                <th>Tanggal Awal</th>
                                <th>Tanggal Akhir</th>
                                <th>Durasi</th>
                                <th>Nama Pekerjaan</th>
                                <th>Uraian Kegiatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="view">
                                <td class="align-middle">1</td>
                                <td class="align-middle">33220</td>
                                <td class="align-middle">PM</td>
                                <td class="align-middle">2021-11-17</td>
                                <td class="align-middle">2021-11-18</td>
                                <td class="align-middle">12</td>
                                <td class="align-middle">Penginstalan Aplikasi</td>
                                <td class="align-middle">Melakukan Penginstalan Jaringan</td>
                                <td><button type="button" class="btn btn-blue text-white" id="menu-btn">Review</button>
                                </td>
                                <!-- <td><button type="button" class="btn btn-primary" id="menu-btn">Review</button></td> -->
                            </tr>
                            <tr class="fold">
                                <td colspan="7">
                                    <div class="fold-content">
                                        <div class="card-header border-0 py-3">
                                            <h6 class="m-0 heading-2">Weekly Report</h6>
                                        </div>
                                        <table class="fold-table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal</th>
                                                    <th>Laporan</th>
                                                    <th>Catatan</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2021-11-17</td>
                                                    <td>-</td>
                                                    <td>Jaringan sudah dibuat</td>
                                                    <td>Selesai</td>
                                                </tr>

                                                <tr>
                                                    <td>2</td>
                                                    <td>2021-11-18</td>
                                                    <td>-</td>
                                                    <td>Jaringan dalam penginstallan</td>
                                                    <td>Dalam Pekerjaan</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- DataTales Example -->

    </div>
    <!-- /.container-fluid -->
@endsection

@push('js')
    <script>
        $(function() {
            $(".fold-table tr.view").on("click", function() {
                $(this).toggleClass("open").next(".fold").toggleClass("open");
            });
        });
    </script>

    <script>
        var menu_btn = document.querySelector("#menu-btn")
        var menu_btn_close = document.querySelector("#menu-btn-close")
        var sidebar = document.querySelector("#sidebar")
        var container = document.querySelector(".my-container")
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav")
        })
        // var menu_btn_2 = document.querySelector("#menu-btn-2")
        // menu_btn_2.addEventListener("click", () => {
        //     sidebar.classList.toggle("active-nav")
        //     container.classList.toggle("active-cont")
        // })
        menu_btn_close.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav")
            container.classList.toggle("active-cont")
        })

        var reply_btn = document.querySelector("#reply-btn")
        var reply_btn_2 = document.querySelector("#reply-btn-2")
        var reply_form = document.querySelector("#reply-form")
        reply_btn.addEventListener("click", () => {
            reply_form.classList.toggle("active-form")
        })
        reply_btn_2.addEventListener("click", () => {
            reply_form.classList.toggle("active-form")
        })

        const progress = document.querySelector('.progress-done');
        // progress.style.width = progress.getAttribute('data-done') + '%';
        // progress.style.opacity = 1;

        setTimeout(() => {
            progress.style.opacity = 1;
            progress.style.width = progress.getAttribute('data-done') + '%';
        }, 10)
    </script>
@endpush
