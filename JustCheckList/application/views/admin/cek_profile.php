<!-- content -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="<?php echo base_url() ?>assets/css/profil.css" rel="stylesheet" />
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
								<div class="col-md-4 pr-1">
									<div class="form-group ">
										<h6>ID Pelabuhan</h6>
										<p class="profile-list"><?= $user['id_pelabuhan'] ?></p>
									</div>
								</div>
								<div class="col-md-4 pr-1">
									<div class="form-group">
										<h6>Pelabuhan</h6>
										<p class="profile-list"><?= $user['pelabuhan'] ?></p>
									</div>
								</div>
								<div class="col-md-4 pr-1">
									<div class="form-group">
										<h6>Nama</h6>
										<p class="profile-list"><?= $user['nama'] ?></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 pr-1">
									<div class="form-group">
										<h6 for="exampleInputEmail1">Email</h6>
										<p class="profile-list"><?= $user['email'] ?></p>
									</div>
								</div>
								<div class="col-md-4 pr-1">
									<div class="form-group">
										<h6>Status</h6>
										<p class="profile-list"><?= $user['status'] ?></p>
									</div>
								</div>
								<div class="col-md-4 pr-1">
									<div class="form-group">
										<h6>Agama</h6>
										<p class="profile-list"><?= $user['agama'] ?></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<h6>Alamat</h6>
										<p class="profile-list"><?= $user['alamat'] ?></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 pr-1">
									<div class="form-group">
										<h6>Negara</h6>
										<p class="profile-list"><?= $user['negara'] ?></p>
									</div>
								</div>
								<div class="col-md-4 pr-1">
									<div class="form-group">
										<h6>No Hp/Telp</h6>
										<p class="profile-list"><?= $user['no_hp'] ?></p>
									</div>
								</div>
								<div class="col-md-4 pr-1">
									<div class="form-group">
										<h6>Kode Pos</h6>
										<p class="profile-list"><?= $user['kode_pos'] ?></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<h6>Deskripsi</h6>
										<p class="profile-list"><?= $user['deskripsi'] ?></p>
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

							<img class="avatar border-gray rounded-circle" src="<?php echo base_url('assets/profil/' . $user['gambar']) ?>" alt="...">
							<h5 class="title text-primary"><?= $user['nama'] ?></h5>

							<a href="<?php echo base_url() ?>admin/edit_profile">
								<button class="btn btn-warning">Edit</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
