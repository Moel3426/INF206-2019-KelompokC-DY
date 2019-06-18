<!-- content -->
<link href="<?php echo base_url() ?>assets/css/profil.css" rel="stylesheet" />
<div class="container-fluid p-5 mt-5">
	<div class="user-profle">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header text-primary">
						<h5 class="title">Edit Profile</h5>
					</div>
					<div class="card-body">
						<form class="p-2" method="post" action="<?= base_url('home/edit_profile') ?>" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-5 pr-1">
									<div class="form-group">
										<h6>ID Kapal</h6>
										<input type="text" class="form-control" disabled="" placeholder="Company" value="<?= $user['id_kapal'] ?>">
									</div>
								</div>
								<div class="col-md-3  pr-1">
									<div class="form-group">
										<h6>Nama</h6>
										<input type="text" name="nama" class="form-control" placeholder="Username" required>
									</div>
								</div>
								<div class="col-md-4 pr-1">
									<div class="form-group">
										<h6 for="exampleInputEmail1">Email</h6>
										<input name="email" type="email" class="form-control" value="<?= $user['email'] ?>" placeholder="Email" readonly>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-5 pr-1">
									<div class="form-group">
										<h6>Status</h6>
										<input type="text" name="status" class="form-control" placeholder="Status">
									</div>
								</div>
								<div class="col-md-3 pr-1">
									<div class="form-group">
										<h6>Agama</h6>
										<input type="text" name="agama" class="form-control" placeholder="Agama" required>
									</div>
								</div>
								<div class="col-md-4 pr-1">
									<div class="form-group">
										<h6>No HP/Telp</h6>
										<input type="number" name="no_hp" class="form-control" placeholder="No HP/Telp" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 pr-1">
									<div class="form-group">
										<h6>Password</h6>
										<input type="password" name="password" class="form-control" placeholder="Password" required>
									</div>
								</div>
								<div class="col-md-6 pr-1">
									<div class="form-group">
										<h6>Confirm Password</h6>
										<input type="password" name="password1" class="form-control" placeholder="Password" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 pr-1">
									<div class="form-group">
										<h6>Alamat</h6>
										<input type="text" name="alamat" class="form-control" placeholder="Home Address" value="<?= $user['alamat'] ?>" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 pr-1">
									<div class="form-group">
										<h6>Negara</h6>
										<input type="text" class="form-control" name="negara" placeholder="Negara" value="<?= $user['negara'] ?>">
									</div>
								</div>
								<div class="col-md-6 pr-1">
									<div class="form-group">
										<h6>Kode Pos</h6>
										<input type="number" class="form-control" name="kode_pos" placeholder="1234567" value="<?= $user['kode_pos'] ?>">
									</div>
								</div>
							</div>
							<div class="row col pr-1">
								<h6>Gambar Profil</h6><br>
							</div>
							<div class="row col pr-1">
								<div class="input-group form-control">
									<div class="custom-file">
										<input type="file" name="foto" ass="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<h6>Deskripsi</h6>
										<textarea rows="4" cols="80" class="form-control" name="deskripsi" placeholder="Ceritakan deskripsimu"></textarea>
									</div>
								</div>
							</div>
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
							<div class="form-group shadow-none ">
								<img class="avatar border-gray rounded-circle" src="<?php echo base_url('assets/profil/' . $user['gambar']) ?>" alt="...">
								<h5 class="title text-primary"><?= $user['nama'] ?></h5>
							</div>
							<div>
								<button type="submit" class="btn btn-success">Simpan</button>
								<a href="<?php echo base_url('home/cek_profile') ?>" class="btn btn-danger">Batal</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>
</div>
<!-- /content -->