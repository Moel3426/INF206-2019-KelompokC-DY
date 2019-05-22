<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>
		Member
	</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
		name='viewport' />
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
					<a class="navbar-brand " href="<?php echo base_url() ?>landing/home" rel="tooltip" title="Home" data-placement="bottom">
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
							<a class="nav-link" href="<?php echo base_url() ?>landing/dashboard" onclick="scrollToDownload()">
								<i class="now-ui-icons shopping_shop"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url() ?>landing/member" onclick="scrollToDownload()">
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
								<a class="dropdown-item" href="<?php echo base_url() ?>landing/berangkat">
									<i class="now-ui-icons files_box"></i> Keberangkatan
								</a>
								<a class="dropdown-item" href="<?php echo base_url() ?>landing/tiba">
									<i class="now-ui-icons location_pin"></i> Tiba
								</a>
							</div>
						</li>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url() ?>landing/history" onclick="scrollToDownload()">
								<i class="now-ui-icons education_agenda-bookmark"></i>
								<p>History</p>
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
								<a class="dropdown-item" href="<?php echo base_url() ?>landing/cek_profile">
									<i class="now-ui-icons users_single-02"></i> Check Profile
								</a>
								<a class="dropdown-item" href="<?php echo base_url() ?>landing/">
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
		<div class="table-wrapper shadow-lg">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>HISTORY <b>JADWAL</b></h2>
					</div>
					<div class="col-sm-6">

						<a href="#hapusAnggota" class="btn btn-danger" data-toggle="modal"><i
								class="material-icons">&#xE15C;</i> <span>Hapus</span></a>
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
						<th>Anggota</th>
						<th>Status</th>
						<th>Waktu Konfirmasi</th>
						<th>Keterangan</th>
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
						<td><img class="gambar" src="http://lorempixel.com/100/100/people/1" alt="" /></td>
						<td><a href="#" class="badge badge-success text-light">DITERIMA</a></td>
						<td>Sabtu, 10 Maret 2019/ 18:00</td>
						<td>On Time</td>


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
						<td><img class="gambar" src="http://lorempixel.com/100/100/people/1" alt="" /></td>
						<td><a href="#" class="badge badge-danger text-light">DITOLAK</a></td>
						<td>Sabtu, 10 Maret 2019/ 18:00</td>
						<td>On Time</td>
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
						<td><img class="gambar" src="http://lorempixel.com/100/100/people/1" alt="" />
							<img class="gambar" src="http://lorempixel.com/100/100/people/1" alt="" />
							<img class="gambar" src="http://lorempixel.com/100/100/people/1" alt="" />
							<img class="gambar" src="http://lorempixel.com/100/100/people/1" alt="" />
							<img class="gambar" src="http://lorempixel.com/100/100/people/1" alt="" /></td>
						<td><a href="#" class="badge badge-success text-light">DITERIMA</a></td>
						<td>Sabtu, 10 Maret 2019/ 18:00</td>
						<td>On Time</td>


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
						<td><img class="gambar" src="http://lorempixel.com/100/100/people/1" alt="" /></td>
						<td><a href="#" class="badge badge-warning text-light">DALAM PROSES</a></td>
						<td>Sabtu, 10 Maret 2019/ 18:00</td>
						<td>On Time</td>


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
						<td><img class="gambar" src="http://lorempixel.com/100/100/people/1" alt="" /></td>
						<td><a href="#" class="badge badge-danger text-light">DITOLAK</a></td>
						<td>Sabtu, 10 Maret 2019/ 18:00</td>
						<td>On Time</td>


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
	</div>
	<!-- Hapus Data Anggota Modal -->
	<div id="hapusAnggota" class="modal fade">
		<div class="modal-dialog" style="max-width:400px;">
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