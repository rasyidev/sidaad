<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SIDAAD JATIMULYO</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('assets/vendor/adminlte') ?>plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet"
		href="<?= base_url('assets/vendor/adminlte') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('assets/vendor/') ?>css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>
	<div class="container">
		<div class="row justify-content-center">
			<h1 class="text-center">Form Surat Keterangan Status</h1>
			<form action="<?= base_url('BuatSurat/status') ?>" method="post" class="col col-10 col-md-8 d-flex pb-3">
				<!-- <div class=" row"> -->
					<input type="text" class="form-control col-10" name="nik" placeholder="Nomor Induk Kependudukan (NIK)">
					<button type="submit" class="btn btn-outline-primary col-2" name="cari">cari</button>
				<!-- </div> -->
			</form>
			<form action="<?= base_url('letter/index-surat-1.php') ?>" method="post" class="col col-10 col-md-8">
				<div class="form-group">
					<input type="text" class="form-control" name="nama" id="" aria-describedby="helpId"
						placeholder="Nama Lengkap">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="ttl" id="ttl" aria-describedby="helpId"
						placeholder="Tempat, Tanggal Lahir">
				</div>
				<div class="form-group">
					<select class="form-control" name="agama" id="agama">
						<option value="" disabled selected>Agama</option>
						<option value="Islam">Islam</option>
						<option value="Kristen Protestan">Kristen Protestan</option>
						<option value="Katolik">Katolik</option>
						<option value="Hindu">Hindu</option>
						<option value="Budha">Budha</option>
						<option value="Konghucu">Konghucu</option>
					</select>
				</div>
				<div class="form-group">
					<select class="form-control" name="jkel" id="jkel">
						<option value="" disabled selected>Jenis Kelamin</option>
						<option value="Laki - laki">Laki - laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan" aria-describedby="helpId"
						placeholder="Warga Negara">
				</div>
				<div class="form-group">
					<select class="form-control" name="status" id="status">
						<option value="" disabled selected>Status</option>
						<option value="Menikah">Menikah</option>
						<option value="Belum Menikah">Belum Menikah</option>
					</select>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="pekerjaan" id="pekerjaan" aria-describedby="helpId"
						placeholder="Pekerjaan">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="helpId"
						placeholder="Alamat">
				</div>
				<button type="submit" class="btn btn-primary">Buat Surat Keterangan Status</button>
			</form>
		</div>
	</div>
	<br><br>
</body>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>

</html>
