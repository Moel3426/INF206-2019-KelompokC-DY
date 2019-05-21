<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Home
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/demo/demo.css" rel="stylesheet" />
    <link href="css/grafik.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="index-page sidebar-collapse">
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-dark fixed-top navbar-dark">
            <div class="container-fluid">
                <div class="navbar-translate">
                    <a class="navbar-brand " href="home.html" rel="tooltip" title="Home" data-placement="bottom">
                        JUST CHECK LIST
                    </a>

                    <button class="navbar-toggler navbar-toggler border-0" type="button" data-toggle="collapse"
                        data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar top-bar"></span>
                        <span class="navbar-toggler-bar middle-bar"></span>
                        <span class="navbar-toggler-bar bottom-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navigation"
                    data-nav-image="./assets/img/1.jpg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.html" onclick="scrollToDownload()">
                                <i class="now-ui-icons shopping_shop"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="member.html" onclick="scrollToDownload()">
                                <i class="now-ui-icons business_badge"></i>
                                <p>Member</p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1"
                                data-toggle="dropdown">
                                <i class="now-ui-icons tech_watch-time"></i>
                                <p>Schedule</p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                                <a class="dropdown-item" href="berangkat.html">
                                    <i class="now-ui-icons files_box"></i> Keberangkatan
                                </a>
                                <a class="dropdown-item" href="tiba.html">
                                    <i class="now-ui-icons location_pin"></i> Tiba
                                </a>
                            </div>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="history.html" onclick="scrollToDownload()">
                                <i class="now-ui-icons education_agenda-bookmark"></i>
                                <p>History</p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1"
                                data-toggle="dropdown">
                                <img class="rounded-circle" src="assets/img/default-avatar.png" width="30px"
                                    height="30px" alt="" srcset="">

                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                                <a class="dropdown-item" href="#">
                                    Maulana Ihsan Ahmad
                                </a>
                                <a class="dropdown-item" href="cek_profile.html">
                                    <i class="now-ui-icons users_single-02"></i> Check Profile
                                </a>
                                <a class="dropdown-item" href="landing.html">
                                    <i class="now-ui-icons sport_user-run"></i> Check Out
                                </a>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>

        </nav>
    </div>
    <div class="wrapper">
        <div class="page-header clear-filter" filter-color="black">
            <div class="page-header-image" data-parallax="true" style="background-image:url('assets/img/welcome.jpg');">
            </div>
            <div class="container">
                <div class="content-center brand">
                    <img class="n-logo" src="./assets/img/logohitamputih.png" alt="">
                    <h1 class="h1-seo">JUST CHECK YOUR LIST TODAY</h1>
                    <h3>A beautiful day is waiting for you.</h3>
                </div>

            </div>
        </div>


        <footer class="footer footer-default bg-dark">
            <div class=" container text-light">
                <nav>
                    <ul>
                        <li>
                            <a href="#">
                                @ copy JUST CHECK LIST
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright" id="copyright">
                    &copy;
                    <script>
                        document.getElementById('copyright').appendChild(document.createTextNode(new Date()
                            .getFullYear()))
                    </script>, Designed by
                    <a href="#"> KELOMPOK C DY</a>. Coded by
                    <a href="#">RPL2019</a>.
                </div>
            </div>
        </footer>
        <!-- End Navbar -->

        <!--   Core JS Files   -->
        <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
        <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
        <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
        <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
        <script src="./assets/js/plugins/bootstrap-switch.js"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
        <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
        <script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
        <script src="./assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>

        <!-- Chart -->
        <script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/demo/chart-area-demo.js"></script>
        <script src="<?php echo base_url() ?>assets/js/demo/chart-area-demo-2.js"></script>
        <script src="<?php echo base_url() ?>assets/js/demo/chart-pie-demo.js"></script>
        <script src="<?php echo base_url() ?>assets/js/demo/chart-bar-demo.js"></script>
        <script>
            $(document).ready(function () {
                // the body of this function is in assets/js/now-ui-kit.js
                nowuiKit.initSliders();
            });

            function scrollToDownload() {

                if ($('.section-download').length != 0) {
                    $("html, body").animate({
                        scrollTop: $('.section-download').offset().top
                    }, 1000);
                }
            }
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                // Activate tooltip
                $('[data-toggle="tooltip"]').tooltip();

                // Select/Deselect checkboxes
                var checkbox = $('table tbody input[type="checkbox"]');
                $("#selectAll").click(function () {
                    if (this.checked) {
                        checkbox.each(function () {
                            this.checked = true;
                        });
                    } else {
                        checkbox.each(function () {
                            this.checked = false;
                        });
                    }
                });
                checkbox.click(function () {
                    if (!this.checked) {
                        $("#selectAll").prop("checked", false);
                    }
                });
            });
        </script>
</body>

</html>