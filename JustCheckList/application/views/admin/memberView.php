<!-- content -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="<?php echo base_url() ?>assets/css/profil.css" rel="stylesheet" />
<div class="container-fluid p-5 mt-5" style="min-height:100vh;">
	<div class="table-wrapper shadow-lg">
		<div class="table-title">
			<div class="row ">
				<div class="col-sm-6">
					<h2>DAFTAR <b>ANGGOTA</b></h2>
				</div>

			</div>
		</div>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Foto</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>No.Hp/Telp</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$id = 1;
				foreach ($lihatanggota->result() as $lihat) : ?>
					<tr>
						<td><?php echo $id++ ?></td>
						<td><a href="#cekAnggota-<?= $lihat->id ?>" class="view" data-toggle="modal" rel="tooltip" title="Klik di  sini untuk melihat profil" data-placement="top"><img class="gambar" src="<?php echo base_url('assets/foto/' . $lihat->foto) ?>" alt="" /></td>
						</a>
						<td><?= $lihat->nama ?></td>
						<td><?= $lihat->email ?></td>
						<td><?= $lihat->alamat ?></td>
						<td><?= $lihat->noHp ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
<!-- Tambah Data Anggota Modal -->
<div id="tambahAnggota" class="modal fade">
	<div class="modal-dialog ">
		<div class="modal-content">
			<div class="user-profle p-3">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<div class="row">
					<div class="col-md-8">
						<div class="card">
							<div class="card-header pb-4 pt-4 text-info">
								<h5 class="title">Tambah Anggota</h5>
							</div>
							<div class="card-body">
								<form>
									<div class="row">
										<div class="col-md-5 pr-1">
											<div class="form-group ">
												<h6>ID Kapal</h6>
												<input type="text" class="form-control" disabled="" placeholder="Company" value="Nanti isinya sesuai yang diinputnya pas daftar">
											</div>
										</div>
										<div class="col-md-3 px-1">
											<div class="form-group">
												<h6>Nama</h6>
												<input type="text" class="form-control" placeholder="Nama" required>
											</div>
										</div>
										<div class="col-md-4 pl-1">
											<div class="form-group">
												<h6>Agama</h6>
												<input type="text" class="form-control" placeholder="Agama" required>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-5 pr-1">
											<div class="form-group ">
												<h6>Status</h6>
												<input type="text" class="form-control" placeholder="Status" required>
											</div>
										</div>
										<div class="col-md-3 px-1">
											<div class="form-group">
												<h6 for="exampleInputEmail1">Email</h6>
												<input type="email" class="form-control" placeholder="Email" required>
											</div>
										</div>
										<div class="col-md-4 pl-1">
											<div class="form-group">
												<h6>NoHp/Telp</h6>
												<input type="number" class="form-control" placeholder="NoHp/Telp">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<h6>Alamat</h6>
												<input type="text" class="form-control" placeholder="Home Address" value="Jalan Tengku Meulagu Tibang Kecamatan Syiah Kuala Banda Aceh" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4 pr-1">
											<div class="form-group text-warning">
												<h6>Negara</h6>
												<input type="text" class="form-control" placeholder="City" value="Indonesia">
											</div>
										</div>
										<div class="col-md-4 px-1">
											<div class="form-group text-warning">
												<h6>Kota/Kabupaten</h6>
												<input type="text" class="form-control" placeholder="Country" value="Banda Aceh">
											</div>
										</div>
										<div class="col-md-4 pl-1">
											<div class="form-group text-warning">
												<h6>Kode Pos</h6>
												<input type="number" class="form-control" placeholder="1234567">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<h6>Deskripsi</h6>
												<textarea rows="4" cols="80" class="form-control" placeholder="Ceritakan deskripsimu" value="Mike">Saya adalah nelayan yang sangat ceria dan baik hati</textarea>
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
									<div class="form-group shadow-none " rel="tooltip" title="Klik di  sini untuk mengganti foto profil" data-placement="top">
										<input type="file"><img type="file" class="avatar border-gray rounded-circle" src="<?php echo base_url() ?>assets/img/default-avatar.png" alt="...">
										<h5 class="title text-primary">Maulana Ihsan Ahmad</h5>
									</div>
									<a href="#">
										<button type="submit" class="btn btn-success">Simpan</button>
										<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Edit Data Anggota Modal -->
<div id="editAnggota" class="modal fade">
	<div class="modal-dialog ">
		<div class="modal-content">
			<div class="user-profle p-3">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
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
												<h6>ID Kapal</h6>
												<input type="text" class="form-control" disabled="" placeholder="Company" value="Nanti isinya sesuai yang diinputnya pas daftar">
											</div>
										</div>
										<div class="col-md-3 px-1">
											<div class="form-group">
												<h6>Nama</h6>
												<input type="text" class="form-control" placeholder="Nama" required>
											</div>
										</div>
										<div class="col-md-4 pl-1">
											<div class="form-group">
												<h6>Agama</h6>
												<input type="text" class="form-control" placeholder="Agama" required>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-5 pr-1">
											<div class="form-group ">
												<h6>Status</h6>
												<input type="text" class="form-control" placeholder="Status" required>
											</div>
										</div>
										<div class="col-md-3 px-1">
											<div class="form-group">
												<h6 for="exampleInputEmail1">Email</h6>
												<input type="email" class="form-control" placeholder="Email" required>
											</div>
										</div>
										<div class="col-md-4 pl-1">
											<div class="form-group">
												<h6>NoHp/Telp</h6>
												<input type="number" class="form-control" placeholder="NoHp/Telp">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<h6>Alamat</h6>
												<input type="text" class="form-control" placeholder="Home Address" value="Jalan Tengku Meulagu Tibang Kecamatan Syiah Kuala Banda Aceh" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4 pr-1">
											<div class="form-group text-warning">
												<h6>Negara</h6>
												<input type="text" class="form-control" placeholder="City" value="Indonesia">
											</div>
										</div>
										<div class="col-md-4 px-1">
											<div class="form-group text-warning">
												<h6>Kota/Kabupaten</h6>
												<input type="text" class="form-control" placeholder="Country" value="Banda Aceh">
											</div>
										</div>
										<div class="col-md-4 pl-1">
											<div class="form-group text-warning">
												<h6>Kode Pos</h6>
												<input type="number" class="form-control" placeholder="1234567">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<h6>Deskripsi</h6>
												<textarea rows="4" cols="80" class="form-control" placeholder="Ceritakan deskripsimu" value="Mike">Saya adalah nelayan yang sangat ceria dan baik hati</textarea>
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
									<div class="form-group shadow-none " rel="tooltip" title="Klik di  sini untuk mengganti foto profil" data-placement="top">
										<input type="file"><img type="file" class="avatar border-gray rounded-circle" src="<?php echo base_url() ?>assets/img/default-avatar.png" alt="...">
										<h5 class="title text-primary">Maulana Ihsan Ahmad</h5>
									</div>
									<a href="#">
										<button type="submit" class="btn btn-success">Simpan</button>
										<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Cek Data Anggota Modal -->
<?php foreach ($lihatanggota->result() as $lihat) : ?>
	<div id="cekAnggota-<?= $lihat->id ?>" class="modal fade">
		<div class="modal-dialog ">
			<div class="modal-content">
				<div class="user-profle p-3">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header pb-4 pt-4 text-info">
									<h5 class="title">My Profile</h5>
								</div>
								<div class="card-body">
									<form class="p-2">
										<div class="row">
											<div class="col-md-5 pr-1">
												<div class="form-group ">
													<h6>ID</h6>
													<p class="profile-list"><?= $lihat->id ?></p>
												</div>
											</div>
											<div class="col-md-3 pr-1">
												<div class="form-group">
													<h6>Nama</h6>
													<p class="profile-list"><?= $lihat->nama ?></p>
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group">
													<h6>Agama</h6>
													<p class="profile-list"><?= $lihat->agama ?></p>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-5 pr-1">
												<div class="form-group ">
													<h6>Status</h6>
													<p class="profile-list"><?= $lihat->status ?></p>
												</div>
											</div>
											<div class="col-md-3 pr-1">
												<div class="form-group">
													<h6 for="exampleInputEmail1">Email</h6>
													<p class="profile-list"><?= $lihat->email ?></p>
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group">
													<h6>No Hp/Telp</h6>
													<p class="profile-list"><?= $lihat->noHp ?></p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 pr-1">
												<div class="form-group">
													<h6>Alamat</h6>
													<p class="profile-list"><?= $lihat->alamat ?></p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 pr-1">
												<div class="form-group text-warning">
													<h6>Negara</h6>
													<p class="profile-list"><?= $lihat->negara ?></p>
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group text-warning">
													<h6>Kota/Kabupaten</h6>
													<p class="profile-list"><?= $lihat->kotakabupaten ?></p>
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group text-warning">
													<h6>Kode Pos</h6>
													<p class="profile-list"><?= $lihat->kodepos ?></p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<h6>Deskripsi</h6>
													<p class="profile-list"><?= $lihat->deskripsi ?></p>
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

										<img class="avatar border-gray rounded-circle" src="<?= base_url('assets/foto/' . $lihat->foto) ?>" alt="...">
										<h5 class="title text-primary"><?= $lihat->nama ?></h5>

										<a href="<?php echo base_url() ?>index.php/landing/edit_profile">
											<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>
<!-- Hapus Data Anggota Modal-->
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