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
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
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
					<a class="navbar-brand " href="<?php echo base_url() ?>admin/welcome" rel="tooltip" title="Home" data-placement="bottom">
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
							<a class="nav-link" href="<?php echo base_url() ?>admin" onclick="scrollToDownload()">
								<i class="now-ui-icons shopping_shop"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
								<i class="now-ui-icons business_badge"></i>
								<p>Member</p>
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
								<a class="dropdown-item" href="#undangAnggota" class="undang" data-toggle="modal">
									<i class="now-ui-icons users_single-02"></i> Undang Anggota
								</a>
								<a class="dropdown-item" href="<?php echo base_url('admin/member') ?>">
									<i class="now-ui-icons users_single-02"></i> Daftar Anggota
								</a>
							</div>
						</li>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url() ?>admin/inbox" onclick="scrollToDownload()">
								<i class="now-ui-icons ui-1_email-85"></i>
								<p>Inbox</p>
								<span class="badge badge-danger badge-counter">100</span>
							</a>
						</li>
						<li class="nav-item dropdown">
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
								<img class="rounded-circle" src="<?php echo base_url('assets/profil/' . $user['gambar']) ?>" width="30px" height="30px" alt="" srcset="">
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
								<a class="dropdown-item" href="#">
									<?= $user['nama']; ?>
								</a>
								<a class="dropdown-item" href="<?php echo base_url() ?>admin/cek_profile">
									<i class="now-ui-icons users_single-02"></i> Check Profile
								</a>
								<a class="dropdown-item" href="<?php echo base_url() ?>landing/logout">
									<i class="now-ui-icons sport_user-run"></i> Check Out
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
