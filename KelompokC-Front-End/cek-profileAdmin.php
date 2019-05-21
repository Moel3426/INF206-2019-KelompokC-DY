<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Cek Profile
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/demo/demo.css" rel="stylesheet" />
    <link href="./css/profil.css" rel="stylesheet" />



</head>

<body class="index-page sidebar-collapse">
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-dark fixed-top navbar-dark">
            <div class="container-fluid">
                <div class="navbar-translate">
                    <a class="navbar-brand " href="homeAdmin.html" rel="tooltip" title="Home" data-placement="bottom">
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
                            <a class="nav-link" href="adminDashboard.html" onclick="scrollToDownload()">
                                <i class="now-ui-icons shopping_shop"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1"
                                data-toggle="dropdown">
                                <i class="now-ui-icons business_badge"></i>
                                <p>Member</p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                                <a class="dropdown-item" href="#undangAnggota" class="undang" data-toggle="modal">
                                    <i class="now-ui-icons users_single-02"></i> Undang Anggota
                                </a>
                                <a class="dropdown-item" href="memberAdmin.html">
                                    <i class="now-ui-icons users_single-02"></i> Daftar Anggota
                                </a>
                            </div>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="inbox.html" onclick="scrollToDownload()">
                                <i class="now-ui-icons ui-1_email-85"></i>
                                <p>Inbox</p>
                                <span class="badge badge-danger badge-counter">100</span>
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
                                <a class="dropdown-item" href="cek-profileAdmin.html">
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
    <div class="container-fluid p-5 mt-5">
        <div class="user-profle">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header pb-4 pt-4 text-info">
                            <h5 class="title">My Profile</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-5 pr-1">
                                        <div class="form-group ">
                                            <label>ID Pelabuhan</label>
                                            <p class="profile-list">Nanti isinya sesuai yang diinputnya pas daftar</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pr-1">
                                        <div class="form-group">
                                            <label>Pelabuhan</label>
                                            <p class="profile-list">Lampulo</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label>
                                            <p class="profile-list">Maulana Ihsan Ahmad</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 pr-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <p class="profile-list">maulanaihsanpress@gmail.com</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 pr-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Status</label>
                                            <p class="profile-list">Menikah</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Agama</label>
                                            <p class="profile-list">Islam</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <p class="profile-list">Jalan Tengku Meulagu Tibang Kecamatan Syiah Kuala
                                                Banda Aceh</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group text-warning">
                                            <label>Negara</label>
                                            <p class="profile-list">Indonesia</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group text-warning">
                                            <label>No Hp/Telp</label>
                                            <p class="profile-list">081264563223</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group text-warning">
                                            <label>Kode Pos</label>
                                            <p class="profile-list">1234567</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <p class="profile-list">Saya adalah nelayan yang bahagia baik hati dan rajin
                                                menabung.</p>
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
                            <img src="./assets/img/header.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <div class="author">

                                <img class="avatar border-gray rounded-circle" src="./assets/img/default-avatar.png"
                                    alt="...">
                                <h5 class="title text-primary">Maulana Ihsan Ahmad</h5>

                                <a href="edit-profileAdmin.html">
                                    <button class="btn btn-warning">Edit</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Undang Anggota Modal -->
    <div id="undangAnggota" class="modal fade">
        <div class="modal-dialog" style="max-width:400px;">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Undang Anggota</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12 p-1">
                            <div class="form-group">
                                <p>Cari Anggota</p>
                                <input type="search" class="form-control" placeholder="Nama" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="OK">
                        <input type="button" class="btn btn-danger" data-dismiss="modal" value="Batal">
                    </div>
                </form>
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
                <a href="https://www.invisionapp.com" target="_blank"> KELOMPOK C DY</a>. Coded by
                <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
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

</body>

</html>