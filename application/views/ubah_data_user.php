<div class="container m-auto">
    <h1 class="text-center">Form Ubah Data User</h1>
  <div class="row justify-content-center">

    <!-- Alert validasi data -->
    <?php if (validation_errors()) : ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?= validation_errors(); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>
    <form action="<?= base_url('dashboard/ubahUser') ?>" method="post" class="col col-10 col-md-8 ">
      <input type="hidden" name="user_id" value="<?=$user['user_id'] ?>">
      <div class="form-group">
        <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="Username" value="<?= $user['username'] ?>">
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
          <?php $i = 0; foreach ($daftar_role as $role) : ?>
            <?php $i++; ($role == "1") ? $role_name = "Administrator" : $role_name = "Operator" ?>
            <?php if ($role_name == $user['role_name']) : ?>
              <option value="<?= $i ?>" selected><?= $role_name ?></option>
            <?php else : ?>
              <option value="<?= $i ?>"><?= $role_name ?></option>
            <?php endif; ?>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="d-flex justify-content-end">
        <a name="" id="" class="btn btn-outline-warning" href="<?=base_url('Dashboard/tampilUser') ?>" role="button">Batal</a>
        <button type="submit" class="btn btn-primary ml-2" name="btn_tambah">Ubah Data User</button>
      </div>
    </form>
  </div>
</div>