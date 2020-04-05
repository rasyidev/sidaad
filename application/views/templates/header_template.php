<?php //var_dump($nama) 
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/adminlte/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/adminlte/') ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/adminlte/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/adminlte/') ?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/adminlte/') ?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/adminlte/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/adminlte/') ?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/adminlte/') ?>plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link href="<?= base_url('assets') ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light d-flex justify-content-between">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?= base_url('dashboard') ?>" class="nav-link">Home</a>
        </li>

      </ul>
      <li class="nav-item" style="list-style: none">
        <a href="<?= base_url('auth/logout') ?>" class="btn btn-danger">logout</a>
      </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= base_url('dashboard') ?>" class="brand-link d-flex align-items-center px-1 pr-2 justify-content-around">
        <img src="<?= base_url('assets/vendor/') ?>img/logo-lampsel-1.png" alt="" style="height: 50px">
        <span class="brand-text font-font-weight-bolder">SIDAAD Jatimulyo</span>
      </a>


      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="#" class="d-block"> <?= $username ?> <span class="badge badge-primary"><?= $role ?></span></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Buat Surat
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>

              <ul class="nav nav-treeview">
                <?php foreach ($nama_surat_lengkap as $surat) : ?>
                  <?php $inisial_surat = '';
                  if ($surat == "Ket. Belum Menikah") {
                    $inisial_surat = "ketStatus";
                  } elseif ($surat == "Ket. Tidak Mampu") {
                    $inisial_surat = "sktm";
                  } elseif ($surat == "Izin Usaha") {
                    $inisial_surat = "izinUsaha";
                  } elseif ($surat == "Izin Keramaian") {
                    $inisial_surat = "izinKeramaian";
                  } elseif ($surat == "Ket. Domisili") {
                    $inisial_surat = "ketDomisili";
                  } elseif ($surat == "Ket. Penghasilan Ortu") {
                    $inisial_surat = "ketPenghasilanOrtu";
                  } elseif ($surat == "Pengantar SKCK") {
                    $inisial_surat = "pengantarSKCK";
                  } else {
                    // redirect('dashboard');
                  } ?>
                  <?php if ($this->uri->segment(1) == "BuatSurat") : ?>
                    <?php if ($this->uri->segment(3) == $inisial_surat) : ?>
                      <li class="nav-item">
                        <a href="#" class="nav-link active">
                          <p><?= $surat ?></p>
                        </a>
                      </li>
                    <?php else : ?>
                      <li class="nav-item">
                        <a href="<?= base_url('BuatSurat/formCari/') . $inisial_surat ?>" class="nav-link">
                          <p><?= $surat ?></p>
                        </a>
                      </li>
                    <?php endif; ?>
                  <?php else : ?>
                    <li class="nav-item">
                      <a href="<?= base_url('BuatSurat/formCari/') . $inisial_surat ?>" class="nav-link">
                        <p><?= $surat ?></p>
                      </a>
                    </li>
                  <?php endif ?>
                <?php endforeach; ?>
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
                  <a href="<?= base_url('dashboard') ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Semua Surat</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Perbulan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./index2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Operator</p>
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
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <section class="content">
        <div class="container-fluid">