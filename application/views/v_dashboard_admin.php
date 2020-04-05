<div class="row">
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<a href="<?=base_url('dashboard/allLog') ?>">
			<div class="small-box bg-info">
				<div class="inner">
					<h3><?= $this->M_Admin->totalSurat() ?></h3>

					<p>Jumlah Surat Terbuat</p>
				</div>
				<div class="icon">
					<i class="ion ion-stats-bars"></i>
				</div>
			</div>
		</a>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<a href="<?= base_url('DataPenduduk') ?>">
			<div class="small-box bg-success">
				<div class="inner">
					<h3><?= $this->M_Admin->totalPenduduk() ?><sup style="font-size: 20px"></sup></h3>

					<p>Data penduduk tersimpan</p>
				</div>
				<div class="icon">

				</div>
			</div>
		</a>
	</div>
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<a href="<?= base_url('dashboard/tampilUser') ?>">
			<div class="small-box bg-warning">
				<div class="inner">
					<h3><?= $this->M_Admin->totalUser() ?><sup style="font-size: 20px"></sup></h3>

					<p>Jumlah User</p>
				</div>
				<div class="icon">

				</div>
			</div>
		</a>
	</div>
</div>
<!-- /.row -->
