<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ICON+ | @yield('title')</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('frontend/vendor') }}/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="{{ asset('frontend/css') }}/sb-admin-2.min.css" rel="stylesheet">
    <link href="{{ asset('frontend/css') }}/extended-style.css" rel="stylesheet">
    <link href="{{ asset('frontend/css') }}/sidebar-style.css" rel="stylesheet">
    <link href="{{ asset('frontend/css') }}/progress.css" rel="stylesheet">


    <!-- Custom styles for this page -->
    <link href="{{ asset('frontend/vendor') }}/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    @stack('css')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('layouts.sidebar')

        <!-- Review sidebar -->
        @yield('review')
        <!-- Review sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" class="bg-aliceblue">

                @include('layouts.topbar')


                @yield('content')



                <!-- Footer -->
                <footer class="sticky-footer bg-aliceblue">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; ICON+ 2021</span>
                        </div>
                    </div>
                </footer>
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
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true" style="z-index: 1040 !important;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-gray-500 h6">
                        Do you really want to delete these records? This process cannot be undone
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('frontend/vendor') }}/jquery/jquery.min.js"></script>
        <script nonce="undefined" src="https://cdn.zingchart.com/zingchart.min.js"></script>
        <script src="{{ asset('frontend/vendor') }}/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('frontend/vendor') }}/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('frontend/js') }}/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="{{ asset('frontend/vendor') }}/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ asset('frontend/vendor') }}/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="{{ asset('frontend/js') }}/demo/datatables-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
                integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"];
            window.feed = function(callback) {
                var tick = {};
                tick.plot0 = Math.ceil(350 + (Math.random() * 500));
                callback(JSON.stringify(tick));
            };

            var myConfig = {
                type: "gauge",
                backgroundColor: '#F7FAFF',
                globals: {
                    fontSize: 15
                },
                plotarea: {
                    marginTop: 80
                },
                plot: {
                    size: '100%',
                    valueBox: {
                        placement: 'center',
                        text: '%v', //default
                        fontSize: 16,
                        rules: [{
                                rule: '%v > 80 && %v <= 100',
                                text: '%v<br>EXCELLENT'
                            },
                            {
                                rule: '%v > 60 && %v <= 80',
                                text: '%v<br>Good'
                            },
                            {
                                rule: '%v > 50 && %v <= 60',
                                text: '%v<br>Fair'
                            },
                            {
                                rule: '%v >= 0 && %v <=50',
                                text: '%v<br>Bad'
                            }
                        ]
                    }
                },
                tooltip: {
                    borderRadius: 5
                },
                scaleR: {
                    aperture: 180,
                    minValue: 0,
                    maxValue: 100,
                    step: 10,
                    center: {
                        visible: false
                    },
                    tick: {
                        visible: false
                    },
                    item: {
                        offsetR: 0,
                        rules: [{
                            rule: '%i == 9',
                            offsetX: 15
                        }]
                    },
                    labels: ['0', '', '', '', '', '', '', '', '', '', '100'],
                    ring: {
                        size: 50,
                        rules: [{
                                rule: '%v > 80 && %v <= 100',
                                backgroundColor: '#29B6F6'
                            },
                            {
                                rule: '%v > 60 && %v <= 80',
                                backgroundColor: '#FFA726'
                            },
                            {
                                rule: '%v > 50 && %v <= 60',
                                backgroundColor: '#EF5350'
                            },
                            {
                                rule: '%v >= 0 && %v <=50',
                                backgroundColor: '#E53935'
                            }
                        ]
                    }
                },
                series: [{
                    values: [100], // starting value
                    backgroundColor: 'black',
                    indicator: [10, 10, 10, 10, 0.75],
                    animation: {
                        effect: 2,
                        method: 1,
                        sequence: 4,
                        speed: 900
                    },
                }]
            };

            zingchart.render({
                id: 'myChart',
                data: myConfig,
                height: 500,
                width: '100%',
            });
        </script>

        <script>
            ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"];
            window.feed = function(callback) {
                var tick = {};
                tick.plot0 = Math.ceil(350 + (Math.random() * 500));
                callback(JSON.stringify(tick));
            };

            var myConfig = {
                type: "gauge",
                backgroundColor: '#F7FAFF',
                globals: {
                    fontSize: 15
                },
                plotarea: {
                    marginTop: 80
                },
                plot: {
                    size: '100%',
                    valueBox: {
                        placement: 'center',
                        text: '%v', //default
                        fontSize: 16,
                        rules: [{
                                rule: '%v > 80 && %v <= 100',
                                text: '%v<br>EXCELLENT'
                            },
                            {
                                rule: '%v > 60 && %v <= 80',
                                text: '%v<br>Good'
                            },
                            {
                                rule: '%v > 50 && %v <= 60',
                                text: '%v<br>Fair'
                            },
                            {
                                rule: '%v >= 0 && %v <=50',
                                text: '%v<br>Bad'
                            }
                        ]
                    }
                },
                tooltip: {
                    borderRadius: 5
                },
                scaleR: {
                    aperture: 180,
                    minValue: 0,
                    maxValue: 100,
                    step: 10,
                    center: {
                        visible: false
                    },
                    tick: {
                        visible: false
                    },
                    item: {
                        offsetR: 0,
                        rules: [{
                            rule: '%i == 9',
                            offsetX: 15
                        }]
                    },
                    labels: ['0', '', '', '', '', '', '', '', '', '', '100'],
                    ring: {
                        size: 50,
                        rules: [{
                                rule: '%v > 80 && %v <= 100',
                                backgroundColor: '#29B6F6'
                            },
                            {
                                rule: '%v > 60 && %v <= 80',
                                backgroundColor: '#FFA726'
                            },
                            {
                                rule: '%v > 50 && %v <= 60',
                                backgroundColor: '#EF5350'
                            },
                            {
                                rule: '%v >= 0 && %v <=50',
                                backgroundColor: '#E53935'
                            }
                        ]
                    }
                },
                series: [{
                    values: [100], // starting value
                    backgroundColor: 'black',
                    indicator: [10, 10, 10, 10, 0.75],
                    animation: {
                        effect: 2,
                        method: 1,
                        sequence: 4,
                        speed: 900
                    },
                }]
            };

            zingchart.render({
                id: 'myChart1',
                data: myConfig,
                height: 500,
                width: '100%',
            });
        </script>
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

        @stack('js')
</body>

</html>
