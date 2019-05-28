
<!-- content -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="<?php echo base_url() ?>assets/css/profil.css" rel="stylesheet" />
	<div class="container-fluid p-5 mt-5">
		<div class="table-wrapper shadow-lg">
			<div class="table-title">
				<div class="row ">
					<div class="col-sm-6">
						<h2>DAFTAR <b>ANGGOTA</b></h2>
						<?php echo $this->session->userdata('email');?>
					</div>
					<div class="col-sm-6">
						<a href="#tambahAnggota" class="btn btn-success" data-toggle="modal"><i
								class="material-icons">&#xE147;</i> <span>Tambah Anggota</span></a>
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
						<th>ID</th>
						<th>Foto</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Alamat</th>
						<th>No.Hp/Telp</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
							$no = 1;
							foreach($data->result() as $result){ 
					?>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td><?php echo $no ?></td>
						<td href="#cekAnggota" class="view" data-toggle="modal"><img class="gambar"
								src="<?php echo base_url() ?>assets/img/default-avatar.png" alt="" rel="tooltip"
								title="Klik di  sini untuk melihat profil" data-placement="top" /></td>
						<td><?php echo $result->nama ?></td>
						<td><?php echo $result->email ?></td>
						<td><?php echo $result->alamat ?></td>
						<td><?php echo $result->no_hp ?></td>
						<td>
							<a href="#editAnggota" class="edit" data-toggle="modal"><i class="material-icons"
									data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#hapusAnggota" class="delete" data-toggle="modal"><i class="material-icons"
									data-toggle="tooltip" title="Hapus">&#xE872;</i></a>

						</td>
					</tr>
					<?php $no++; } ?>
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
									<form class="p-2" method = "post" action = "">
										<div class="row">
										<div class="col-md-5 pr-1">
												<div class="form-group">
													<h6>ID</h6>
													<input type="text" class="form-control" name = "id_member" value="<?php echo $this->session->userdata('id')?> Id" disabled>
												</div>
											</div>
											<div class="col-md-3 pr-1">
												<div class="form-group">
													<h6>Nama</h6>
													<input type="text" class="form-control" name = "nama" placeholder="Nama" required>
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group">
													<h6>Agama</h6>
													<input type="text" class="form-control" name = "agama" placeholder="Agama"
														required>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-5 pr-1">
												<div class="form-group ">
													<h6>Status</h6>
													<input type="text" class="form-control" name = "status" placeholder="Status"
														required>
												</div>
											</div>
											<div class="col-md-3 pr-1">
												<div class="form-group">
													<h6 for="exampleInputEmail1">Email</h6>
													<input type="email" class="form-control" name = "email" placeholder="Email"
														required>
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group">
													<h6>No Hp /Telp</h6>
													<input type="number" class="form-control" name = "no_hp" placeholder="NoHp/Telp">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12 pr-1">
												<div class="form-group">
													<h6>Alamat</h6>
													<input type="text" class="form-control" name = "alamat" placeholder="Home Address"required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 pr-1">
												<div class="form-group text-warning">
													<h6>Negara</h6>
													<input type="text" class="form-control" name = "negara" placeholder="City">
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group text-warning">
													<h6>Kota/Kabupaten</h6>
													<input type="text" class="form-control" name = "kota" placeholder="Country">
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group text-warning">
													<h6>Kode Pos</h6>
													<input type="number" class="form-control" name = "kodepos" placeholder="1234567">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<h6>Deskripsi</h6>
													<textarea rows="4" cols="80" class="form-control" name = "deskripsi"
														placeholder="Ceritakan deskripsimu"></textarea>
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
										<div class="form-group shadow-none " rel="tooltip"
											title="Klik di  sini untuk mengganti foto profil" data-placement="top">
											<input type="file"><img type="file"
												class="avatar border-gray rounded-circle" name = "foto"
												src="<?php echo base_url() ?>assets/img/default-avatar.png" alt="...">
											<h5 class="title text-primary">Maulana Ihsan Ahmad</h5>
										</div>
										<a href="#">
											<button type="submit" name = "simpan" class="btn btn-success">Simpan</button>
											<button class="btn btn-danger" data-dismiss="modal"
												aria-hidden="true">Batal</button>
										</a>
									</div>
								</div>
							</div>
						</div>
						</form>
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
									<h5 class="title">Edit Anggota</h5>
								</div>
								<div class="card-body">
									<form class="p-2">
										<div class="row">
											<div class="col-md-5 pr-1">
												<div class="form-group ">
													<h6>ID</h6>
													<input type="text" class="form-control" disabled=""
														placeholder="Company"
														value="Nanti isinya sesuai yang diinputnya pas daftar">
												</div>
											</div>
											<div class="col-md-6 pr-1">
												<div class="form-group">
													<h6>Nama</h6>
													<input type="text" class="form-control" placeholder="Nama" required>
												</div>
											</div>
											<div class="col-md-6 pr-1">
												<div class="form-group">
													<h6>Agama</h6>
													<input type="text" class="form-control" placeholder="Agama"
														required>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-5 pr-1">
												<div class="form-group ">
													<h6>Status</h6>
													<input type="text" class="form-control" placeholder="Status"
														required>
												</div>
											</div>
											<div class="col-md-3 pr-1">
												<div class="form-group">
													<h6 for="exampleInputEmail1">Email</h6>
													<input type="email" class="form-control" placeholder="Email"
														required>
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group">
													<h6>No Hp/Telp</h6>
													<input type="number" class="form-control" placeholder="NoHp/Telp">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12 pr-1">
												<div class="form-group">
													<h6>Alamat</h6>
													<input type="text" class="form-control" placeholder="Home Address"
														value="Jalan Tengku Meulagu Tibang Kecamatan Syiah Kuala Banda Aceh"
														required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 pr-1">
												<div class="form-group text-warning">
													<h6>Negara</h6>
													<input type="text" class="form-control" placeholder="City"
														value="Indonesia">
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group text-warning">
													<h6>Kota/Kabupaten</h6>
													<input type="text" class="form-control" placeholder="Country"
														value="Banda Aceh">
												</div>
											</div>
											<div class="col-md-4 pr-1">
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
													<textarea rows="4" cols="80" class="form-control"
														placeholder="Ceritakan deskripsimu"
														value="Mike">Saya adalah nelayan yang sangat ceria dan baik hati</textarea>
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
										<div class="form-group shadow-none " rel="tooltip"
											title="Klik di  sini untuk mengganti foto profil" data-placement="top">
											<input type="file"><img type="file"
												class="avatar border-gray rounded-circle"
												src="<?php echo base_url() ?>assets/img/default-avatar.png" alt="...">
											<h5 class="title text-primary">Maulana Ihsan Ahmad</h5>
										</div>
										<a href="#">
											<button type="submit" class="btn btn-success">Simpan</button>
											<button class="btn btn-danger" data-dismiss="modal"
												aria-hidden="true">Batal</button>
										</a>
									</div>
								</div>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Cek Data Anggota Modal -->
	<div id="cekAnggota" class="modal fade">
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
													<p class="profile-list">Nanti isinya sesuai yang diinputnya pas
														daftar</p>
												</div>
											</div>
											<div class="col-md-3 pr-1">
												<div class="form-group">
													<h6>Nama</h6>
													<p class="profile-list">Maulana Ihsan Ahmad</p>
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group">
													<h6>Agama</h6>
													<p class="profile-list">Islam</p>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-5 pr-1">
												<div class="form-group ">
													<h6>Status</h6>
													<p class="profile-list">Kawin</p>
												</div>
											</div>
											<div class="col-md-3 pr-1">
												<div class="form-group">
													<h6 for="exampleInputEmail1">Email</h6>
													<p class="profile-list">MaulanaIhsan@gmail.com</p>
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group">
													<h6>No Hp/Telp</h6>
													<p class="profile-list">081260741115</p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 pr-1">
												<div class="form-group">
													<h6>Alamat</h6>
													<p class="profile-list">Jalan Tengku Meulagu Tibang Kecamatan Syiah
														Kuala
														Banda Aceh</p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 pr-1">
												<div class="form-group text-warning">
													<h6>Negara</h6>
													<p class="profile-list">Indonesia</p>
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group text-warning">
													<h6>Kota/Kabupaten</h6>
													<p class="profile-list">Aceh</p>
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group text-warning">
													<h6>Kode Pos</h6>
													<p class="profile-list">1234567</p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<h6>Deskripsi</h6>
													<p class="profile-list">Saya adalah nelayan yang bahagia baik hati
														dan rajin
														menabung.</p>
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

										<img class="avatar border-gray rounded-circle"
											src="<?php echo base_url() ?>assets/img/default-avatar.png" alt="...">
										<h5 class="title text-primary">Maulana Ihsan Ahmad</h5>

										<a href="<?php echo base_url() ?>index.php/landing/edit_profile">
											<button class="btn btn-danger" data-dismiss="modal"
												aria-hidden="true">Close</button>
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
	<!-- end of content -->