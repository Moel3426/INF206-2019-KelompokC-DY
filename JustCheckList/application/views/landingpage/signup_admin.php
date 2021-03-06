<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Sigup-admin
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
</head>

<body class="login-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">

      <div class="navbar-translate">
        <a class="navbar-brand" href="<?php echo base_url() ?>index.php/landing" rel="tooltip" title="Welcome" data-placement="bottom">
          JUST CHECK LIST
        </a>
      </div>

    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url(<?php echo base_url() ?>assets/img/4.jpg)"></div>
    <div class="content">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">
            <form class="form" method="post" action="<?php echo base_url('landing/signup_admin'); ?>">
              <div class="card-header text-center">
                <div class="logo-container mb-1" style="height:auto;width: 130px;">
                  <img src="<?php echo base_url() ?>assets/img/logohitamputih.png" alt="">
                </div>
              </div>
              <div class="card-body">
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" name="nama" placeholder="Nama..." <?= set_value('nama'); ?> required />
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons ui-1_email-85"></i>
                    </span>
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <input type="email" placeholder="Email..." name="email" class="form-control" <?= set_value('email'); ?> required />
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons location_pin"></i>
                    </span>
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <input type="text" placeholder="Alamat..." name="alamat" class="form-control" value="<?= set_value('alamat'); ?>" required />
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons tech_mobile"></i>
                    </span>
                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <input type="number" placeholder="Nomor HP/Telp..." name="nohp" class="form-control" <?= set_value('nohp'); ?> required />
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons ui-1_lock-circle-open"></i>
                    </span>
                    <?= form_error('nohp', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <input type="password" placeholder="Password..." class="form-control" name="password1" required />
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons ui-1_lock-circle-open"></i>
                    </span>
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <input type="password" placeholder="Konfirmasi Password..." name="password2" class="form-control" required />
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons business_bank"></i>
                    </span>
                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <input type="text" placeholder="Pelabuhan..." class="form-control" name="pelabuhan" <?= set_value('pelabuhan'); ?> required />
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons business_bank"></i>
                    </span>
                    <?= form_error('pelabuhan', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <input type="text" placeholder="ID Pelabuhan..." name="id_pelabuhan" id="id_pelabuhan" class="form-control" />
                  <?= form_error('pelabuhan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Daftar</button>
                  <div class="pull-center">
                    <p style="text-transform:inherit; font-size:12px;">
                      Daftar sebagai admin
                    </p>
                  </div>
            </form>
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
</body>

</html>
