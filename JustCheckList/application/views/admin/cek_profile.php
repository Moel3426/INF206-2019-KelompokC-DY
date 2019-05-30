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
								<div class="col-md-5 pr-1">
									<div class="form-group ">
										<label>ID Pelabuhan</label>
										<p class="profile-list"><?= $user['id_pelabuhan'] ?></p>
									</div>
								</div>
								<div class="col-md-3 pr-1">
									<div class="form-group">
										<label>Pelabuhan</label>
										<p class="profile-list"><?= $user['pelabuhan'] ?></p>
									</div>
								</div>
								<div class="col-md-4 pr-1">
									<div class="form-group">
										<label for="exampleInputEmail1">Nama</label>
										<p class="profile-list"><?= $user['nama'] ?></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-5 pr-1">
									<div class="form-group">
										<label for="exampleInputEmail1">Email</label>
										<p class="profile-list"><?= $user['email'] ?></p>
									</div>
								</div>
								<div class="col-md-3 pr-1">
									<div class="form-group">
										<label for="exampleInputEmail1">Status</label>
										<p class="profile-list"><?= $user['status'] ?></p>
									</div>
								</div>
								<div class="col-md-4 pr-1">
									<div class="form-group">
										<label for="exampleInputEmail1">Agama</label>
										<p class="profile-list"><?= $user['agama'] ?></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Alamat</label>
										<p class="profile-list"><?= $user['alamat'] ?></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 pr-1">
									<div class="form-group text-warning">
										<label>Negara</label>
										<p class="profile-list"><?= $user['negara'] ?></p>
									</div>
								</div>
								<div class="col-md-4 pr-1">
									<div class="form-group text-warning">
										<label>No Hp/Telp</label>
										<p class="profile-list"><?= $user['no_hp'] ?></p>
									</div>
								</div>
								<div class="col-md-4 pr-1">
									<div class="form-group text-warning">
										<label>Kode Pos</label>
										<p class="profile-list"><?= $user['kode_pos'] ?></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Deskripsi</label>
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
