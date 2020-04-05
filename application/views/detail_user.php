<div class="card col-8 m-auto">
  <div class="card-body">
    <h2 class="text-center">Detail Data User</h2>
    <table class="table">
      <tbody>
        <tr>
          <td scope="row" width="40%">Username</td>
          <td>: <?= $user['username'] ?></td>
        </tr>
        <tr>
          <td scope="row" width="40%">Password</td>
          <td>: <?= $user['password'] ?></td>
        </tr>
        <tr>
          <td scope="row" width="40%">User Role</td>
          <td>: <?= $user['role_name'] ?></td>
        </tr>
      </tbody>
    </table>
    <a name="" id="" class="btn btn-primary text-right" href="<?= base_url('Dashboard/tampilUser') ?>" role="button">Kembali</a>
  </div>
</div>