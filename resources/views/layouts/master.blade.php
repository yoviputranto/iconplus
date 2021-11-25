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

        @include('layouts.modal')

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
        </script>
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>

        @stack('js')
</body>

</html>
