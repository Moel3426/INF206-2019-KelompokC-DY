<!DOCTYPE html>
<html>

<head>
	<title>Grafik faktor keterlambatan</title>

	<?php
	for ($i = 0; $i < $jumlah_alasan; $i++) {
		foreach ($item[$i]->result() as $d) {
			$jumlah_keterlambatan[$i][] = $d->jumlah_keterlambatan;
		}
	}
	?>
</head>

<body>


	<canvas id="line-chart" width="800" height="450"></canvas>
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
</body>

</html>
