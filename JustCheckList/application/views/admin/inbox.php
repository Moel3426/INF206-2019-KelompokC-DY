<!-- content -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="<?php echo base_url() ?>assets/css/profil.css" rel="stylesheet" />
<div class="container-fluid p-5 mt-5">
	<?php if($konfirmasi[0]!="kosong"):?>
	<div class="row">
		<?php for ($i = 0; $i < count($konfirmasi); $i++) : ?>
			<?php foreach ($konfirmasi[$i]->result() as $konfir) : ?>
				<div class="col-xl-3 col-md-6 mb-4">
					<div class="card card-nav-tabs text-center p-1">
						<div class="mt-3 card-header card-header-primary">
						</div>
						<div class="card-body">
							<h4 class="card-title">ID <?= $konfir->id ?></h4>
							<a href="<?php echo base_url() ?>admin/pesan?id=<?= $konfir->id ?>" class="btn btn-primary">Check</a>
							<span class="badge badge-danger badge-counter" style="position: absolute;">1</span>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		<?php endfor; ?>
	</div>
<?php endif;?>
</div>
