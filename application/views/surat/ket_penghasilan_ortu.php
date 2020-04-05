<div class="container">
  <div class="row justify-content-center">
    <h1 class="text-center">Form Surat Keterangan Penghasilan Orangtua</h1>
    <form action="<?= base_url('letter/index_ket_penghasilan_ortu.php') ?>" method="post" class="col col-10 col-md-8">
      <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>">
      <input type="hidden" name="nik" value="<?= $penduduk['nik'] ?>">
      <div class="form-group">
        <input type="text" class="form-control" name="nama" id="" aria-describedby="helpId" placeholder="Nama Lengkap" value="<?php if ($this->uri->segment(3) == $penduduk['nik']) {
                                                                                                                                echo $penduduk['nama'];
                                                                                                                              } ?>">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="ttl" id="ttl" aria-describedby="helpId" placeholder="Tempat, Tanggal Lahir" value="<?php if ($this->uri->segment(3) == $penduduk['nik']) {
                                                                                                                                            echo $penduduk['ttl'];
                                                                                                                                          } ?>">
      </div>
      <div class="form-group">
        <select class="form-control" name="agama" id="agama">
          <option value="" disabled selected>Agama</option>
          <?php foreach ($daftar_agama as $a) : ?>
            <?php if ($penduduk['agama'] == $a) : ?>
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
            <?php if ($penduduk['jkel'] == $a) : ?>
              <option value="<?= $a ?>" selected><?= $a ?></option>
            <?php else : ?>
              <option value="<?= $a ?>"><?= $a ?></option>
            <?php endif; ?>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group">
        <select class="form-control" name="kewarganegaraan" id="kewarganegaraan">
          <option value="" disabled selected>Kewarganegaraan</option>
          <?php foreach ($kewarganegaraan as $a) : ?>
            <?php if ($penduduk['kewarganegaraan'] == $a) : ?>
              <option value="<?= $a ?>" selected><?= $a ?></option>
            <?php else : ?>
              <option value="<?= $a ?>"><?= $a ?></option>
            <?php endif; ?>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group">
        <select class="form-control" name="status" id="status">
          <option value="" disabled selected>Status</option>
          <?php foreach ($daftar_status as $a) : ?>
            <?php if ($penduduk['status'] == $a) : ?>
              <option value="<?= $a ?>" selected><?= $a ?></option>
            <?php else : ?>
              <option value="<?= $a ?>"><?= $a ?></option>
            <?php endif; ?>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" aria-describedby="helpId" placeholder="Pekerjaan" value="<?php if ($this->uri->segment(3) == $penduduk['nik']) {
                                                                                                                                            echo $penduduk['pekerjaan'];
                                                                                                                                          } ?>">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="helpId" placeholder="Alamat" value="<?php if ($this->uri->segment(3) == $penduduk['nik']) {
                                                                                                                                  echo $penduduk['alamat'];
                                                                                                                                } ?>">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="penghasilan" id="penghasilan" aria-describedby="helpId" placeholder="Penghasilan Perbulan">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" name="tujuan_pembuatan" id="tujuan_pembuatan" aria-describedby="helpId" placeholder="Tujuan Pembuatan">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" name="jumlah_tanggungan" id="jumlah_tanggungan" aria-describedby="helpId" placeholder="Jumlah Tanggungan">
      </div>

      <button type="submit" class="btn btn-primary">Buat Surat Keterangan Penghasilan Orangtua</button>
    </form>
  </div>
</div>