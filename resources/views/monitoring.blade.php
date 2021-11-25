@extends('layouts.master')

@section('title')
    Monitoring
@endsection

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
        <h1 class="h3 mb-2 heading-1 px-3">Monitoring</h1>
        <!-- DataTales Example -->
        <div class="card border-0 mb-4">
            <div class="card-header border-0 py-3">
                <span class="heading-2">Data Monitoring</span>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-5" id="myTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Program</th>
                                <th>Nama Proyek</th>
                                <th>Tanggal</th>
                                <th>Progress</th>
                                <th>Kendala</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($monitorings as $monitoring)
                                <tr>
                                    <td class="align-middle">{{ $no }}</td>
                                    <td class="align-middle">{{ $monitoring->proyek->program->nama_program }}</td>
                                    <td class="align-middle">{{ $monitoring->proyek->nama_proyek }}</td>
                                    <td class="align-middle">{{ $monitoring->tanggal }}</td>
                                    <td class="align-middle">
                                        <?php $durasi = $monitoring->proyek->durasi;
                                        $report = intval(ceil($durasi / 7));

                                        ?>
                                        @dd($report)

                                        <div class="progress">
                                            <div class="progress-done progress-done-{{ $no++ }}"
                                                data-done="{{ $monitoring->progres }}" time-left="10">
                                                {{ $monitoring->progres }}%
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">{{ $monitoring->kendala }}</td>
                                    <td><button type="button" class="btn btn-blue text-white" id="menu-btn">Review</button>
                                    </td>
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

@push('js')
    <?php $no = 1; ?>
    @foreach ($monitorings as $monitoring)
        <script>
            var progress_{{ $no }} = document.querySelector('.progress-done-{{ $no }}');
            // progress.style.width = progress.getAttribute('data-done') + '%';
            // progress.style.opacity = 1;

            setTimeout(() => {
                progress_{{ $no }}.style.opacity = 1;
                progress_{{ $no }}.style.width = progress_{{ $no }}.getAttribute('data-done') +
                    '%';
            }, 10)
        </script>
        <?php $no++; ?>
    @endforeach

@endpush
