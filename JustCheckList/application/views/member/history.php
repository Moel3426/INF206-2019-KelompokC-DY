<!-- content -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<div class="container-fluid p-5 mt-5" style="min-height:100vh;">
	<div class="table-wrapper shadow-lg">
		<div class="table-title">
			<div class="row">
				<div class="col-sm-6">
					<h2>HISTORY <b>JADWAL</b></h2>
				</div>
				<div class="col-sm-6">
				</div>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
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

					<?php $i = 0;
					$id = 1;
					foreach ($keberangkatan->result() as $k) : ?>
						<?php if ($k->keterangan != '') : ?>
							<tr>
								<td><?= $id++ ?></td>
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
									<?= date('H:i:s, d M Y', strtotime($k->waktu_konfirmasi)) ?>
								</td>
								<td><?= $k->keterangan ?></td>
							</tr>
						<?php endif; ?>
					<?php endforeach; ?> <tr>
				</tbody>
			</table>
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