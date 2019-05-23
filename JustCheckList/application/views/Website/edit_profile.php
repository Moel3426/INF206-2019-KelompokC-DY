<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href=".<?php echo base_url() ?>assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href=".<?php echo base_url() ?>assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Edit Profile
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url() ?>assets/demo/demo.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/css/profil.css" rel="stylesheet" />



</head>

<body class="index-page sidebar-collapse">
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-dark fixed-top navbar-dark">
            <div class="container-fluid">
                <div class="navbar-translate">
                    <a class="navbar-brand " href="<?php echo base_url() ?>index.php/website/home" rel="tooltip" title="Home" data-placement="bottom">
                        JUST CHECK LIST
                    </a>

                    <button class="navbar-toggler navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar top-bar"></span>
                        <span class="navbar-toggler-bar middle-bar"></span>
                        <span class="navbar-toggler-bar bottom-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="<?php echo base_url() ?>assets/img/1.jpg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() ?>index.php/website/dashboard" onclick="scrollToDownload()">
                                <i class="now-ui-icons shopping_shop"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() ?>index.php/website/member" onclick="scrollToDownload()">
                                <i class="now-ui-icons business_badge"></i>
                                <p>Member</p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
                                <i class="now-ui-icons tech_watch-time"></i>
                                <p>Schedule</p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                                <a class="dropdown-item" href="<?php echo base_url() ?>index.php/website/berangkat">
                                    <i class="now-ui-icons files_box"></i> Keberangkatan
                                </a>
                                <a class="dropdown-item" href="<?php echo base_url() ?>index.php/website/tiba">
                                    <i class="now-ui-icons location_pin"></i> Tiba
                                </a>
                            </div>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() ?>index.php/website/history" onclick="scrollToDownload()">
                                <i class="now-ui-icons education_agenda-bookmark"></i>
                                <p>History</p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
                                <img class="rounded-circle" src="<?php echo base_url() ?>assets/img/default-avatar.png" width="30px" height="30px" alt="" srcset="">

                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                                <a class="dropdown-item" href="#">
                                    Maulana Ihsan Ahmad
                                </a>
                                <a class="dropdown-item" href="cek_profile">
                                    <i class="now-ui-icons users_single-02"></i> Check Profile
                                </a>
                                <a class="dropdown-item" href="<?php echo base_url() ?>index.php/website/">
                                    <i class="now-ui-icons sport_user-run"></i> Check Out
                                </a>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>

        </nav>
    </div>
    <div class="container-fluid p-5 mt-5">
        <div class="user-profle">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-primary">
                            <h5 class="title">Edit Profile</h5>
                        </div>
                        <div class="card-body">
                            <form class="p-2">
                                <div class="row">
                                    <div class="col-md-5 pr-1">
                                        <div class="form-group">
                                            <label>ID Kapal</label>
                                            <input type="text" class="form-control" disabled="" placeholder="Company" value="Nanti isinya sesuai yang diinputnya pas daftar">
                                        </div>
                                    </div>
                                    <div class="col-md-3  pr-1">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" placeholder="Username" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" placeholder="Email" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 pr-1">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input type="text" class="form-control" placeholder="Status">
                                        </div>
                                    </div>
                                    <div class="col-md-3 pr-1">
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <input type="text" class="form-control" placeholder="Agama" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>No HP/Telp</label>
                                            <input type="number" class="form-control" placeholder="No HP/Telp" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control" placeholder="Password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 pr-1">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" placeholder="Home Address" value="Jalan Tengku Meulagu Tibang Kecamatan Syiah Kuala Banda Aceh" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Negara</label>
                                            <input type="text" class="form-control" placeholder="Negara">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Kota/Kabupaten</label>
                                            <input type="text" class="form-control" placeholder="Kota/Kabupaten">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Kode Pos</label>
                                            <input type="number" class="form-control" placeholder="1234567">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea rows="4" cols="80" class="form-control" placeholder="Ceritakan deskripsimu" value="Mike">Saya adalah nelayan yang sangat ceria dan baik hati</textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-user">
                        <div class="belakang">
                            <img src="<?php echo base_url() ?>assets/img/header.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <div class="author">
                                <div class="form-group shadow-none " rel="tooltip" title="Klik di  sini untuk mengganti foto profil" data-placement="top">
                                    <input type="file"><img type="file" class="avatar border-gray rounded-circle" src="<?php echo base_url() ?>assets/img/default-avatar.png" alt="...">
                                    <h5 class="title text-primary">Maulana Ihsan Ahmad</h5>
                                </div>
                                <a href="<?php echo base_url() ?>index.php/website/cek_profile">
                                    <button class="btn btn-success">Simpan</button>
                                    <button class="btn btn-danger">Batal</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer footer-default bg-dark">
        <div class=" container text-light">
            <nav>
                <ul>
                    <li>
                        <a href="https://www.creative-tim.com">
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
                <a href="https://www.invisionapp.com"> KELOMPOK C DY</a>. Coded by
                <a href="https://www.creative-tim.com">Creative Tim</a>.
            </div>
        </div>
    </footer>
    <!-- End Navbar -->




    <!--   Core JS Files   -->
    <script src="<?php echo base_url() ?>assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="<?php echo base_url() ?>assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="<?php echo base_url() ?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="<?php echo base_url() ?>assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo base_url() ?>assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
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

</body>

</html>