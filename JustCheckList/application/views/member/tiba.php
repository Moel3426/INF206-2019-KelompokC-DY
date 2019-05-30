<!-- content -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<div class="container-fluid p-5 mt-5">
	<div class="table-wrapper shadow-lg">
		<div class="table-title">
			<div class="row">
				<div class="col-sm-6">
					<h2>KONFIRMASI <b>JADWAL TIBA</b></h2>
				</div>
				<div class="col-sm-6">

					<a href="#hapusAnggota" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Hapus</span></a>
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
				<?php $i = 0;
				foreach ($keberangkatan->result() as $k) : ?>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td><?= $k->id_kapal ?></td>
						<td>
							<?= $k->keberangkatan ?>
						</td>
						<td><?= $k->tiba ?></td>
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
						<td><a href="#konfirmasiTepat" class="konfirmasi" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Konfirmasi tiba">&#xe0cf;</i></a></td>
						<td><?= $k->waktu_konfirmasi ?></td>
					</tr>
				<?php endforeach; ?>
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
<!-- Konfirmasi Sukses Anggota Modal -->
<div id="konfirmasiTepat" class="modal fade">
	<div class="modal-dialog" style="max-width:400px;">
		<div class="modal-content">
			<form>
				<div class="modal-header">
					<h4 class="modal-title">Konfimasi</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Waktu tiba anda telah dikonfirmasi</p>
					<p class="text-success"><small>Terima kasih.</small></p>
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-success" value="OK">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Konfirmasi Tiba Modal -->
<div id="konfirmasiTiba" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="row justify-content-center">
				<div class="col-xl-10 col-lg-12 col-md-9">
					<div class="card o-hidden border-0 shadow-lg my-5">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
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
										<form class="user">
											<label for="">ID Kapal</label>
											<div class="form-group">
												<input type="text" class="form-control form-control-user" id="idKapal" aria-describedby="emailHelp" placeholder="Masukkan ID Kapal ..." readonly>
											</div>
											<div class="form-group">
												<label for="">Sebab Keterlambatan</label>
												<div class="form-check">
													<label class="form-check-label">
														<input class="form-check-input" type="checkbox" value="">
														Kapal rusak
														<span class="form-check-sign">
															<span class="check"></span>
														</span>
													</label>
												</div>
												<div class="form-check">
													<label class="form-check-label">
														<input class="form-check-input" type="checkbox" value="">
														Cuaca buruk
														<span class="form-check-sign">
															<span class="check"></span>
														</span>
													</label>
												</div>
												<div class="form-check">
													<label class="form-check-label">
														<input class="form-check-input" type="checkbox" value="">
														Minim target
														<span class="form-check-sign">
															<span class="check"></span>
														</span>
													</label>
												</div>
												<div class="form-check">
													<label class="form-check-label">
														<input class="form-check-input" type="checkbox" value="">
														Lainnya
														<span class="form-check-sign">
															<span class="check"></span>
														</span>
													</label>
												</div>
												<div class="mt-3">
													<label for="">Keterangan</label>
													<div class="form-group">
														<textarea class="form-control" rows="3"></textarea>
													</div>
												</div>
												<a href="#" class="btn btn-warning btn-user btn-block btn-round">
													Konfimasi
												</a>
												<a href="#" class="btn btn-danger btn-user btn-block btn-round" class="close" data-dismiss="modal" aria-hidden="true">
													Batal
												</a>
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
</div>

<!-- /content -->
