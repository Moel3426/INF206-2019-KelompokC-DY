<footer class="footer footer-default bg-dark" >
	<div class=" container text-light">
		<nav>
			<ul>
				<li>
					<a href="#">
						@ copy JUST CHECK LIST
					</a>
				</li>
			</ul>
		</nav>
		<div class="copyright" id="copyright">
			&copy;
			<script>
				document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
			</script>, Designed by
			<a href="#"> KELOMPOK C DY</a>. Coded by
			<a href="#">RPL2019</a>.
		</div>
	</div>
</footer>
<!-- End Navbar -->


<!--  Undang Anggota Modal -->
<div id="undangAnggota" class="modal fade">
	<div class="modal-dialog" style="max-width:400px;">
		<div class="modal-content">
			<form action="<?= base_url('admin/index') ?>" method="post">
				<div class="modal-header">
					<h4 class="modal-title">Undang Anggota</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="col-md-12 p-1">
						<div class="form-group">
							<p>Cari Anggota</p>
							<input type="search" name="nama" class="form-control" placeholder="Nama" required>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-success" value="OK">
				</div>
			</form>
		</div>
	</div>
</div>

<!--   Core JS Files   -->
<script src="<?php echo base_url() ?>assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?php echo base_url() ?>assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo base_url() ?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="<?php echo base_url() ?>assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url() ?>assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>

<!-- Chart -->
<script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url() ?>assets/js/demo/chart-area-demo-2.js"></script>
<script src="<?php echo base_url() ?>assets/js/demo/chart-pie-demo.js"></script>
<script src="<?php echo base_url() ?>assets/js/demo/chart-bar-demo.js"></script>
<script>
	$(document).ready(function() {
		// the body of this function is in assets/js/now-ui-kit.js
		nowuiKit.initSliders();
	});

	function scrollToDownload() {

		if ($('.section-download').length != 0) {
			$("html, body").animate({
				scrollTop: $('.section-download').offset().top
			}, 1000);
		}
	}
</script>
<script type="text/javascript">
	$(document).ready(function() {
		// Activate tooltip
		$('[data-toggle="tooltip"]').tooltip();

		// Select/Deselect checkboxes
		var checkbox = $('table tbody input[type="checkbox"]');
		$("#selectAll").click(function() {
			if (this.checked) {
				checkbox.each(function() {
					this.checked = true;
				});
			} else {
				checkbox.each(function() {
					this.checked = false;
				});
			}
		});
		checkbox.click(function() {
			if (!this.checked) {
				$("#selectAll").prop("checked", false);
			}
		});
	});
</script>
</body>

</html>
