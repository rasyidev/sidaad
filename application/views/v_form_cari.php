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
if ($jenis_surat == "status") {
  $jenis_surat_lengkap = "Surat Keterangan Belum Menikah";
} else if ($jenis_surat == "sktm") {
  $jenis_surat_lengkap = "Surat Keterangan Tidak Mampu";
}

?>

<div class="row">
  <!-- DataTales Example -->
  <div class="card shadow mb-4 col-12">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Pilih Data Penduduk </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive table-hover table-sm">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="30%">NIK</th>
              <th width="55%">Nama</th>
              <th width="15%">Aksi</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th width="30%">NIK</th>
              <th width="55%">Nama</th>
              <th width="15%">Aksi</th>
            </tr>
          </tfoot>
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
  </div>
</div>