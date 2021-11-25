<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ICON+ | Proyek</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('frontend') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="{{ asset('frontend') }}/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/extended-style.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/sidebar-style.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/table.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/progress.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/notification.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('frontend') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Review sidebar -->

        <nav style="z-index: 10;" class="navbar-review d-flex flex-column align-item-start bg-white" id="sidebar">
            <div class="comment-heading container d-flex justify-content-between mt-3">
                <span style="color: #5A5C69;">Review</span>
                <button type="button" class="btn text-white" id="menu-btn-close">
                    <img class="p-0" src="{{ asset('frontend') }}/img/cancel.png" alt="cancel">
                </button>
            </div>
            <div class="comment-section container d-block mt-2">
                <h6 class="d-inline font-weight-bold text-primary">Laporan Proyek</h6>
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
                                    <img class="img-fluid mr-2 mb-0"
                                        src="{{ asset('frontend') }}/img/profile-user.png" alt="profile"
                                        width="24px">
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
                                            <li><a class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal" href="#">Delete</a></li>
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
        <!-- Review sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" class="bg-aliceblue">

                <!-- Topbar -->
                @include('layouts.topbar')
                <!-- End of Topbar -->


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
                                            <th></th>
                                            <th>No</th>
                                            <th>Nama Program</th>
                                            <th>Web Code</th>
                                            <th>Nama Proyek</th>
                                            <!--Nama Proyek itu Uraian kegiatan-->
                                            <th>Tanggal Awal</th>
                                            <th>Tanggal Akhir</th>
                                            <th>Durasi (Hari)</th>
                                            <th>PIC</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach ($proyeks as $proyek)
                                            <tr class="view view-{{ $no }}" id="view-table">
                                                <td class="align-middle btn-nesting-{{ $no }}"
                                                    id="tableButton">
                                                    <i class="fas fa-chevron-down arrow"></i>
                                                </td>
                                                <td class="align-middle">{{ $no }}</td>
                                                <td class="align-middle">{{ $proyek->program->nama_program }}</td>
                                                <td class="align-middle">{{ $proyek->id }}</td>
                                                <td class="align-middle">{{ $proyek->nama_proyek }}</td>
                                                <td class="align-middle">{{ $proyek->tgl_awal }}</td>
                                                <td class="align-middle">{{ $proyek->tgl_akhir }}</td>
                                                <td class="align-middle">{{ $proyek->durasi }}</td>
                                                <td class="align-middle">{{ $proyek->pic }}</td>
                                                <td><button type="button" class="btn btn-blue review-button text-white"
                                                        id="menu-btn-{{ $no++ }}">Review</button></td>
                                            </tr>

                                            <tr class="fold" id="fold-table">
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
                                                                    <th>Catatan</th>
                                                                    <th>Status</th>
                                                                    <th>Laporan</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $i = 1; ?>
                                                                @foreach ($weeks as $week)
                                                                    @if ($proyek->id == $week->id_proyek)

                                                                        <tr>
                                                                            <td>{{ $i++ }}</td>
                                                                            <td>{{ $week->tanggal }}</td>
                                                                            <td>{{ $week->catatan }}</td>
                                                                            <td>{{ $week->status }}</td>
                                                                            <td><a href="./assets/template-keuangan.pdf"
                                                                                    download="Template Laporan Keuangan"
                                                                                    target="_blank">
                                                                                    <button type="button"
                                                                                        class="btn btn-success text-white">Unduh
                                                                                        Laporan</button>
                                                                                </a></td>
                                                                        </tr>
                                                                    @endif
                                                                @endforeach



                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- DataTales Example -->

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->


            <!-- Footer -->
            @include('layouts.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('layouts.modal')

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('frontend') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('frontend') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('frontend') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('frontend') }}/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('frontend') }}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('frontend') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('frontend') }}/js/demo/datatables-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php $no = 1; ?>
    @foreach ($proyeks as $proyek)
        <script>
            // Manipulasi Nesting Table (jQuery)

            $(function() {
                $(".btn-nesting-{{ $no }}").on("click", function() {
                    $(".fold-table tr.view-{{ $no }}").toggleClass("open").next(".fold").toggleClass(
                        "open");
                    $(".review-button").toggleClass("text-white");
                    $('.arrow').toggleClass('fa-chevron-down fa-chevron-up');
                });
            });
            // Akhir Manipulasi Nesting Table
        </script>
        <?php $no++; ?>
    @endforeach


    <script>
        // Manipulasi Mark as read
        $(function() {
            $(".icon-background").on("click", function() {
                $(".icon-background").removeClass("bg-primary");
                $(".icon-background").addClass("bg-success");
            });
        });
        // Akhir Manipulasi Mark as read

        // Manipulasi Review Sidebar
        var menu_btn = document.querySelector("#menu-btn")
        var menu_btn_close = document.querySelector("#menu-btn-close")
        var sidebar = document.querySelector("#sidebar")
        var container = document.querySelector(".my-container")
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav")
        })

        menu_btn_close.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav")
            container.classList.toggle("active-cont")
        })

        var menu_btn_2 = document.querySelector("#menu-btn-2")
        var sidebar = document.querySelector("#sidebar")
        var container = document.querySelector(".my-container")
        menu_btn_2.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav")
        })
        // Akhir Manipulasi Review Sidebar


        // Manipulasi Reply form
        var reply_btn = document.querySelector("#reply-btn")
        var reply_btn_2 = document.querySelector("#reply-btn-2")
        var reply_form = document.querySelector("#reply-form")
        reply_btn.addEventListener("click", () => {
            reply_form.classList.toggle("active-form")
        })
        reply_btn_2.addEventListener("click", () => {
            reply_form.classList.toggle("active-form")
        })
        // akhir Manipulasi Reply form

        // Manipulasi Progress bar
        const progress = document.querySelector('.progress-done');
        setTimeout(() => {
            progress.style.opacity = 1;
            progress.style.width = progress.getAttribute('data-done') + '%';
        }, 10)
        // Akhir Manipulasi Progress bar
    </script>
</body>

</html>
