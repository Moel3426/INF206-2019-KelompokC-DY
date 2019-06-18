<!-- content -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<div class="container-fluid p-5 mt-5">
	<!-- Outer Row -->
	<div class="row justify-content-center">
		<div class="col-xl-10 col-lg-12 col-md-9">
			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-lg-6 d-none d-lg-block bg-schedule-image"></div>
						<div class="col-lg-6">
							<div class="p-5">
								<div class="text-center">
									<h6 class="h4 text-gray-900 mb-4">Form Keberangkatan</h6>
									<hr>
								</div>
								<form class="user" action="<?= base_url('home/insertBerangkat') ?>" method="post">
									<h6 for="">ID Kapal</h6>
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="idkapal" name="idkapal" value="<?= $user['id_kapal']; ?>" readonly>
									</div>
									<div class="form-group">
										<h6 for="">Keberangkatan</h6>
										<input type="text" class="form-control date-picker" name="Keberangkatan" placeholder="Masukkan Jadwal..." data-datepicker-color="primary" required>
									</div>
									<div class="form-group">
										<h6 for="">Tiba</h6>
										<input type="text" class="form-control date-picker" name="Tiba" placeholder="Masukkan Jadwal..." data-datepicker-color="primary" required>
									</div>
									<div class="form-group mt-4">
										<h6 for="">ID Anggota</h6>
										<div class="table-wrapper mt-0">
											<div class="table-responsive">
												<table class="table table-striped table-hover">
													<thead>
														<tr>
															<th>Nama</th>
															<th>No Hp</th>
															<th>Aksi</th>
														</tr>
													</thead>
													<tbody>
														<?php
														foreach ($anggota as $item) {
															?>
															<tr>
																<td><?= $item->nama ?></td>
																<td><?= $item->noHp ?></td>

																<td>
																	<span class="custom-checkbox">
																		<input type="checkbox" id="checkbox2" name="anggotaIkut[]" value="<?= $item->id ?>">
																		<label for="checkbox2"></label>
																	</span>
																</td>
															</tr>
														<?php
													}
													?>

														<tr>
													</tbody>
												</table>

											</div>
										</div>
									</div>
									<button type="submit" class="btn btn-primary btn-user btn-block btn-round">
										Submit
									</button>
								</form>
								<hr>
							</div>
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
			</form>
		</div>
	</div>
</div>
</div>
</div>
</div>
<!-- /content -->