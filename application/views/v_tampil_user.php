	<div class="container">
		<h1 class="text-center">Daftar User</h1>
		<div class="container col-10 col-md-8 justify-content-center">
			<a name="" id="" class="btn btn-primary" href="<?= base_url('Dashboard/tambahUser') ?>" role="button">Tambah User</a>
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
							<td><a href="#" class="badge badge-success">detail</a> <a href="#" class="badge badge-warning">Ubah</a> <a href="<?= base_url('Dashboard/hapusUser/') . $p['user_id'] ?>" class="badge badge-danger">Hapus</a></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<a class="btn btn-primary" href="<?= base_url('dashboard') ?>" role="button">Kembali</a>
		</div>
	</div> <!-- Container  -->

	<div class="row">
		<!-- DataTales Example -->
		<div class="card shadow mb-4 col-12">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Daftar Pembuatan Surat</h6>
			</div>
			<div class="card-body">
				<div class="table-responsive table-hover table-sm">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th scope="col">Username</th>
								<th scope="col">Role</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th scope="col">Username</th>
								<th scope="col">Role</th>
								<th scope="col">Aksi</th>
							</tr>
						</tfoot>
						<tbody>
							<?php foreach ($user as $p) : ?>
								<tr>
									<td><?= $p['username'] ?></td>
									<td><?= $p['role_name'] ?></td>
									<td><a href="#" class="badge badge-success">detail</a> <a href="#" class="badge badge-warning">Ubah</a> <a href="<?= base_url('Dashboard/hapusUser/') . $p['user_id'] ?>" class="badge badge-danger">Hapus</a></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>