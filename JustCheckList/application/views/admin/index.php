<?php
$total_keterlambatan = 0;
$total_keberangkatan = 0;
for ($i = 0; $i < $jumlah_alasan; $i++) {
	foreach ($item[$i]->result() as $d) {
		$jumlah_keterlambatan[$i][] = $d->jumlah_keterlambatan;
		$total_keterlambatan += $d->jumlah_keterlambatan;
	}
}

foreach ($data->result() as $d) {
	$jumlah_nelayan_berlayar[] = $d->jumlah_user_berlayar;
	$bulan[] = $d->bulan;
	$total_keberangkatan += $d->jumlah_user_berlayar;
}
?>

<!-- content -->
<div class="container-fluid pl-5 pr-5 pt-5 mt-5">
	<div class="row">
		<div class="col-xl-4 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
								Keberangkatan</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_keberangkatan ?> <span>Kapal</span></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-ship" style="font-size:35px; color: gainsboro;"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-4 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Nelayan
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->db->count_all_results('users'); ?> <span>Orang</span> </div>
						</div>
						<div class="col-auto">
							<i class="fas fa-users" style="font-size:35px; color: gainsboro;"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-4 col-md-6 mb-4">
			<div class="card border-left-danger shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Keterlambatan
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_keterlambatan ?> <span>Kapal</span></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-clock" style="font-size:35px; color: gainsboro;"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid pl-5 pr-5 ">
	<div class="card shadow mb-4">
		<div class="card-header" style="background: #435d7d; border-radius: 5px; ">
			<h4 class="ml-4 font-weight-bold text-light"><i class="fas fa-ship" style="font-size:30px; color:white;"></i> KEBERANGKATAN</h4>

		</div>
		<div class="card-body">
			<canvas id="bar-chart" width="auto" height="100px"></canvas>
		</div>
	</div>
</div>

<div class="container-fluid pl-5 pr-5">
	<div class="card shadow mb-4">
		<div class="card-header" style="background: #435d7d; border-radius: 5px; ">
			<h4 class="ml-4 font-weight-bold text-light"><i class="fas fa-clock" style="font-size:30px; color:white;"></i> KETERLAMBATAN</h4>

		</div>
		<div class="card-body">
			<canvas id="line-chart" width="auto" height="100px"></canvas>
		</div>
	</div>
</div>

</div>
<div class="container-fluid pl-5 pr-5">
	<div class="table-wrapper shadow-lg ">
		<div class="table-title">
			<div class="row">
				<div class="col-sm-6">
					<h2>TABEL <b>JADWAL</b></h2>
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
				</tr>
			</thead>
			<tbody>
				<?php foreach ($keberangkatan->result() as $k) : ?>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td><?= $k->id ?></td>
						<td><?= $k->keberangkatan; ?></td>
						<td><?= $k->tiba; ?></td>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<script>
	new Chart(document.getElementById("line-chart"), {
		type: 'line',
		data: {
			labels: ['januari', 'februari', 'maret', 'april', 'mei', 'juni', 'juli', 'agustus', 'september', 'oktober', 'november', 'desember'],
			datasets: [{
					data: <?php echo json_encode($jumlah_keterlambatan[0]); ?>,
					label: "Cuaca Buruk",
					borderColor: "#3e95cd",
					fill: false
				}, // seperti ini menambah komanya
				{
					// menunjukkan keseluruhan data yang ada di alasan hasil tangkapan belum mencapai target
					data: <?php echo json_encode($jumlah_keterlambatan[1]); ?>,
					// untuk alasannya
					label: "Hasil tangkapan belum mencapai target",
					// untuk ganti warna dari naik turun statistiknya
					borderColor: "#8e5ea2",
					fill: false
				} //jika nambah alasan baru maka tambah , seperti pada line 31

				// bila mau menambah alasan baru makan tambah dataset seperti Ini 
				// {
				// 	data:  echo json_encode($jumlah_keterlambatan[2]); seperti pembuatan pada line 27,
				// 	label: "gakbisa berenang",
				// 	borderColor: "#3e95cd",
				// 	fill: false
				// }

			]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						suggestedMin: 0,
						suggestedMax: 30
					}
				}]
			},

			title: {
				display: true,
				text: 'Kasus keterlambatan pada tahun 2019'
			}
		}
	});
</script>
<script>
	new Chart(document.getElementById("bar-chart"), {
		type: 'bar',
		data: {
			labels: <?php echo json_encode($bulan); ?>,
			datasets: [{
				label: "Jumlah kapal berlayar",
				backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850", "#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850", "#3e95cd", "#8e5ea2"],
				data: <?php echo json_encode($jumlah_nelayan_berlayar); ?>
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						suggestedMin: 0,
						suggestedMax: 100
					}
				}]
			},
			legend: {
				display: false
			},
			title: {
				display: true,
				text: 'statistik kapal yang berlayar di tahun 2019'
			}
		}
	});
</script>
