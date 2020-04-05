<div class="container m-auto">
  <div class="row justify-content-center">
    <h1>Form Ubah Data Penduduk</h1>

    <!-- Alert validasi data -->
    <?php if (validation_errors()) : ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?= validation_errors(); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>
    <form action="<?= base_url('DataPenduduk/ubah') ?>" method="post" class="col col-10 col-md-8 ">
      <div class="form-group">
        <input type="text" class="form-control" name="nik" id="nik" aria-describedby="helpId" placeholder="Nomor Induk Kependudukan" value="<?= $penduduk['nik'] ?>">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" name="nama" id="" aria-describedby="helpId" placeholder="Nama Lengkap" value="<?= $penduduk['nama'] ?>">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" name="ttl" id="ttl" aria-describedby="helpId" placeholder="Tempat, Tanggal Lahir" value="<?= $penduduk['ttl'] ?>">
      </div>

      <div class="form-group">
        <select class="form-control" name="agama" id="agama">
          <option value="" disabled selected>Agama</option>
          <!-- <option value="Islam">Islam</option>
          <option value="Kristen Protestan">Kristen Protestan</option>
          <option value="Katolik">Katolik</option>
          <option value="Hindu">Hindu</option>
          <option value="Konghucu">Konghucu</option> -->
          <?php foreach ($agama as $a) : ?>
            <?php if ($penduduk['agama'] == $a) : ?>
              <option value="<?=$a ?>" selected><?= $a ?></option>
            <?php else : ?>
              <option value="<?=$a ?>"><?= $a ?></option>
            <?php endif; ?>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="form-group">
        <select class="form-control" name="jkel" id="jkel">
          <option value="" disabled selected>Jenis Kelamin</option>
          <?php foreach ($jkel as $a) : ?>
            <?php if ($penduduk['jkel'] == $a) : ?>
              <option value="<?=$a ?>" selected><?= $a ?></option>
            <?php else : ?>
              <option value="<?=$a ?>"><?= $a ?></option>
            <?php endif; ?>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="form-group">
        <select class="form-control" name="kewarganegaraan" id="kewarganegaraan">
          <option value="" disabled selected>Kewarganegaraan</option>
          <?php foreach ($kewarganegaraan as $a) : ?>
            <?php if ($penduduk['kewarganegaraan'] == $a) : ?>
              <option value="<?=$a ?>" selected><?= $a ?></option>
            <?php else : ?>
              <option value="<?=$a ?>"><?= $a ?></option>
            <?php endif; ?>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="form-group">
        <select class="form-control" name="status" id="status">
          <option value="" disabled selected>Status Pernikahan</option>
          <?php foreach ($status as $s) : ?>
            <?php if ($penduduk['status'] == $s) : ?>
              <option value="<?=$s ?>" selected><?= $s ?></option>
            <?php else : ?>
              <option value="<?=$s ?>"><?= $s ?></option>
            <?php endif; ?>
          <?php endforeach; ?>
        </select>
      </div>

      <div class="form-group">
        <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" aria-describedby="helpId" placeholder="Pekerjaan" value="<?= $penduduk['pekerjaan'] ?>">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="helpId" placeholder="Alamat" value="<?= $penduduk['alamat'] ?>">
      </div>
      <div class="btn-navigasi" style="display: flex; justify-content: flex-end">
        <a name="" id="" class="btn btn-outline-warning mr-2" href="<?= base_url('DataPenduduk') ?>" role="button">Batal</a>
        <button type="submit" class="btn btn-primary" name="btn_tambah">Ubah Data Penduduk</button>
      </div>
    </form>
  </div>
</div>