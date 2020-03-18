<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIDAAD JATIMULYO</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('assets/vendor/adminlte') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=base_url('assets/vendor/adminlte') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets/vendor/') ?>css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition form-page">

<br><br>
  <div class="form-box">

      <div class="card-body ">
        <h1 class="register-logo">Form Data Diri</h1>

        <!-- nanti di base url nya get nama button yang sebelumnya di klik dari dashboard -->
        <form action="<?= base_url('BuatSurat/status') ?>" method="post" class="mt-4">

          <h2 class="font-weight-bold mt-5">Data Pemohon</h2>
          <div class="form-group col-sm-8">
            <input type="text" class="form-control" name="nik" id="nik" aria-describedby="helpId" placeholder="Nomor Induk Kependudukan">
          </div>
          
          <div class="form-group col-sm-8">
            <input type="text" class="form-control" name="nama" id="" aria-describedby="helpId" placeholder="Nama Lengkap">
          </div>

          <div class="form-group col-sm-8">
            <input type="text" class="form-control" name="ttl" id="ttl" aria-describedby="helpId" placeholder="Tempat, Tanggal Lahir">
          </div>
          
          <div class="form-group col-sm-8">
            <select class="form-control" name="agama" id="agama">
              <option value="" disabled selected>Agama</option>
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Protestan">Protestan</option>
              <option value="Hindu">Hindu</option>
              <option value="Budha">Budha</option>
              <option value="Konghucu">Konghucu</option>
            </select>
          </div>

          <div class="form-group col-sm-8">
            <select class="form-control" name="jeniskelamin" id="jeniskelamin">
              <option value="" disabled selected>Jenis Kelamin</option>
              <option value="Lakilaki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>

          <div class="form-group col-sm-8">
            <select class="form-control" name="kewarganegaraan" id="kewarganegaraan">
            <option value="" disabled selected>Kewarganegaraan</option>
              <option value="WNI">Warga Negara Indonesia</option>
              <option value="WNA">Warga Negara Asing</option>
            </select>
          </div>

          <div class="form-group col-sm-8">
            <select class="form-control" name="status" id="status">
            <option value="" disabled selected>Status</option>
              <option value="kawin">Kawin</option>
              <option value="belumkawin">Belum Kawin</option>
            </select>
          </div>

          <div class="form-group col-sm-8">
            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" aria-describedby="helpId" placeholder="Pekerjaan">
          </div>
    
          <div class="form-group col-sm-8">
            <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="helpId" placeholder="Alamat">
          </div>

          <button type="submit" class="btn btn-primary">Tambah Data Penduduk</button>
        </form>
      </div>

  </div>
</body>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>

</html>
