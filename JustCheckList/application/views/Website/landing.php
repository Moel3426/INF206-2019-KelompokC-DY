<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Landing Page
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?= base_url(); ?>assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="landing.html" rel="tooltip" title="Welcome" data-placement="bottom">
                    JUST CHECK LIST
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar top-bar"></span>
                    <span class="navbar-toggler-bar middle-bar"></span>
                    <span class="navbar-toggler-bar bottom-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="<?= base_url(); ?>assets/img/1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
                            <i class="fas fa-sign-in-alt" style="font-size:12px;"></i>
                            <p style="font-size:12px;"> DAFTAR</p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                            <a class="dropdown-item" href="<?= base_url('index.php/website/signup_admin'); ?>">
                                <i class="fas fa-user-lock"></i> Admin
                            </a>
                            <a class="dropdown-item" href="<?= base_url('index.php/website/signUp'); ?>">
                                <i class="fas fa-user"></i> Anggota
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" style="background-image:url(<?= base_url(); ?>assets/img/1.jpg)"></div>
        <div class="content">
            <div class="container">
                <div class="col-md-4 ml-auto mr-auto">
                    <div class="card card-login card-plain">
                        <form class="form" method="" action="">
                            <div class="card-header text-center">
                                <div class="logo-container mb-1" style="height:auto;width: 130px;">
                                    <img src="<?= base_url(); ?>assets/img/logohitamputih.png" alt="">
                                </div>
                            </div>
                            <div class="card-body">
                                <?= $this->session->flashdata('message'); ?>
                                <div class="card-footer text-center">
                                    <a href="<?= base_url('index.php/website/login'); ?>" class="btn btn-primary btn-round btn-lg btn-block">Masuk</a>

                                    <div class="pull-center">
                                        <p style="text-transform:inherit; font-size:12px;">
                                            Let's check your list today
                                        </p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <footer class="footer footer-default bg-transparent">
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
        </div>
        <!--   Core JS Files   -->
        <script src="<?= base_url(); ?>assets/js/core/jquery.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets/js/core/popper.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
        <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
        <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-switch.js"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="<?= base_url(); ?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
        <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
        <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
        <script src="<?= base_url(); ?>assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
</body>

</html>