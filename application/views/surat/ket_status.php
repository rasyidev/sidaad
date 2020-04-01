<?php 

?>
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
	<link rel="stylesheet" href="<?= base_url('assets/vendor/adminlte') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('assets/vendor/') ?>css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>
	<div class="container">
		<div class="row justify-content-center">
			<h1 class="text-center">Form Surat Keterangan Status</h1>
			<form action="<?= base_url('letter/index_ket_status.php') ?>" method="post" class="col col-10 col-md-8">
				<input type="hidden" name="user_id" value="<?=$_SESSION['user_id'] ?>">
				<input type="hidden" name="nik" value="<?=$penduduk['nik'] ?>">
				<div class="form-group">
					<input type="text" class="form-control" name="nama" id="" aria-describedby="helpId" placeholder="Nama Lengkap" value="<?php if($this->uri->segment(3)==$penduduk['nik']){ echo $penduduk['nama']; } ?>">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="ttl" id="ttl" aria-describedby="helpId" placeholder="Tempat, Tanggal Lahir" value="<?php if($this->uri->segment(3)==$penduduk['nik']){ echo $penduduk['ttl']; } ?>">
				</div>
				<div class="form-group">
					<select class="form-control" name="agama" id="agama">
						<option value="" disabled selected>Agama</option>
						<?php foreach ($daftar_agama as $a) : ?>
							<?php if ($penduduk['agama']==$a) : ?>
								<option value="<?= $a ?>" selected><?= $a ?></option>
							<?php else : ?>
								<option value="<?= $a ?>"><?= $a ?></option>
							<?php endif; ?>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<select class="form-control" name="jkel" id="jkel">
						<option value="" disabled selected>Jenis Kelamin</option>
						<?php foreach ($daftar_jkel as $a) : ?>
							<?php if ($penduduk['jkel']==$a) : ?>
								<option value="<?= $a ?>" selected><?= $a ?></option>
							<?php else : ?>
								<option value="<?= $a ?>"><?= $a ?></option>
							<?php endif; ?>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan" aria-describedby="helpId" placeholder="Warga Negara" value="<?php if($this->uri->segment(3)==$penduduk['nik']){ echo $penduduk['kewarganegaraan']; } ?>">
				</div>
				<div class="form-group">
					<select class="form-control" name="status" id="status">
						<option value="" disabled selected>Status</option>
						<?php foreach ($daftar_status as $a) : ?>
							<?php if ($penduduk['status']==$a) : ?>
								<option value="<?= $a ?>" selected><?= $a ?></option>
							<?php else : ?>
								<option value="<?= $a ?>"><?= $a ?></option>
							<?php endif; ?>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="pekerjaan" id="pekerjaan" aria-describedby="helpId" placeholder="Pekerjaan" value="<?php if($this->uri->segment(3)==$penduduk['nik']){ echo $penduduk['pekerjaan']; } ?>">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="helpId" placeholder="Alamat" value="<?php if($this->uri->segment(3)==$penduduk['nik']){ echo $penduduk['alamat']; } ?>">
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