<?php if ($this->session->flashdata('flash_tambah_berhasil')) : ?>
  <div class="row">
    <div class="col-8">
      <div class="alert alert-sucess alert-dismissible fade show" role="alert">
        Data penduduk <strong>Berhasil<?= $this->session->flashdata('flash_tambah_berhasil'); ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php if ($this->session->flashdata('flash_tambah_gagal')) : ?>
  <div class="row">
    <div class="col-8">
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data penduduk <strong><?= $this->session->flashdata('flash_tambah_gagal'); ?></strong>
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
        Data penduduk <strong><?= $this->session->flashdata('flash_ubah_gagal'); ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php if ($this->session->flashdata('flash_hapus')) : ?>
  <div class="row">
    <div class="col-8 m-auto">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data penduduk<strong><?= $this->session->flashdata('flash_hapus'); ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php if ($this->session->flashdata('flash_ubah')) : ?>
  <div class="row">
    <div class="col-8 m-auto">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data penduduk berhasil <strong><?= $this->session->flashdata('flash_ubah'); ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
<?php endif; ?>

<a class="btn btn-primary my-1" href="<?= base_url('DataPenduduk/tambah') ?>" role="button">Tambah Data</a>

<div class="row">
  <!-- DataTales Example -->
  <div class="card shadow mb-4 col-12">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Penduduk</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive table-hover table-sm">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th scope="col">NIK</th>
              <th scope="col">Nama</th>
              <th scope="col" width="20%">Aksi</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th scope="col">NIK</th>
              <th scope="col">Nama</th>
              <th scope="col">Aksi</th>
            </tr>
          </tfoot>
          <tbody>
            <?php foreach ($penduduk as $p) : ?>
              <tr>
                <td class="py-1"><?= $p['nik'] ?></td>
                <td class="py-1"><?= $p['nama'] ?></td>
                <td class="py-1">
                  <a href="<?= base_url('DataPenduduk/detail/') . $p['nik'] ?>" class="badge badge-success">detail</a>
                  <a href="<?= base_url('DataPenduduk/ubah/') . $p['nik'] ?>" class="badge badge-warning">Ubah</a>
                  <a href="<?= base_url('DataPenduduk/hapus/') . $p['nik'] ?>" title="delete" class="badge badge-danger" onclick="return confirm('Anda akan menghapus penduduk dengan nama <?= $p['nama'] ?>, Apakah Anda yakin?')">Hapus</a>

                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>