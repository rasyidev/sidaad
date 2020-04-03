<?php
//
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Penduduk</title>
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
  <h1 class="text-center">Daftar User</h1>
  <div class="row">
    <div class="container col-10 col-md-8 justify-content-center">

      <table class="table table-hover table-bordered">
        <thead>
          <tr class="text-center">
            <th width="30%">Nama</th>
            <th width="30%">Jenis Surat</th>
            <th width="20%">Tanggal Dibuat</th>
            <th width="20%">Operator</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($allLog as $p) : ?>
            <tr>
              <td class="py-1"><?= $p['nama'] ?></td>
              <td class="py-1"><?= $p['jenis_surat'] ?></td>
              <td class="py-1"><?= $p['created_at'] ?></td>
              <td class="py-1"><?= $p['username'] ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <a class="btn btn-primary my-1" href="<?= base_url('Dashboard') ?>" role="button">Kembali</a>
    </div>
  </div>
</body>

</html>