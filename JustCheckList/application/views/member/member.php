<<<<<<< HEAD

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
=======
<!-- content -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="<?php echo base_url() ?>assets/css/profil.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>assets/js/core/jquery.min.js" rel="stylesheet" />
<div class="container-fluid p-5 mt-5">
	<div class="table-wrapper shadow-lg">
		<div class="table-title">
			<div class="row ">
				<div class="col-sm-6">
					<h2>DAFTAR <b>ANGGOTA</b></h2>
				</div>
				<div class="col-sm-6">
					<a class="btn btn-success" data-toggle="modal" data-target="#tambahAnggota"><i class="material-icons">&#xE147;</i> <span>Tambah Anggota</span></a>
					<a href="#hapusAnggota" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Hapus</span></a>
				</div>
			</div>
		</div>
		<table class="table table-striped table-hover">
			<thead>
				<thead>
					<tr>
						<th>ID</th>
						<th>Foto</th>
						<th>Nama</th>
						<th>Email</th>
						<th>No.Hp/Telp</th>
						<th colspan="3">Aksi</th>
					</tr>
					<?php
					$id = 1;
					foreach ($tb_member as $mbr) : ?>
						<tr>
							<td><?php echo $id++ ?></td>
							<td>
								<img class="avatar border-gray rounded-circle" src="<?php echo base_url("assets/foto/" . $mbr['foto']); ?>" width="50px" height="50px" data-toggle="tooltip" title="Klik di  sini untuk melihat profil" data-target="#cekAnggota">
							</td>
							<td><?php echo $mbr['nama'];  ?></td>
							<td><?php echo $mbr['email']; ?></td>
							<td><?php echo $mbr['noHp']; ?></td>
							<td>
								<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#cekAnggota-<?php echo $mbr['id']; ?>">
									<i class="fa fa-search" data-toggle="tooltip" title="Klik disini untuk melihat Profil"></i>
								</button>
							</td>
							<td>
								<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editAnggota-<?php echo $mbr['id']; ?>">
									<i class="fa fa-edit" data-toggle="tooltip" title="Klik disini untuk melihat Profil"></i>
								</button>
							</td>
							<td onclick="javascript: return confirm('Anda yakin ingin menghapus?')">
								<?php echo anchor(
									'member/hapus/' . $mbr['id'],
									'<div  class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"data-toggle="tooltip" 
                                    title="Klik disini untuk menghapus data"></i>
								</div>'
								) ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</thead>
			</thead>
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
								<form class="p-2" method="post" action="<?= base_url('member/tambah_aksi') ?>" enctype="multipart/form-data">

									<div class=" row">
										<div class="col-md-5 pr-1">
											<div class="form-group ">
												<h6>ID </h6>
												<input type="text" name="id" class="form-control" readonly value="<?php echo $users['id']; ?>">
											</div>
										</div>
										<div class="col-md-3 pr-1">
											<div class="form-group">
												<h6>Nama</h6>
												<input type="text" name="nama" class="form-control" placeholder="Nama" required>
											</div>
										</div>
										<div class="col-md-4 pr-1">
											<div class="form-group">
												<h6>Agama</h6>
												<input type="text" name="agama" class="form-control" placeholder="Agama" required>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-5 pr-1">
											<div class="form-group ">
												<h6>Status</h6>
												<input type="text" name="status" class="form-control" placeholder="Status" required>
											</div>
										</div>
										<div class="col-md-3 pr-1">
											<div class="form-group">
												<h6 for="exampleInputEmail1">Email</h6>
												<input type="email" name="email" class="form-control" placeholder="Email" required>
											</div>
										</div>
										<div class="col-md-4 pr-1">
											<div class="form-group">
												<h6>No Hp /Telp</h6>
												<input type="number" name="noHp" class="form-control" placeholder="NoHp/Telp">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12 pr-1">
											<div class="form-group">
												<h6>Alamat</h6>
												<input type="text" name="alamat" class="form-control" placeholder="Home Address" value="Jalan Tengku Meulagu Tibang Kecamatan Syiah Kuala Banda Aceh" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4 pr-1">
											<div class="form-group text-warning">
												<h6>Negara</h6>
												<input type="text" name="negara" class="form-control" placeholder="City" value="Indonesia">
											</div>
										</div>
										<div class="col-md-4 pr-1">
											<div class="form-group text-warning">
												<h6>Kota/Kabupaten</h6>
												<input type="text" name="kotakabupaten" class="form-control" placeholder="Country" value="Banda Aceh">
											</div>
										</div>
										<div class="col-md-4 pr-1">
											<div class="form-group text-warning">
												<h6>Kode Pos</h6>
												<input type="number" name="kodepos" class="form-control" placeholder="1234567">
											</div>
										</div>
									</div>
									<div class="row col pr-1">
										<h6>Foto</h6><br>
									</div>
									<div class="row col pr-1">
										<div class="input-group">
											<div class="custom-file">
												<input type="file" name="foto" ass="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
												<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<h6>Deskripsi</h6>
												<textarea rows="4" cols="80" name="deskripsi" class="form-control" placeholder="Ceritakan deskripsimu" value="Mike">Saya adalah nelayan yang sangat ceria dan baik hati</textarea>
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
									<div class="form-group shadow-none " rel="tooltip" title="Klik di  sini untuk mengganti foto profil" data-placement="top">
										<input type="file"><img type="file" class="avatar border-gray rounded-circle" src="<?php echo base_url() ?>assets/img/default-avatar.png" alt="...">
										<h5 class="title text-primary">Maulana Ihsan Ahmad</h5>
									</div>
									<button type="submit" class="btn btn-success">Simpan</button>
									<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
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
<?php foreach ($member as $mbr) { ?>
	<div id="editAnggota-<?php echo $mbr->id ?>" class="modal fade">
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
									<form class="p-2" action="<?php echo base_url() . 'member/update'; ?>" method="post">
										<div class="row">
											<div class="col-md-3 pr-1">
												<div class="form-group">
													<h6>Nama</h6>
													<input type="hidden" class="form-control" value="<?php echo $mbr->id ?>" placeholder="Nama" name="id" required>
													<input type="text" class="form-control" value="<?php echo $mbr->nama ?>" placeholder="Nama" name="nama" required>
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group">
													<h6>Agama</h6>
													<input type="text" class="form-control" placeholder="Agama" value="<?php echo $mbr->agama ?>" name="agama" required>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-5 pr-1">
												<div class="form-group ">
													<h6>Status</h6>
													<input type="text" class="form-control" placeholder="Status" value="<?php echo $mbr->status ?>" name="status" required>
												</div>
											</div>
											<div class="col-md-3 pr-1">
												<div class="form-group">
													<h6 for="exampleInputEmail1">Email</h6>
													<input type="email" class="form-control" placeholder="Email" value="<?php echo $mbr->email ?>" name="email" required>
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group">
													<h6>No Hp/Telp</h6>
													<input type="number" class="form-control" placeholder="NoHp/Telp" value="<?php echo $mbr->noHp ?>" name="noHp">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12 pr-1">
												<div class="form-group">
													<h6>Alamat</h6>
													<input type="text" class="form-control" placeholder="Home Address" value="<?php echo $mbr->alamat ?>" name="alamat" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 pr-1">
												<div class="form-group text-warning">
													<h6>Negara</h6>
													<input type="text" class="form-control" placeholder="City" value="<?php echo $mbr->negara ?>" name="negara">
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group text-warning">
													<h6>Kota/Kabupaten</h6>
													<input type="text" class="form-control" placeholder="Country" value="<?php echo $mbr->kotakabupaten ?>" name="kotakabupaten">
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group text-warning">
													<h6>Kode Pos</h6>
													<input type="number" class="form-control" placeholder="1234567" value="<?php echo $mbr->kodepos ?>" name="kodepos">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<h6>Deskripsi</h6>
													<textarea rows="4" cols="80" class="form-control" placeholder="Ceritakan deskripsimu" value="<?php echo $mbr->deskripsi ?>" name="deskripsi"></textarea>
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

										<img class="avatar border-gray rounded-circle" src="<?php echo base_url("assets/foto/" . $mbr->foto) ?>" width="100px" height="100px">
										<h5 class="title text-primary"><?php echo $mbr->nama ?></h5>

										<a href="<?php echo base_url() ?>index.php/landing/edit_profile">
										</a>
										<button type="submit" class="btn btn-success">Simpan</button>
										<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
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
<?php } ?>
<!--/ editAnggota-->

<!-- Cek Data Anggota Modal -->
<?php foreach ($member as $mbr) { ?>
	<div id="cekAnggota-<?php echo $mbr->id ?>" class="modal fade">
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
										<table>
											<tr>
												<div class="row">
													<div class="col-md-5 pr-1">
														<div class="form-group ">
															<th>ID</th>
															<td><?php echo $mbr->id ?></td>
														</div>
													</div>
													<div class="col-md-3 pr-1">
														<div class="form-group">
															<th>Nama</th>
															<td><?php echo $mbr->nama ?></td>
														</div>
													</div>
													<div class="col-md-4 pr-1">
														<div class="form-group">
															<th>Agama</th>
															<td><?php echo $mbr->agama ?></td>
														</div>
													</div>
												</div>
											</tr>

											<tr>
												<div class="row">
													<div class="col-md-5 pr-1">
														<div class="form-group ">
															<th>Status</th>
															<td><?php echo $mbr->status ?></td>
														</div>
													</div>
													<div class="col-md-3 pr-1">
														<div class="form-group">
															<th for="exampleInputEmail1">Email</th>
															<td><?php echo $mbr->email ?></td>
														</div>
													</div>
													<div class="col-md-4 pr-1">
														<div class="form-group">
															<th>No Hp/Telp</th>
															<td><?php echo $mbr->noHp ?></td>
														</div>
													</div>
												</div>
											</tr>

											<tr>
												<div class="row">
													<div class="col-md-12 pr-1">
														<div class="form-group">
															<th>Alamat</th>
															<td><?php echo $mbr->alamat ?></td>
														</div>
													</div>
												</div>
											</tr>

											<tr>
												<div class="row">
													<div class="col-md-4 pr-1">
														<div class="form-group text-warning">
															<th>Negara</th>
															<td><?php echo $mbr->negara ?></td>
														</div>
													</div>
													<div class="col-md-4 pr-1">
														<div class="form-group text-warning">
															<th>Kota/Kabupaten</th>
															<td><?php echo $mbr->kotakabupaten ?></td>
														</div>
													</div>
													<div class="col-md-4 pr-1">
														<div class="form-group text-warning">
															<th>Kode Pos</th>
															<td><?php echo $mbr->kodepos ?></td>
														</div>
													</div>
												</div>
											</tr>

											<tr>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<th>Deskripsi</th>
															<td><?php echo $mbr->deskripsi ?></td>
														</div>
													</div>
												</div>
											</tr>
										</table>
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

										<img class="avatar border-gray rounded-circle" src="<?php echo base_url("assets/foto/" . $mbr->foto) ?>" width="100px" height="100px">
										<h5 class="title text-primary"><?php echo $mbr->nama ?></h5>

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
<?php } ?>
<!-- end of content -->
>>>>>>> atika
