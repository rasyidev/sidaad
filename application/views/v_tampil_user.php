<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Daftar User</title>
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
		<h1 class="text-center">Daftar User</h1>
		<div class="container col-10 col-md-8 justify-content-center">
			<table class="table table-hover table-bordered">
				<thead>
					<tr class="text-center">
						<th width="30%">Username</th>
						<th width="45%">Role</th>
						<th width="25%">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($user as $p) : ?>
						<tr>
							<td><?= $p['username'] ?></td>
							<td><?= $p['role_name'] ?></td>
							<td><a href="#" class="badge badge-success">detail</a> <a href="#" class="badge badge-warning">Ubah</a> <a href="#" class="badge badge-danger">Hapus</a></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<a class="btn btn-primary" href="<?=base_url('dashboard') ?>" role="button">Kembali</a>
		</div>
	</div> <!-- Container  -->
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