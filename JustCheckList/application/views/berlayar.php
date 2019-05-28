<!DOCTYPE html>
<html>
<!-- berlaayar.php -->
<head>
	<title>Grafik Stok Barang</title>

	<?php

	foreach ($data->result() as $d) {
		$jumlah_nelayan_berlayar[] = $d->jumlah_user_berlayar;
		$bulan[] = $d->bulan;
	}
	?>
</head>

<body>


	<canvas id="bar-chart" width="800" height="450"></canvas>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
	<script>
		new Chart(document.getElementById("bar-chart"), {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($bulan); ?>,
				datasets: [{
					label: "Jumlah nelayan berlayar (orang)",
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
					text: 'statistik nelayan yang berlayar di tahun 2019'
				}
			}
		});
	</script>
</body>

</html>
