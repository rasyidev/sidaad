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
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Operator</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Nama Operator</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?=base_url('surat/index') ?>" class="nav-link active"> 
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Buat Surat
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('BuatSurat/status') ?>" class="nav-link">
                  <p>Surat Keterangan Status</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('BuatSurat/usaha') ?>" class="nav-link">
                  <p>Surat Keterangan Izin Usaha</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('BuatSurat/skck') ?>" class="nav-link">
                  <p>SKCK</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('BuatSurat/keramaian') ?>" class="nav-link">
                  <p>Surat Izin Keramaian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('BuatSurat/tidakmampu') ?>" class="nav-link">
                  <p>Surat Keterangan Tidak Mampu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('BuatSurat/domisili') ?>" class="nav-link">
                  <p>Surat Keterangan Domisili</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('BuatSurat/penghasilan') ?>" class="nav-link">
                  <p>Surat Keterangan Penghasilan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Log Surat
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perbulan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Log Suratku</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

    <br><br>
    <div class="form-box">

      <div class="card-body ">
        <h1 class="register-logo">Form Surat Keterangan Tidak Mampu</h1>
        <br>
        
        <!-- nanti oper aja dia mau buat surat apa cek dulu nik nya ada atau ga, kalo ga ada direct ke form -->
        <form action="<?= base_url('almaker/ketTidakMampu/index.php') ?>" method="post" class="mt-4">
            <div class="form-group col-sm-8">
                <input type="text" class="form-control" name="nik" id="nik" aria-describedby="helpId" placeholder="Nomor Induk Kependudukan">
            </div>  
            
            <div class="form-group col-sm-8">
                <select class="form-control" name="tujuan" id="tujuan">
                    <option value="" disabled selected>Tujuan Pembuatan Surat</option>
                    <option value="PEMBUATAN/PENGAKTIFAN KARTU KESEHATAN BPJS">PEMBUATAN/PENGAKTIFAN KARTU KESEHATAN BPJS</option>
                    <option value="PEMBUATAN/PENGAKTIFAN KARTU INDONESIA PINTAR">PEMBUATAN/PENGAKTIFAN KARTU INDONESIA PINTAR</option>
                    <option value="PENDAFTARAN BEASISWA BIDIKMISI">PENDAFTARAN BEASISWA BIDIKMISI</option>
                    <option value="PENDAFTARAN SEKOLAH">PENDAFTARAN SEKOLAH</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Buat Surat Keterangan Tidak Mampu</button>
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
