<div class="container m-auto">
  <div class="row justify-content-center">
    <h1>Form Tambah Data Penduduk</h1>
    <?php if (validation_errors()) : ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?=validation_errors(); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>
    <form action="<?= base_url('DataPenduduk/tambah') ?>" method="post" class="col col-10 col-md-8 ">
      <div class="form-group">
        <input type="text" class="form-control" name="nik" id="nik" aria-describedby="helpId" placeholder="Nomor Induk Kependudukan">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" name="nama" id="" aria-describedby="helpId" placeholder="Nama Lengkap">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" name="ttl" id="ttl" aria-describedby="helpId" placeholder="Tempat, Tanggal Lahir">
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
        <select class="form-control" name="kewarganegaraan" id="kewarganegaraan">
          <option value="" disabled selected>Kewarganegaraan</option>
          <option value="Indonesia">Indonesia</option>
          <option value="WNA">Warga Negara Asing</option>
        </select>
      </div>

      <div class="form-group">
        <select class="form-control" name="status" id="status">
          <option value="" disabled selected>Status</option>
          <option value="Menikah">Menikah</option>
          <option value="Belum Menikah">Belum Menikah</option>
        </select>
      </div>

      <div class="form-group">
        <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" aria-describedby="helpId" placeholder="Pekerjaan">
      </div>

      <div class="form-group">
        <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="helpId" placeholder="Alamat">
      </div>
      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary mb-5" name="btn_tambah">Tambah Data Penduduk</button>
      </div>
    </form>
  </div>
</div>