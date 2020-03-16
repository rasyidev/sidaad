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
        <h1 class="register-logo">Form Surat Keterangan Catatan Kepolisian</h1>
        <br>
        
        <!-- nanti oper aja dia mau buat surat apa cek dulu nik nya ada atau ga, kalo ga ada direct ke form -->
        <form action="<?= base_url('almaker/skck/index.php') ?>" method="post" class="mt-4">
            <h2 class="font-weight-bold mt-5">Data Pemohon</h2>
            
            <div class="form-group col-sm-8">
                <input type="text" class="form-control" name="nik" id="nik" aria-describedby="helpId" placeholder="Nomor Induk Kependudukan">
            </div>  
            
            <div class="form-group col-sm-8">
                <select class="form-control" name="pendidikan" id="pendidikan">
                <option value="" disabled selected>Pendidikan Terakhir</option>
                <option value="SD">SD</option>
                <option value="SMP/SLTP">SMP/SLTP</option>
                <option value="SMA/SLTA">SMA/SLTA</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
                </select>
            </div>
            <div class="form-group col-sm-8">
                <input type="text" class="form-control" name="tembusan" id="tembusan" aria-describedby="helpId" placeholder="Tembusan Surat">
            </div>
            <div class="form-group col-sm-8">
                <input type="text" class="form-control" name="tempat_tembusan" id="tempat_tembusan" aria-describedby="helpId" placeholder="Tempat Tembusan Surat">
            </div>
            <div class="form-group col-sm-8">
                <input type="text" class="form-control" name="keperluan" id="keperluan" aria-describedby="helpId" placeholder="Untuk keperluan">
            </div>

            <h2 class="font-weight-bold mt-5">Data Ayah</h2>

            <div class="form-group col-sm-8">
                <input type="text" class="form-control" name="nama_ayah" id="" aria-describedby="helpId" placeholder="Nama Lengkap">
            </div>
            <div class="form-group col-sm-8">
                <input type="text" class="form-control" name="umur_ayah" id="" aria-describedby="helpId" placeholder="Umur">
            </div>
            <div class="form-group col-sm-8">
                <input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan" aria-describedby="helpId" placeholder="Pekerjaan">
            </div>
            <div class="form-group col-sm-8">
                <input type="text" class="form-control" name="kewarganegaraan_ayah" id="kewarganegaraan" aria-describedby="helpId" placeholder="Kewarganegaraan">
            </div>
            <div class="form-group col-sm-8">
                <select class="form-control" name="agama_ayah" id="agama">
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
                <input type="text" class="form-control" name="orpol_ayah" id="orpol" aria-describedby="helpId" placeholder="Orpol/Ormas">
            </div>
            <div class="form-group col-sm-8">
                <input type="text" class="form-control" name="alamat_ayah" id="alamat" aria-describedby="helpId" placeholder="Alamat">
            </div>

            <h2 class="font-weight-bold mt-5">Data Ibu</h2>
            <div class="form-group col-sm-8">
                <input type="text" class="form-control" name="nama_ibu" id="" aria-describedby="helpId" placeholder="Nama Lengkap">
            </div>
            <div class="form-group col-sm-8">
                <input type="text" class="form-control" name="umur_ibu" id="" aria-describedby="helpId" placeholder="Umur">
            </div>
            <div class="form-group col-sm-8">
                <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan" aria-describedby="helpId" placeholder="Pekerjaan">
            </div>
            <div class="form-group col-sm-8">
                <input type="text" class="form-control" name="kewarganegaraan_ibu" id="kewarganegaraan" aria-describedby="helpId" placeholder="Kewarganegaraan">
            </div>
            <div class="form-group col-sm-8">
                <select class="form-control" name="agama_ibu" id="agama">
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
                <input type="text" class="form-control" name="orpol_ibu" id="orpol" aria-describedby="helpId" placeholder="Orpol/Ormas">
            </div>
            <div class="form-group col-sm-8">
                <input type="text" class="form-control" name="alamat_ibu" id="alamat" aria-describedby="helpId" placeholder="Alamat">
            </div>

            <button type="submit" class="btn btn-primary">Buat Surat Keterangan Catatan Kepolisian</button>
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