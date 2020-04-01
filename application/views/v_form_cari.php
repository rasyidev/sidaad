<?php
// var_dump($jenis_surat);
// var_dump($penduduk);die;
// var_dump($daftar_status);

// foreach($daftar_agama as $a){
// 	if($a == $penduduk['agama']){
// 		echo "benar, ". $a ."sama dengan ". $penduduk['agama'];
// 	}else{
// 		echo "salah, " . $a . "sama dengan " . $penduduk['agama'];
// 	}
// }
// die;
?>
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
  <div class="container">
    <div class="row justify-content-center">
      <h1 class="text-center">Form Surat Keterangan Status</h1>
      <form action="<?= base_url('BuatSurat/formCari') ?>" method="post" class="col col-10 col-md-8 d-flex pb-3">
        <!-- <div class=" row"> -->
        <input type="text" class="form-control col-10" name="key" placeholder="Masukkan kata kunci">
        <button type="submit" class="btn btn-outline-primary col-2" name="btn_cari">cari</button>
        <!-- </div> -->
      </form>
    </div>
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
                <td><a name="buat" id="buat" class="btn btn-primary btn-sm" href="<?= base_url('BuatSurat/') . $jenis_surat . "/" . $p['nik'] ?>" role="button">Buat Surat</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div> <!-- Container  -->
  <br><br>
</body>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>

</html>