<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Preview
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">


</head>

<body class="index-page sidebar-collapse">
  <div class="container">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark fixed-top navbar-dark">
      <div class="container-fluid">
        <div class="navbar-translate">
          <a class="navbar-brand " href="<?php echo base_url() ?>index.php/website/website/home" rel="tooltip" title="Home" data-placement="bottom">
            JUST CHECK LIST
          </a>

          <button class="navbar-toggler navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar top-bar"></span>
            <span class="navbar-toggler-bar middle-bar"></span>
            <span class="navbar-toggler-bar bottom-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="<?php echo base_url() ?>./assets/img/1.jpg">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>index.php/website/website/dashboard" onclick="scrollToDownload()">
                <i class="now-ui-icons shopping_shop"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>index.php/website/website/member" onclick="scrollToDownload()">
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
                <a class="dropdown-item" href="<?php echo base_url() ?>index.php/website/website/berangkat">
                  <i class="now-ui-icons files_box"></i> Keberangkatan
                </a>
                <a class="dropdown-item" href="<?php echo base_url() ?>index.php/website/website/tiba">
                  <i class="now-ui-icons location_pin"></i> Tiba
                </a>
              </div>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>index.php/website/website/history" onclick="scrollToDownload()">
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
                <a class="dropdown-item" href="<?php echo base_url() ?>indexphpwebsite/website/cek_profile">
                  <i class="now-ui-icons users_single-02"></i> Check Profile
                </a>
                <a class="dropdown-item" href="<?php echo base_url() ?>indexphpwebsite/website/">
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
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-preview-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Form Keberangkatan</h1>
                    <hr>
                  </div>
                  <form class="user">
                    <label for="">ID Kapal</label>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="idKapal" aria-describedby="emailHelp" value="JustCheckList" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">Keberangkatan</label>
                      <input type="text" class="form-control form-control-user" value="05/02/2019" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">Tiba</label>
                      <input type="text" class="form-control form-control-user" value="07/02/2019" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">Daftar Anggota</label>
                      <div class="table-wrapper mt-4 pt-0">
                        <table class="table table-striped table-hover ">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Foto</th>
                              <th>Nama</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>
                                <img class="gambar" src="<?php echo base_url() ?>assets/img/default-avatar.png" alt="" srcset="" />
                              </td>
                              <td>Maulana Ihsan Ahmad</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td><img class="gambar" src="<?php echo base_url() ?>assets/img/default-avatar.png" alt="" srcset="" />
                              </td>
                              <td>Dominique Perrier</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>
                                <img class="gambar" src="<?php echo base_url() ?>assets/img/default-avatar.png" alt="" srcset="" />
                              </td>
                              <td>Maulana Ihsan Ahmad</td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td><img class="gambar" src="<?php echo base_url() ?>assets/img/default-avatar.png" alt="" srcset="" />
                              </td>
                              <td>Dominique Perrier</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>

                    </div>
                    <a href="<?php echo base_url() ?>indexphpwebsite/website/history" class="btn btn-success btn-user btn-block btn-round">
                      Ajukan
                      <a href="<?php echo base_url() ?>index.php/website/website/schedule" class="btn btn-danger btn-user btn-block btn-round">
                        Kembali
                      </a>
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Delete Modal HTML -->
        <div id="deleteEmployeeModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <form>
                <div class="modal-header">
                  <h4 class="modal-title">Hapus Angota</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                  <p>Anda yakin ingin menghapus data anggota?</p>
                  <p class="text-warning"><small>Keputusan tidak dapat diulang.</small></p>
                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                  <input type="submit" class="btn btn-danger" value="Hapus">
                </div>
              </form>
            </div>
          </div>
        </div>


        </form>
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
  <script type="text/javascript">
    $(document).ready(function() {
      // Activate tooltip
      $('[data-toggle="tooltip"]').tooltip();

      // Select/Deselect checkboxes
      var checkbox = $('table tbody input[type="checkbox"]');
      $("#selectAll").click(function() {
        if (this.checked) {
          checkbox.each(function() {
            this.checked = true;
          });
        } else {
          checkbox.each(function() {
            this.checked = false;
          });
        }
      });
      checkbox.click(function() {
        if (!this.checked) {
          $("#selectAll").prop("checked", false);
        }
      });
    });
  </script>
</body>

</html>