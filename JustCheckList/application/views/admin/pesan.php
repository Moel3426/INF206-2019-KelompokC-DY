<div class="container-fluid p-5 mt-5">
	<!-- Outer Row -->
	<div class="row justify-content-center">

		<div class="col-xl-10 col-lg-12 col-md-9">

			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-lg-6 d-none d-lg-block bg-preview-image"></div>
						<div class="col-lg-6">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Form Keberangkatan</h1>
									<hr>
								</div>
								<form class="user">
									<label for="">ID Kapal</label>
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="idKapal" aria-describedby="emailHelp" value="<?= $keterangan->id_kapal ?>" readonly>
									</div>
									<div class="form-group">
										<label for="">Keberangkatan</label>
										<input type="text" class="form-control form-control-user" value="<?= $keterangan->keberangkatan ?>" readonly>
									</div>
									<div class="form-group">
										<label for="">Tiba</label>
										<input type="text" class="form-control form-control-user" value="<?= $keterangan->tiba ?>" readonly>
									</div>
									<div class="form-group">
										<label for="">Daftar Anggota</label>
										<div class="table-wrapper mt-4 pt-0">
											<table class="table table-striped table-hover ">
												<thead>
													<tr>
														<th>ID</th>
														<th>Foto</th>
														<th>Nama</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$data = json_decode($anggotaIkut[0]->anggota);
													foreach ($data as $id) : $anggota = $this->db->get_where('tb_member', ['id' => $id])->row(); ?>
														<tr>
															<td><?= $anggota->id ?></td>
															<td>
																<img class="gambar" src="<?php echo base_url('assets/foto/' . $anggota->foto) ?>" alt="" srcset="" />
															</td>
															<td><?= $anggota->nama ?></td>
														</tr>
													<?php endforeach; ?>
												</tbody>
											</table>
										</div>

									</div>
									<div class="row">
										<div class="col-md-6">
											<a href="<?php echo base_url() ?>admin/inbox?id=<?= $keterangan->id ?>&&status=diterima" class="btn btn-success btn-user btn-block btn-round">
												Konfirmasi
											</a>
										</div>
										<div class="col-md-6">
											<a href="<?php echo base_url() ?>admin/inbox?id=<?= $keterangan->id ?>&&status=ditolak" class="btn btn-danger btn-user btn-block btn-round">
												Tolak
											</a>
										</div>
									</div>
									<a href="<?php echo base_url() ?>admin/inbox" class="btn btn-warning btn-user btn-block btn-round">
										Kembali
									</a>
								</form>
								<hr>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Delete Modal HTML -->
			<div id="deleteEmployeeModal" class="modal fade">
				<div class="modal-dialog">
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
			</form>
		</div>
	</div>
</div>
</div>
</div>
</div>
