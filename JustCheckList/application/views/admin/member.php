<!-- content -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="<?php echo base_url() ?>assets/css/profil.css" rel="stylesheet" />
	<div class="container-fluid p-5 mt-5">
		<div class="table-wrapper shadow-lg">
			<div class="table-title">
				<div class="row ">
					<div class="col-sm-6">
						<h2>DAFTAR <b>ANGGOTA</b></h2>
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
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>

						<td>1</td>
						<td href="#cekAnggota" class="view" data-toggle="modal"><img class="gambar"
								src="<?php echo base_url() ?>assets/img/default-avatar.png" alt="" rel="tooltip"
								title="Klik di  sini untuk melihat profil" data-placement="top" /></td>
						<td>Maulana Ihsan Ahmad</td>
						<td>maulanaihsanpress@gmail.com</td>
						<td>Tibang, Syiah Kuala Banda Aceh</td>
						<td>081264563223</td>
						<td> <a href="#hapusAnggota" class="delete" data-toggle="modal"><i class="material-icons"
									data-toggle="tooltip" title="Hapus">&#xE872;</i></a>
						</td>

					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox2" name="options[]" value="1">
								<label for="checkbox2"></label>
							</span>
						</td>
						<td>2</td>
						<td href="#cekAnggota" class="view" data-toggle="modal"><img class="gambar"
								src="<?php echo base_url() ?>assets/img/default-avatar.png" alt="" rel="tooltip"
								title="Klik di  sini untuk melihat profil" data-placement="top" /></td>
						<td>Dominique Perrier</td>
						<td>dominiqueperrier@mail.com</td>
						<td>Obere Str. 57, Berlin, Germany</td>
						<td>(313) 555-5735</td>
						<td> <a href="#hapusAnggota" class="delete" data-toggle="modal"><i class="material-icons"
									data-toggle="tooltip" title="Hapus">&#xE872;</i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox3" name="options[]" value="1">
								<label for="checkbox3"></label>
							</span>
						</td>
						<td>3</td>
						<td href="#cekAnggota" class="view" data-toggle="modal"><img class="gambar"
								src="<?php echo base_url() ?>assets/img/default-avatar.png" alt="" rel="tooltip"
								title="Klik di  sini untuk melihat profil" data-placement="top" /></td>
						<td>Maria Anders</td>
						<td>mariaanders@mail.com</td>
						<td>25, rue Lauriston, Paris, France</td>
						<td>(503) 555-9931</td>
						<td> <a href="#hapusAnggota" class="delete" data-toggle="modal"><i class="material-icons"
									data-toggle="tooltip" title="Hapus">&#xE872;</i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox4" name="options[]" value="1">
								<label for="checkbox4"></label>
							</span>
						</td>
						<td>4</td>
						<td href="#cekAnggota" class="view" data-toggle="modal"><img class="gambar"
								src="<?php echo base_url() ?>assets/img/default-avatar.png" alt="" rel="tooltip"
								title="Klik di  sini untuk melihat profil" data-placement="top" /></td>
						<td>Fran Wilson</td>
						<td>franwilson@mail.com</td>
						<td>C/ Araquil, 67, Madrid, Spain</td>
						<td>(204) 619-5731</td>
						<td> <a href="#hapusAnggota" class="delete" data-toggle="modal"><i class="material-icons"
									data-toggle="tooltip" title="Hapus">&#xE872;</i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox5" name="options[]" value="1">
								<label for="checkbox5"></label>
							</span>
						</td>
						<td>5</td>
						<td href="#cekAnggota" class="view" data-toggle="modal"><img class="gambar"
								src="<?php echo base_url() ?>assets/img/default-avatar.png" alt="" rel="tooltip"
								title="Klik di  sini untuk melihat profil" data-placement="top" /></td>
						<td>Martin Blank</td>
						<td>martinblank@mail.com</td>
						<td>Via Monte Bianco 34, Turin, Italy</td>
						<td>(480) 631-2097</td>
						<td> <a href="#hapusAnggota" class="delete" data-toggle="modal"><i class="material-icons"
									data-toggle="tooltip" title="Hapus">&#xE872;</i></a>

						</td>
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
													<input type="text" class="form-control" disabled=""
														placeholder="Company"
														value="Nanti isinya sesuai yang diinputnya pas daftar">
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
											<div class="col-md-3 px-1">
												<div class="form-group">
													<h6 for="exampleInputEmail1">Email</h6>
													<input type="email" class="form-control" placeholder="Email"
														required>
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
											<div class="col-md-4 px-1">
												<div class="form-group text-warning">
													<h6>Kota/Kabupaten</h6>
													<input type="text" class="form-control" placeholder="Country"
														value="Banda Aceh">
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
													<textarea rows="4" cols="80" class="form-control"
														placeholder="Ceritakan deskripsimu"
														value="Mike">Saya adalah nelayan yang sangat ceria dan baik hati</textarea>
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
									<form>
										<div class="row">
											<div class="col-md-5 pr-1">
												<div class="form-group ">
													<h6>ID Kapal</h6>
													<input type="text" class="form-control" disabled=""
														placeholder="Company"
														value="Nanti isinya sesuai yang diinputnya pas daftar">
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
											<div class="col-md-3 px-1">
												<div class="form-group">
													<h6 for="exampleInputEmail1">Email</h6>
													<input type="email" class="form-control" placeholder="Email"
														required>
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
											<div class="col-md-4 px-1">
												<div class="form-group text-warning">
													<h6>Kota/Kabupaten</h6>
													<input type="text" class="form-control" placeholder="Country"
														value="Banda Aceh">
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
													<textarea rows="4" cols="80" class="form-control"
														placeholder="Ceritakan deskripsimu"
														value="Mike">Saya adalah nelayan yang sangat ceria dan baik hati</textarea>
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
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--  Undang Anggota Modal -->
	<div id="undangAnggota" class="modal fade">
		<div class="modal-dialog" style="max-width:400px;">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Undang Anggota</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="col-md-12 p-1">
							<div class="form-group">
								<p>Cari Anggota</p>
								<input type="search" class="form-control" placeholder="Nama" required>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<input type="submit" class="btn btn-success" value="OK">
						<input type="button" class="btn btn-danger" data-dismiss="modal" value="Batal">
					</div>
				</form>
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
													<label>ID Kapal</label>
													<p class="profile-list">Nanti isinya sesuai yang diinputnya pas
														daftar</p>
												</div>
											</div>
											<div class="col-md-3 pr-1">
												<div class="form-group">
													<label>Nama</label>
													<p class="profile-list">Maulana Ihsan Ahmad</p>
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group">
													<label for="exampleInputEmail1">Email</label>
													<p class="profile-list">maulanaihsanpress@gmail.com</p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-5 pr-1">
												<div class="form-group">
													<label>Status</label>
													<p class="profile-list">Menikah</p>
												</div>
											</div>
											<div class="col-md-3 pr-1">
												<div class="form-group">
													<label>Agama</label>
													<p class="profile-list">Islam</p>
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group">
													<label>No HP/Telp</label>
													<p class="profile-list">081264563223</p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 pr-1">
												<div class="form-group">
													<label>Alamat</label>
													<p class="profile-list">Jalan Tengku Meulagu Tibang Kecamatan Syiah
														Kuala
														Banda Aceh</p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 pr-1">
												<div class="form-group text-warning">
													<label>Negara</label>
													<p class="profile-list">Indonesia</p>
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group text-warning">
													<label>Kota/Kabupaten</label>
													<p class="profile-list">Lampulo</p>
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group text-warning">
													<label>Kode Pos</label>
													<p class="profile-list">1234567</p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Deskripsi</label>
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
										<div>
											<a href="<?php echo base_url() ?>admin/memberView">
												<button class="btn btn-info">Lihat
													Anggota</button>
											</a>
											<a href="#"></a>
											<button class="btn btn-danger" data-dismiss="modal"
												aria-hidden="true">Tutup</button>
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
	<!--  Undang Anggota Modal -->
	<div id="undangAnggota" class="modal fade">
		<div class="modal-dialog" style="max-width:400px;">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h4 class="modal-title">Undang Anggota</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="col-md-12 p-1">
							<div class="form-group">
								<p>Cari Anggota</p>
								<input type="search" class="form-control" placeholder="Nama" required>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<input type="submit" class="btn btn-success" value="OK">
						<input type="button" class="btn btn-danger" data-dismiss="modal" value="Batal">
					</div>
				</form>
			</div>
		</div>
	</div>
<!-- /content -->