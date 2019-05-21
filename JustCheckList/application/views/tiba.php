<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="./assets/img/favicon.png">
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
	<link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="./assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="./assets/demo/demo.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="css/style.css">
	<link href="./css/profil.css" rel="stylesheet" />

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
								<a class="dropdown-item" href="cek-profile.html">
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
		<div class="table-wrapper shadow-lg">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>KONFIRMASI <b>JADWAL TIBA</b></h2>
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
						<th>Aksi</th>
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
						<td><a href="#konfirmasiTepat" class="konfirmasi" data-toggle="modal"><i class="material-icons"
									data-toggle="tooltip" title="Konfirmasi tiba">&#xe0cf;</i></a></td>
						<!-- <td><a href="#konfirmasiTiba" class="konfirmasi" data-toggle="modal"><i class="material-icons"
									data-toggle="tooltip" title="Konfirmasi tiba">&#xe0cf;</i></a></td> -->
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
						<td><a href="#konfirmasiTepat" class="konfirmasi" data-toggle="modal"><i class="material-icons"
									data-toggle="tooltip" title="Konfirmasi tiba">&#xe0cf;</i></a></td>
						<!-- <td><a href="#konfirmasiTiba" class="konfirmasi" data-toggle="modal"><i class="material-icons"
							data-toggle="tooltip" title="Konfirmasi tiba">&#xe0cf;</i></a></td> -->
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
						<td><a href="#konfirmasiTepat" class="konfirmasi" data-toggle="modal"><i class="material-icons"
									data-toggle="tooltip" title="Konfirmasi tiba">&#xe0cf;</i></a></td>
						<!-- <td><a href="#konfirmasiTiba" class="konfirmasi" data-toggle="modal"><i class="material-icons"
							data-toggle="tooltip" title="Konfirmasi tiba">&#xe0cf;</i></a></td> -->
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
						<!-- <td><a href="#konfirmasiTepat" class="konfirmasi" data-toggle="modal"><i class="material-icons"
									data-toggle="tooltip" title="Konfirmasi tiba">&#xe0cf;</i></a></td> -->
						<td><a href="#konfirmasiTiba" class="konfirmasi" data-toggle="modal"><i class="material-icons"
									data-toggle="tooltip" title="Konfirmasi tiba">&#xe0cf;</i></a></td>
						<td>Sabtu, 10 Maret 2019/ 18:00</td>
						<td>Telat</td>

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
						<!-- <td><a href="#konfirmasiTepat" class="konfirmasi" data-toggle="modal"><i class="material-icons"
									data-toggle="tooltip" title="Konfirmasi tiba">&#xe0cf;</i></a></td> -->
						<td><a href="#konfirmasiTiba" class="konfirmasi" data-toggle="modal"><i class="material-icons"
									data-toggle="tooltip" title="Konfirmasi tiba">&#xe0cf;</i></a></td>
						<td>Sabtu, 10 Maret 2019/ 18:00</td>
						<td>Telat</td>


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
	<!-- Konfirmasi Sukses Anggota Modal -->
	<div id="konfirmasiTepat" class="modal fade">
		<div class="modal-dialog" style="max-width:400px;">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Konfimasi</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<p>Waktu tiba anda telah dikonfirmasi</p>
						<p class="text-success"><small>Terima kasih.</small></p>
					</div>
					<div class="modal-footer">
						<input type="submit" class="btn btn-success" value="OK">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Konfirmasi Tiba Modal -->
	<div id="konfirmasiTiba" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="row justify-content-center">
					<div class="col-xl-10 col-lg-12 col-md-9">
						<div class="card o-hidden border-0 shadow-lg my-5">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<div class="card-body p-0">
								<!-- Nested Row within Card Body -->
								<div class="row">
									<div class="col-lg-6 d-none d-lg-block bg-schedule-image"></div>
									<div class="col-lg-6">
										<div class="p-5">
											<div class="text-center">
												<h1 class="h4 text-gray-900 mb-4">Form Konfirmasi Keterlambatan</h1>
												<hr>
											</div>
											<form class="user">
												<label for="">ID Kapal</label>
												<div class="form-group">
													<input type="text" class="form-control form-control-user"
														id="idKapal" aria-describedby="emailHelp"
														placeholder="Masukkan ID Kapal ..." readonly>
												</div>
												<div class="form-group">
													<label for="">Sebab Keterlambatan</label>
													<div class="form-check">
														<label class="form-check-label">
															<input class="form-check-input" type="checkbox" value="">
															Kapal rusak
															<span class="form-check-sign">
																<span class="check"></span>
															</span>
														</label>
													</div>
													<div class="form-check">
														<label class="form-check-label">
															<input class="form-check-input" type="checkbox" value="">
															Cuaca buruk
															<span class="form-check-sign">
																<span class="check"></span>
															</span>
														</label>
													</div>
													<div class="form-check">
														<label class="form-check-label">
															<input class="form-check-input" type="checkbox" value="">
															Minim target
															<span class="form-check-sign">
																<span class="check"></span>
															</span>
														</label>
													</div>
													<div class="form-check">
														<label class="form-check-label">
															<input class="form-check-input" type="checkbox" value="">
															Lainnya
															<span class="form-check-sign">
																<span class="check"></span>
															</span>
														</label>
													</div>
													<div class="mt-3">
														<label for="">Keterangan</label>
														<div class="form-group">
															<textarea class="form-control" rows="3"></textarea>
														</div>
													</div>
													<a href="#" class="btn btn-warning btn-user btn-block btn-round">
														Konfimasi
													</a>
													<a href="#" class="btn btn-danger btn-user btn-block btn-round"
														class="close" data-dismiss="modal" aria-hidden="true">
														Batal
													</a>
											</form>
											<hr>
										</div>
									</div>
								</div>
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