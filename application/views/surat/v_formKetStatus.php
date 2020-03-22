<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form Surat Keterangan Status</title>
  <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css');
                                ?>">
</head>

<body>
  <div class="container col-sm-8">
    <h1 class="text-center">Form Surat Keterangan Status</h1>
    <form action="<?=base_url('letter/index-surat-1.php') ?>" method="post" class="mt-4">
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="nama" id="" aria-describedby="helpId" placeholder="Nama Lengkap">
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="ttl" id="ttl" aria-describedby="helpId" placeholder="Tempat, Tanggal Lahir">
        <small>cth: Kutoarjo, 13 April 1995</small>
      </div>
      <div class="form-group col-sm-8">
        <select class="form-control" name="jkel" id="jkel">
          <option value="" disabled selected>Jenis Kelamin</option>
          <option value="Laki-laki">Laki - laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan" aria-describedby="helpId" placeholder="Kewarganegaraan">
      </div>
      <div class="form-group col-sm-8">
        <select class="form-control" name="status" id="status">
          <option value="" disabled selected>Status</option>
          <option value="Kawin">Kawin</option>
          <option value="Kawin">Belum Kawin</option>
        </select>
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" aria-describedby="helpId" placeholder="pekerjaan">
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="helpId" placeholder="Alamat">
      </div>
      <button type="submit" class="btn btn-primary">Buat Surat Keterangan Status</button>
    </form>
  </div>
</body>

</html>