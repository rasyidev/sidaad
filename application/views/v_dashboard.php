<div class="row">
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<a href="<?= base_url('dashboard/allLog') ?>">
			<div class="small-box bg-red">
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
					<i class="ion ion-person-add"></i>
				</div>
			</div>
		</a>
	</div>
</div> <!-- /.row -->
<br><br>
<div class="row">
	<!-- small box -->					
	<div class="col-lg-3 col-6">
		<a href="<?= base_url('BuatSurat/formCari/ketStatus') ?>">        
		    <div class="small-box bg-info">			
				<div class="inner">
					<h4>Ket. Belum Menikah</h4>
					<p><br><br></p>
				</div>
				<div class="icon">
				    <i class="fa fa-heart"></i>	
				</div>
			</div>
		</a>
	</div>
	<div class="col-lg-3 col-6">
		<a href="<?= base_url('BuatSurat/formCari/sktm') ?>">        
		    <div class="small-box bg-info">			
				<div class="inner">
					<h4>Ket. Tidak Mampu</h4>
					<p><br><br></p>
				</div>
				<div class="icon">
					<i class="fa fa-balance-scale"></i>
				</div>
			</div>
		</a>
	</div>
	<div class="col-lg-3 col-6">
		<a href="<?= base_url('BuatSurat/formCari/izinUsaha') ?>">        
		    <div class="small-box bg-info">			
				<div class="inner">
					<h4>Izin Usaha</h4>
					<p><br><br></p>
				</div>
				<div class="icon">
					<i class="fa fa-briefcase"></i>
				</div>
			</div>
		</a>
	</div>
	<div class="col-lg-3 col-6">
		<a href="<?= base_url('BuatSurat/formCari/izinKeramaian') ?>">        
		    <div class="small-box bg-info">			
				<div class="inner">
					<h4>Izin Keramaian</h4>
					<p><br><br></p>
				</div>
				<div class="icon">
					<i class="fa fa-calendar"></i>
				</div>
			</div>
		</a>
	</div>
	<div class="col-lg-3 col-6">
		<a href="<?= base_url('BuatSurat/formCari/ketDomisili') ?>">        
		    <div class="small-box bg-info">			
				<div class="inner">
					<h4>Ket. Domisili</h4>
					<p><br><br></p>
				</div>
				<div class="icon">
					<i class="fa fa-map-marker"></i>
				</div>
			</div>
		</a>
	</div>
	<div class="col-lg-3 col-6">
		<a href="<?= base_url('BuatSurat/formCari/ketPenghasilanOrtu') ?>">        
		    <div class="small-box bg-info">			
				<div class="inner">
					<h4>Ket. Penghasilan Ortu</h4>
					<p><br><br></p>
				</div>
				<div class="icon">
					<i class="fa fa-credit-card"></i>
				</div>
			</div>
		</a>
	</div>
	<div class="col-lg-3 col-6">
		<a href="<?= base_url('BuatSurat/formCari/pengantarSKCK') ?>">        
		    <div class="small-box bg-info">			
				<div class="inner">
					<h4>Pengantar SKCK</h4>
					<p><br><br></p>
				</div>
				<div class="icon">
					<i class="fa fa-archive"></i>
				</div>
			</div>
		</a>
	</div>
</div>
<!-- /.row -->

<!-- /.content-wrapper -->