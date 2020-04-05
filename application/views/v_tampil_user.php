<div class="row">
	<a class="btn btn-primary" href="<?= base_url('dashboard/tambahDataUser') ?>" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data User</a>
	<!-- DataTales Example -->
	<div class="card shadow mb-4 col-12">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Daftar User</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive table-hover table-sm">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th scope="col">Username</th>
							<th scope="col">Role</th>
							<th scope="col" width="20%">Aksi</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th scope="col">Username</th>
							<th scope="col">Role</th>
							<th scope="col" width="20%">Aksi</th>
						</tr>
					</tfoot>
					<tbody>
						<?php foreach ($user as $p) : ?>
							<tr>
								<td><?= $p['username'] ?></td>
								<td><?= $p['role_name'] ?></td>
								<td><a href="<?=base_url('Dashboard/detailUser/') . $p['user_id'] ?>" class="badge badge-success">detail</a> <a href="<?= base_url('Dashboard/ubahUser/') . $p['user_id'] ?>" class="badge badge-warning">Ubah</a> <a href="<?= base_url('Dashboard/hapusUser/') . $p['user_id'] ?>" class="badge badge-danger">Hapus</a></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>