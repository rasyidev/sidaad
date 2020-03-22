<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Detail Penduduk - <?=$penduduk['nama'] ?></title>
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
  <div class="card col-4 m-auto">
    <div class="card-body">
      <h2 class="text-center">Detail Data Penduduk</h2>
      <table class="table">
        <tbody>
          <tr>
            <td scope="row" width="20%">Nama</td>
            <td>: <?= $penduduk['nama'] ?></td>
          </tr>
          <tr>
            <td scope="row" width="20%">NIK</td>
            <td>: <?= $penduduk['nik'] ?></td>
          </tr>
          <tr>
            <td scope="row" width="20%">Tempat, Tanggal Lahir</td>
            <td>: <?= $penduduk['ttl'] ?></td>
          </tr>
          <tr>
            <td scope="row" width="20%">Agama</td>
            <td>: <?= $penduduk['agama'] ?></td>
          </tr>
          <tr>
            <td scope="row" width="20%">Jenis Kelamin</td>
            <td>: <?= $penduduk['jkel'] ?></td>
          </tr>
          <tr>
            <td scope="row" width="20%">Kewarganegaraan</td>
            <td>: <?= $penduduk['kewarganegaraan'] ?></td>
          </tr>
          <tr>
            <td scope="row" width="20%">Status</td>
            <td>: <?= $penduduk['status'] ?></td>
          </tr>
          <tr>
            <td scope="row" width="20%">Pekerjaan</td>
            <td>: <?= $penduduk['pekerjaan'] ?></td>
          </tr>
          <tr>
            <td scope="row" width="20%">Alamat</td>
            <td>: <?= $penduduk['alamat'] ?></td>
          </tr>
        </tbody>
      </table>
      <a name="" id="" class="btn btn-primary text-right" href="<?=base_url('DataPenduduk') ?>" role="button">Kembali</a>
    </div>
  </div>

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>