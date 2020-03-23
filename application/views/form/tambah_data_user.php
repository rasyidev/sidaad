<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIDAAD JATIMULYO</title>
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
  <div class="container m-auto">
      <h1 class="text-center">Form Tambah Data Operator</h1>
    <div class="row justify-content-center">
      <?php if (validation_errors()) : ?>
        <div class="alert alert-warning alert-dismissible fade show col-10" role="alert">
          <?= validation_errors(); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>
      <form action="<?= base_url('dashboard/tambahDataUser') ?>" method="post" class="col col-10 col-md-8 ">
        <div class="form-group">
          <input type="text" class="form-control" name="username" id="ttl" aria-describedby="helpId" placeholder="Username">
        </div>
        <div class="row d-flex">
          <div class="form-group col-6">
            <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Password">
          </div>
          <div class="form-group col-6">
            <input type="password" class="form-control" name="repassword" id="repassword" aria-describedby="helpId" placeholder="Ketik Ulang Password ">
          </div>
        </div>
        <div class="form-group">
          <select class="form-control" name="user_role" id="user_role">
            <option value="" disabled selected>Jenis User</option>
            <option value="1">Administrator</option>
            <option value="2">Operator</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary mb-5" name="btn_tambah">Tambah Data Penduduk</button>
    </div>
    </form>
  </div>
  </div>
</body>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</html>