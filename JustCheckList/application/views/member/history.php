<!-- content -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<div class="container-fluid p-5 mt-5">
		<div class="table-wrapper shadow-lg">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>HISTORY <b>JADWAL</b></h2>
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
						<th>ID Kapal</th>
						<th>Keberangkatan</th>
						<th>Tiba</th>
						<th>Anggota</th>
						<th>Status</th>
						<th>Waktu Konfirmasi</th>
						<th>Keterangan</th>
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
						<td>Sabtu, 10 Maret 2019/ 18:00</td>
						<td>Minggu, 11 Maret 2019/ 18.00</td>
						<td><img class="gambar" src="http://lorempixel.com/100/100/people/1" alt="" /></td>
						<td><a href="#" class="badge badge-success text-light">DITERIMA</a></td>
						<td>Sabtu, 10 Maret 2019/ 18:00</td>
						<td>On Time</td>


					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox2" name="options[]" value="1">
								<label for="checkbox2"></label>
							</span>
						</td>
						<td>2</td>
						<td>Sabtu, 10 Maret 2019/ 18:00</td>
						<td>Minggu, 11 Maret 2019/ 18.00</td>
						<td><img class="gambar" src="http://lorempixel.com/100/100/people/1" alt="" /></td>
						<td><a href="#" class="badge badge-danger text-light">DITOLAK</a></td>
						<td>Sabtu, 10 Maret 2019/ 18:00</td>
						<td>On Time</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox3" name="options[]" value="1">
								<label for="checkbox3"></label>
							</span>
						</td>
						<td>3</td>
						<td>Sabtu, 10 Maret 2019/ 18:00</td>
						<td>Minggu, 11 Maret 2019/ 18.00</td>
						<td><img class="gambar" src="http://lorempixel.com/100/100/people/1" alt="" />
							<img class="gambar" src="http://lorempixel.com/100/100/people/1" alt="" />
							<img class="gambar" src="http://lorempixel.com/100/100/people/1" alt="" />
							<img class="gambar" src="http://lorempixel.com/100/100/people/1" alt="" />
							<img class="gambar" src="http://lorempixel.com/100/100/people/1" alt="" /></td>
						<td><a href="#" class="badge badge-success text-light">DITERIMA</a></td>
						<td>Sabtu, 10 Maret 2019/ 18:00</td>
						<td>On Time</td>


					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox4" name="options[]" value="1">
								<label for="checkbox4"></label>
							</span>
						</td>
						<td>4</td>
						<td>Sabtu, 10 Maret 2019/ 18:00</td>
						<td>Minggu, 11 Maret 2019/ 18.00</td>
						<td><img class="gambar" src="http://lorempixel.com/100/100/people/1" alt="" /></td>
						<td><a href="#" class="badge badge-warning text-light">DALAM PROSES</a></td>
						<td>Sabtu, 10 Maret 2019/ 18:00</td>
						<td>On Time</td>


					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox5" name="options[]" value="1">
								<label for="checkbox5"></label>
							</span>
						</td>
						<td>5</td>
						<td>Sabtu, 10 Maret 2019/ 18:00</td>
						<td>Minggu, 11 Maret 2019/ 18.00</td>
						<td><img class="gambar" src="http://lorempixel.com/100/100/people/1" alt="" /></td>
						<td><a href="#" class="badge badge-danger text-light">DITOLAK</a></td>
						<td>Sabtu, 10 Maret 2019/ 18:00</td>
						<td>On Time</td>


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
<!-- /content -->