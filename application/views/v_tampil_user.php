<div class="row">
	<a class="btn btn-primary" href="<?= base_url('dashboard/tambahDataUser') ?>" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data User</a>
	<!-- DataTales Example -->
	<div class="card shadow mb-4 col-12">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Daftar User</h6>
		</div>
		<?php if ($this->session->flashdata('flash_tambah_gagal')) : ?>
			<div class="row">
				<div class="col-8">
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Data User <strong><?= $this->session->flashdata('flash_tambah_gagal'); ?></strong>. User sudah terdaftar
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<?php if ($this->session->flashdata('flash_ubah_gagal')) : ?>
			<div class="row">
				<div class="col-8">
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Data User <strong><?= $this->session->flashdata('flash_ubah_gagal'); ?></strong>. User sudah terdaftar
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<?php if ($this->session->flashdata('flash_tambah_berhasil')) : ?>
			<div class="row">
				<div class="col-8">
					<div class="alert alert-sucess alert-dismissible fade show" role="alert">
						Data User <strong>Berhasil<?= $this->session->flashdata('flash_tambah_berhasil'); ?></strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>
			</div>
		<?php endif; ?>
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
								<td>
									<a href="<?= base_url('Dashboard/detailUser/') . $p['user_id'] ?>" class="badge badge-success">detail</a>
									<a href="<?= base_url('Dashboard/ubahUser/') . $p['user_id'] ?>" class="badge badge-warning">Ubah</a>
									<a href="<?= base_url('Dashboard/hapusUser/') . $p['user_id'] ?>" title="delete" class="badge badge-danger" onclick="return confirm('Anda akan menghapus <?= $p['role_name'] ?> dengan username <?= $p['username'] ?>, Apakah Anda yakin?')">Hapus</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>