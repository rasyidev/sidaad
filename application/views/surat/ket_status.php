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
        <h1 class="register-logo">Form Surat Keterangan Status</h1>
        <br>
        
        <!-- nanti oper aja dia mau buat surat apa cek dulu nik nya ada atau ga, kalo ga ada direct ke form -->
        <form action="<?=base_url('letter/index-surat-1.php') ?>" method="post" class="mt-4">
            <div class="form-group col-sm-8">
                <input type="text" class="form-control" name="nik" id="nik" aria-describedby="helpId" placeholder="Nomor Induk Kependudukan">
            </div>  
            
            <button type="submit" class="btn btn-primary">Buat Surat Keterangan Status</button>
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