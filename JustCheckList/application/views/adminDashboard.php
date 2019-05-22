<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Admin Dashboard
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
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url() ?>assets/demo/demo.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/css/grafik.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

</head>

<body class="index-page sidebar-collapse">
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-dark fixed-top navbar-dark">
            <div class="container-fluid">
                <div class="navbar-translate">
                    <a class="navbar-brand " href="<?php echo base_url() ?>index.php/landing/homeAdmin" rel="tooltip" title="Home" data-placement="bottom">
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
                    data-nav-image="<?php echo base_url() ?>assets/img/1.jpg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() ?>index.php/landing/adminDashboard" onclick="scrollToDownload()">
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
                                <a class="dropdown-item" href="<?php echo base_url() ?>index.php/landing/memberAdmin">
                                    <i class="now-ui-icons users_single-02"></i> Daftar Anggota
                                </a>
                            </div>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() ?>index.php/landing/inbox" onclick="scrollToDownload()">
                                <i class="now-ui-icons ui-1_email-85"></i>
                                <p>Inbox</p>
                                <span class="badge badge-danger badge-counter">100</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1"
                                data-toggle="dropdown">
                                <img class="rounded-circle" src="<?php echo base_url() ?>assets/img/default-avatar.png" width="30px"
                                    height="30px" alt="" srcset="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                                <a class="dropdown-item" href="#">
                                    Maulana Ihsan Ahmad
                                </a>
                                <a class="dropdown-item" href="<?php echo base_url() ?>index.php/landing/cek_profileAdmin">
                                    <i class="now-ui-icons users_single-02"></i> Check Profile
                                </a>
                                <a class="dropdown-item" href="<?php echo base_url() ?>index.php/landing/">
                                    <i class="now-ui-icons sport_user-run"></i> Check Out
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container-fluid pl-5 pr-5 pt-5 mt-5">
        <div class="row">
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Keberangkatan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">10 <span>Kapal</span></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-ship" style="font-size:35px; color: gainsboro;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Nelayan
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">100 <span>Orang</span> </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users" style="font-size:35px; color: gainsboro;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Keterlambatan
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">10 <span>Kapal</span></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clock" style="font-size:35px; color: gainsboro;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="container-fluid pl-5 pr-5 ">
        <div class="card shadow mb-4">
            <div class="card-header" style="background: #435d7d; border-radius: 5px; ">
                <h4 class="ml-4 font-weight-bold text-light"><i class="fas fa-ship"
                        style="font-size:30px; color:white;"></i> KEBERANGKATAN</h4>

            </div>
            <div class="card-body">
                <div class="chart-bar">
                    <canvas id="myBarChart"></canvas>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid pl-5 pr-5">
        <div class="card shadow mb-4">
            <div class="card-header" style="background: #435d7d; border-radius: 5px; ">
                <h4 class="ml-4 font-weight-bold text-light"><i class="fas fa-users"
                        style="font-size:30px; color: white;"></i> JUMLAH NELAYAN</h4>

            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid pl-5 pr-5">
        <div class="card shadow mb-4">
            <div class="card-header" style="background: #435d7d; border-radius: 5px; ">
                <h4 class="ml-4 font-weight-bold text-light"><i class="fas fa-clock"
                        style="font-size:30px; color:white;"></i> KETERLAMBATAN</h4>

            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart2"></canvas>
                </div>

            </div>
        </div>
    </div>

    </div>
    <div class="container-fluid pl-5 pr-5">
        <div class="table-wrapper shadow-lg ">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>TABEL <b>JADWAL</b></h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="selectAll">
                                <label for="selectAll"></label>
                            </span>
                        </th>
                        <th>ID Kapal</th>
                        <th>Keberangkatan</th>
                        <th>Tiba</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                <label for="checkbox1"></label>
                            </span>
                        </td>
                        <td>1</td>
                        <td>Sabtu, 10 Maret 2019/ 18:00</td>
                        <td>Minggu, 11 Maret 2019/ 18.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox2" name="options[]" value="1">
                                <label for="checkbox2"></label>
                            </span>
                        </td>
                        <td>2</td>
                        <td>Sabtu, 10 Maret 2019/ 18:00</td>
                        <td>Minggu, 11 Maret 2019/ 18.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox3" name="options[]" value="1">
                                <label for="checkbox3"></label>
                            </span>
                        </td>
                        <td>3</td>
                        <td>Sabtu, 10 Maret 2019/ 18:00</td>
                        <td>Minggu, 11 Maret 2019/ 18.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox4" name="options[]" value="1">
                                <label for="checkbox4"></label>
                            </span>
                        </td>
                        <td>4</td>
                        <td>Sabtu, 10 Maret 2019/ 18:00</td>
                        <td>Minggu, 11 Maret 2019/ 18.00</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox5" name="options[]" value="1">
                                <label for="checkbox5"></label>
                            </span>
                        </td>
                        <td>5</td>
                        <td>Sabtu, 10 Maret 2019/ 18:00</td>
                        <td>Minggu, 11 Maret 2019/ 18.00</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
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
                        <a href="#">
                            @ copy JUST CHECK LIST
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright" id="copyright">
                &copy;
                <script>
                    document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                </script>, Designed by
                <a href="#"> KELOMPOK C DY</a>. Coded by
                <a href="#">RPL2019</a>.
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