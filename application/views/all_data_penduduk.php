<?php

// var_dump($penduduk);
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
  <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row">
      <div class="col-8">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          Data penduduk berhasil <strong><?= $this->session->flashdata('flash'); ?></strong> You should check in on some of those fields below.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <h1 class="text-center">Semua data penduduk</h1>
  <div class="row">
    <div class="container col-10 col-md-8 justify-content-center">
      <table class="table table-hover table-bordered">
        <thead>
          <tr class="text-center">
            <th width="30%">NIK</th>
            <th width="55%">Nama</th>
            <th width="15%">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($penduduk as $p) : ?>
            <tr>
              <td><?= $p['nik'] ?></td>
              <td><?= $p['nama'] ?></td>
              <td></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>