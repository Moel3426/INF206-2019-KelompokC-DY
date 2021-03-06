<!-- content -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="<?php echo base_url() ?>assets/css/profil.css" rel="stylesheet" />

<div class="container-fluid p-5 mt-5" style="min-height:100vh;">
	<!--untuk memnampilkan flashdata-->
	<?php echo $this->session->flashdata('message'); ?>
	<div class="table-wrapper shadow-lg">
		<div class="table-title">
			<div class="row ">
				<div class="col-sm-6">
					<h2>DAFTAR <b>ANGGOTA</b></h2>
				</div>
				<div class="col-sm-6">
					<a class="btn btn-success" data-toggle="modal" data-target="#tambahAnggota"><i class="material-icons">&#xE147;</i> <span>Tambah Anggota</span></a>
					<a class="btn btn-primary" href="<?php echo base_url('member/print') ?>"><i class="material-icons">&#xe8ad;</i> <span>Cetak Data</span></a>
				</div>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Foto</th>
						<th>Nama</th>
						<th>Email</th>
						<th>No.Hp/Telp</th>
						<th>Aksi</th>
					</tr>
					<?php
					$id = 1;
					foreach ($tb_member as $mbr) : ?>
						<tr>
							<td><?php echo $id++ ?></td>
							<td data-target="#cekAnggota-<?php echo $mbr['id']; ?>" data-toggle="modal">
								<img class="avatar border-gray rounded-circle" src="<?php echo base_url("assets/foto/" . $mbr['foto']); ?>" width="50px" height="50px" data-toggle="tooltip" title="Klik di  sini untuk melihat profil" data-placement="top">
							</td>
							<td><?php echo $mbr['nama'];  ?></td>
							<td><?php echo $mbr['email']; ?></td>
							<td><?php echo $mbr['noHp']; ?></td>
							<td>
								<a href="#editAnggota-<?php echo $mbr['id']; ?>" data-toggle="modal" class="edit">
									<i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
								</a>
								<a href="#hapusAnggota-<?php echo $mbr['id']; ?>" data-toggle="modal" class="delete">
									<i class="material-icons" data-toggle="tooltip" title="Hapus">&#xE872;</i>
								</a>
							</td>
							<!-- <td onclick="javascript: return confirm('Anda yakin ingin menghapus?')">
																																												<?php echo anchor(
																																													'member/hapus/' . $mbr['id'],
																																													'<div  class="badge badge-danger">
                                    <i class="fa fa-trash"data-toggle="tooltip" 
                                    title="Hapus"></i>
								</div>'
																																												) ?>
																																											</td> -->
						</tr>
					<?php endforeach; ?>
				</thead>
			</table>
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
								<form class="p-2" method="post" action="<?= base_url('member/tambah_aksi') ?>" enctype="multipart/form-data">
									<div class=" row">
										<div class="col-md-5 pr-1">
											<div class="form-group ">
												<h6>ID Bos Kapal</h6>
												<input type="text" name="id" class="form-control" readonly value="<?php echo $user['id']; ?>">
											</div>
										</div>
										<div class="col-md-3 pr-1">
											<div class="form-group">
												<h6>Nama</h6>
												<input type="text" name="nama" class="form-control" placeholder="Nama">
												<small class="text-danger"><?= form_error('nama'); ?></small>
											</div>
										</div>
										<div class="col-md-4 pr-1">
											<div class="form-group">
												<h6>Agama</h6>
												<input type="text" name="agama" class="form-control" placeholder="Agama">
												<small class="text-danger"><?= form_error('agama'); ?></small>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-5 pr-1">
											<div class="form-group ">
												<h6>Status</h6>
												<input type="text" name="status" class="form-control" placeholder="Status">
												<small class="text-danger"><?= form_error('status'); ?></small>
											</div>
										</div>
										<div class="col-md-3 pr-1">
											<div class="form-group">
												<h6 for="exampleInputEmail1">Email</h6>
												<input type="email" name="email" class="form-control" placeholder="Email">
												<small class="text-danger"><?= form_error('email'); ?></small>
											</div>
										</div>
										<div class="col-md-4 pr-1">
											<div class="form-group">
												<h6>No Hp /Telp</h6>
												<input type="number" name="noHp" class="form-control" placeholder="NoHp/Telp">
												<small class="text-danger"><?= form_error('noHp'); ?></small>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12 pr-1">
											<div class="form-group">
												<h6>Alamat</h6>
												<input type="text" name="alamat" class="form-control" placeholder="Alamat">
												<small class="text-danger"><?= form_error('alamat'); ?></small>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4 pr-1">
											<div class="form-group">
												<h6>Negara</h6>
												<input type="text" name="negara" class="form-control" placeholder="Negara">
												<small class="text-danger"><?= form_error('negara'); ?></small>
											</div>
										</div>
										<div class="col-md-4 pr-1">
											<div class="form-group">
												<h6>Kota/Kabupaten</h6>
												<input type="text" name="kotakabupaten" class="form-control" placeholder="Kota/kabupaten">
												<small class="text-danger"><?= form_error('kotakabupaten'); ?></small>
											</div>
										</div>
										<div class="col-md-4 pr-1">
											<div class="form-group">
												<h6>Kode Pos</h6>
												<input type="number" name="kodepos" class="form-control" placeholder="Kode pos(5 digit)">
												<small class="text-danger"><?= form_error('kodepos'); ?></small>
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
												<textarea rows="4" cols="80" name="deskripsi" class="form-control" placeholder="Ceritakan deskripsimu"></textarea>
												<small class="text-danger"><?= form_error('deskripsi'); ?></small>
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
									<div class="form-group shadow-none " data-placement="top">
										<img class="avatar border-gray rounded-circle" src="<?php echo base_url('assets/profil/default-avatar.png') ?>" alt="...">
										<h6 class="title text-primary mb-3">---</h6>
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
<?php foreach ($tb_member as $mbr) { ?>
	<div id="editAnggota-<?php echo $mbr['id']; ?>" class="modal fade">
		<div class="modal-dialog ">
			<div class="modal-content">
				<div class="user-profle p-3">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header pb-4 pt-4 text-info">
									<h5 class="title">Edit Profil</h5>
								</div>
								<div class="card-body">
									<form class="p-2" enctype="multipart/form-data" action="<?php echo base_url() . 'member/update'; ?>" method="post">
										<div class="row">
											<div class="col-md-5 ">
												<div class="form-group ">
													<h6>ID</h6>
													<input type="text" class="form-control" value="<?php echo $mbr['id']; ?>" readonly name="id" required>
												</div>
											</div>
											<div class="col-md-3 pr-1">
												<div class="form-group">
													<h6>Nama</h6>
													<input type="text" class="form-control" value="<?php echo $mbr['nama']; ?>" placeholder="Nama" name="nama" required>
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group">
													<h6>Agama</h6>
													<input type="text" class="form-control" placeholder="Agama" value="<?php echo $mbr['agama']; ?>" name="agama" required>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-5 pr-1">
												<div class="form-group ">
													<h6>Status</h6>
													<input type="text" class="form-control" placeholder="Status" value="<?php echo $mbr['status']; ?>" name="status" required>
												</div>
											</div>
											<div class="col-md-3 pr-1">
												<div class="form-group">
													<h6 for="exampleInputEmail1">Email</h6>
													<input type="email" class="form-control" placeholder="Email" value="<?php echo $mbr['email']; ?>" name="email" required>
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group">
													<h6>No Hp/Telp</h6>
													<input type="number" class="form-control" placeholder="NoHp/Telp" value="<?php echo $mbr['noHp']; ?>" name="noHp">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12 pr-1">
												<div class="form-group">
													<h6>Alamat</h6>
													<input type="text" class="form-control" placeholder="Home Address" value="<?php echo $mbr['alamat']; ?>" name="alamat" required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 pr-1">
												<div class="form-group ">
													<h6>Negara</h6>
													<input type="text" class="form-control" placeholder="City" value="<?php echo $mbr['negara']; ?>" name="negara">
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group">
													<h6>Kota/Kabupaten</h6>
													<input type="text" class="form-control" placeholder="Country" value="<?php echo $mbr['kotakabupaten']; ?>" name="kotakabupaten">
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group">
													<h6>Kode Pos</h6>
													<input type="number" class="form-control" placeholder="1234567" value="<?php echo $mbr['kodepos']; ?>" name="kodepos">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<h6>Deskripsi</h6>
													<textarea rows="4" cols="80" class="form-control" value="<?php echo $mbr['deskripsi']; ?>" name="deskripsi"></textarea>
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
										<input class="d-none" type="file" name="foto" id="image-<?= $mbr['id'] ?>">
										<label for="image-<?= $mbr['id'] ?>">
											<img class="avatar border-gray rounded-circle" src="<?php echo base_url("assets/foto/" . $mbr['foto']); ?>" data-toggle="tooltip" title="Klik di sini edit foto" width="100px" height="100px">
										</label>
										<h5 class="title text-primary"><?php echo $mbr['nama']; ?></h5>

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
<?php foreach ($tb_member as $mbr) { ?>
	<div id="cekAnggota-<?php echo $mbr['id']; ?>" class="modal fade">
		<div class="modal-dialog ">
			<div class="modal-content">
				<div class="user-profle p-3">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header text-info">
									<h5 class="title">Profil Saya</h5>
								</div>
								<div class="card-body">
									<form>
										<div class="row">
											<div class="col-md-4 ">
												<div class="form-group ">
													<h6>ID</h6>
													<p><?php echo $mbr['id']; ?></p>
												</div>
											</div>
											<div class="col-md-4 ">
												<div class="form-group">
													<h6>Nama</h6>
													<p><?php echo $mbr['nama']; ?></p>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<h6>Agama</h6>
													<p><?php echo $mbr['agama']; ?></p>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-4 pr-1">
												<div class="form-group ">
													<h6>Status</h6>
													<p><?php echo $mbr['status']; ?></p>
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group">
													<h6 for="exampleInputEmail1">Email</h6>
													<p><?php echo $mbr['email']; ?></p>
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group">
													<h6>No Hp/Telp</h6>
													<p><?php echo $mbr['noHp']; ?></p>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12 pr-1">
												<div class="form-group">
													<h6>Alamat</h6>
													<p><?php echo $mbr['alamat']; ?></p>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-4 pr-1">
												<div class="form-group">
													<h6>Negara</h6>
													<p><?php echo $mbr['negara']; ?></p>
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group">
													<h6>Kota/Kabupaten</h6>
													<p><?php echo $mbr['kotakabupaten']; ?></p>
												</div>
											</div>
											<div class="col-md-4 pr-1">
												<div class="form-group">
													<h6>Kode Pos</h6>
													<p><?php echo $mbr['kodepos']; ?></p>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<h6>Deskripsi</h6>
													<p><?php echo $mbr['deskripsi']; ?></p>
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

										<img class="avatar border-gray rounded-circle" src="<?php echo base_url("assets/foto/" . $mbr['foto']); ?>" width="100px" height="100px">
										<h5 class="title text-primary"><?php echo $mbr['nama']; ?></h5>

										<a href="<?php echo base_url() ?>index.php/landing/edit_profile">
											<a class="btn btn-primary" href="<?php echo base_url('member/print1') ?>"><span>Cetak Data</span></a>
											<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tutup</button>
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

<!--   Core JS Files   -->

<?php if (validation_errors() != false) : ?>
	<script src="<?php echo base_url() ?>assets/js/core/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>assets/js/core/popper.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
	<script>
		$("#tambahAnggota").modal('show');
	</script>
<?php endif; ?>


<!-- Hapus Data Anggota Modal-->
<?php
$id = 1;
foreach ($tb_member as $mbr) : ?>

	<div id="hapusAnggota-<?= $mbr['id']; ?>" class="modal fade">
		<div class="modal-dialog" style="max-width:400px;">
			<div class="modal-content">
				<form action="<?= base_url('member/hapus/' . $mbr['id']) ?>" method="get">
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

<?php endforeach; ?>