<!-- content -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<div class="container-fluid p-5 mt-5" style="min-height:100vh;">
	<div class="table-wrapper shadow-lg">
		<div class="table-title">
			<div class="row">
				<div class="col-sm-6">
					<h2>KONFIRMASI <b>JADWAL TIBA</b></h2>
				</div>
			</div>
		</div>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>ID Kapal</th>
					<th>Keberangkatan</th>
					<th>Tiba</th>
					<th>Anggota</th>
					<th>Status</th>
					<th>Aksi</th>
					<th>Waktu Konfirmasi</th>

				</tr>
			</thead>
			<tbody>
				<?php $i = 1;
				$id = 1;
				foreach ($keberangkatan->result() as $k) : ?>
					<?php if ($k->keterangan == '') : ?>
						<tr>
							<td><?php echo $id++ ?></td>
							<td>
								<?= date('d M Y', strtotime($k->keberangkatan)) ?>
							</td>
							<td>
								<?= date('d M Y', strtotime($k->tiba)) ?>
							</td>
							<td>
								<?php $data = json_decode($anggotaIkut[$i++]->anggota);
								foreach ($data as $id) : $anggota = $this->db->get_where('tb_member', ['id' => $id])->row(); ?>
									<img class="gambar" src="<?= base_url('assets/foto/' . $anggota->foto) ?>" alt="" />
								<?php endforeach; ?>
							</td>
							<?php if ($k->status == 'diterima') { ?>
								<td><a href="#" class="badge badge-success text-light"><?= $k->status ?></a></td>
							<?php } else if ($k->status == 'ditolak') { ?>
								<td><a href="#" class="badge badge-danger text-light"><?= $k->status ?></a></td>
							<?php } else { ?>
								<td><a href="#" class="badge badge-warning text-light"><?= $k->status ?></a></td>
							<?php } ?>


							<td>
								<?php if (strtotime($k->tiba) >  time()) { ?>
									<a href="#konfirmasiTepat-<?= $k->id ?>" class="konfirmasi mr-3" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Konfirmasi Tiba">&#xe0cf;</i> </a>
								<?php } else { ?>
									<a href="#konfirmasiTiba-<?= $k->id ?>" class="konfirmasi mr-3" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Konfirmasi tiba">&#xe0cf;</i></a>
								<?php } ?>
								<a href="<?= base_url('home/hapustiba') ?>?id=<?= $k->id ?>" class="konfirmasi" data-toggle="tooltip" title="Hapus"><i class="material-icons" data-toggle="tooltip" title="Hapus">&#xE872;</i> </a>
							</td>
							<td><?= $k->waktu_konfirmasi ?></td>
						</tr>
					<?php endif; ?>
				<?php endforeach; ?>
			</tbody>
		</table>
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
<?php foreach ($keberangkatan->result() as $k) : ?>
	<!-- Konfirmasi Sukses Anggota Modal -->
	<div id="konfirmasiTepat-<?= $k->id ?>" class="modal fade">
		<div class="modal-dialog" style="max-width:400px;">
			<div class="modal-content">
				<form action="<?= base_url('home/tiba') ?>" method="get">
					<div class="modal-header">
						<h4 class="modal-title">Konfimasi</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<p>Waktu tiba anda telah dikonfirmasi</p>
						<p class="text-success"><small>Terima kasih.</small></p>
					</div>
					<div class="modal-footer">
						<button value="<?= $k->id ?>" name="id" type="submit" class="btn btn-success">OK</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php endforeach; ?>


<?php foreach ($keberangkatan->result() as $k) : ?>
	<div id="konfirmasiTiba-<?= $k->id ?>" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<div class="card my-5">
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
											<form class="user" action="<?= base_url('home/terlambat') ?>" method="post">
												<label for="">ID</label>
												<div class="form-group">
													<input type="text" class="form-control form-control-user" id="idKapal" aria-describedby="emailHelp" value="<?= $k->id ?>" name="id" readonly>
												</div>
												<div class="form-group">
													<label for="">Sebab Keterlambatan</label>
													<div class="form-check">
														<label class="form-check-label">
															<input class="form-check-input" name="keterangan" type="checkbox" value="kapal rusak">
															Kapal rusak
															<span class="form-check-sign">
																<span class="check"></span>
															</span>
														</label>
													</div>
													<div class="form-check">
														<label class="form-check-label">
															<input class="form-check-input" name="keterangan" type="checkbox" value="cuaca buruk">
															Cuaca buruk
															<span class="form-check-sign">
																<span class="check"></span>
															</span>
														</label>
													</div>
													<div class="form-check">
														<label class="form-check-label">
															<input class="form-check-input" type="checkbox" value="hasil tangkapan belum mencapai target" name="keterangan">
															Minim target
															<span class="form-check-sign">
																<span class="check"></span>
															</span>
														</label>
													</div>
													<button type="submit" class="btn btn-warning btn-user btn-block btn-round">
														Konfimasi
													</button>
													<a href="#" class="btn btn-danger btn-user btn-block btn-round" class="close" data-dismiss="modal" aria-hidden="true">
														Batal
													</a>
												</div>
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
<?php endforeach; ?>