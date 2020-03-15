<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('assets/vendor/adminlte/') ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <title>Admin - tambah operator</title>
</head>

<body>
  <div class="container-fluid col-md-4">
    <h2 class="text-center mb-3">Form Tambah Operator</h2>
    <form action="<?=base_url('admin/tambahOperator') ?>" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="Username">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Password">
          <label for="roleID">Role</label>
          <select class="form-control" name="roleID" id="roleID">
            <option value="1">Administrator</option>
            <option value="2">Operator</option>
          </select>
        </div>
        <button type="submit" name="tambah">Tambah Operator</button>
      </div>
    </form>
  </div>
</body>

</html>