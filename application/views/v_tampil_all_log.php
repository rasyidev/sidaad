<div class="row">
  <!-- DataTales Example -->
  <div class="card shadow mb-4 col-12">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Mobil Dan Pemilik</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive table-hover table-sm">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th scope="col">Nama Pemohon</th>
              <th scope="col">Jenis Surat</th>
              <th scope="col">Tanggal Dibuat</th>
              <th scope="col">Operator</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th scope="col">Nama Pemohon</th>
              <th scope="col">Jenis Surat</th>
              <th scope="col">Tanggal Dibuat</th>
              <th scope="col">Operator</th>
            </tr>
          </tfoot>
          <tbody>
            <?php foreach ($allLog as $p) : ?>
              <tr>
                <td class="py-1"><?= $p['nama'] ?></td>
                <td class="py-1"><?= $p['jenis_surat'] ?></td>
                <td class="py-1"><?= $p['created_at'] ?></td>
                <td class="py-1"><?= $p['username'] ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>