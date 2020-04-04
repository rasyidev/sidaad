
  <div class="card col-8 m-auto">
    <div class="card-body">
      <h2 class="text-center">Detail Data Penduduk</h2>
      <table class="table">
        <tbody>
          <tr>
            <td scope="row" width="40%">Nama</td>
            <td>: <?= $penduduk['nama'] ?></td>
          </tr>
          <tr>
            <td scope="row" width="40%">NIK</td>
            <td>: <?= $penduduk['nik'] ?></td>
          </tr>
          <tr>
            <td scope="row" width="40%">Tempat, Tanggal Lahir</td>
            <td>: <?= $penduduk['ttl'] ?></td>
          </tr>
          <tr>
            <td scope="row" width="40%">Agama</td>
            <td>: <?= $penduduk['agama'] ?></td>
          </tr>
          <tr>
            <td scope="row" width="40%">Jenis Kelamin</td>
            <td>: <?= $penduduk['jkel'] ?></td>
          </tr>
          <tr>
            <td scope="row" width="40%">Kewarganegaraan</td>
            <td>: <?= $penduduk['kewarganegaraan'] ?></td>
          </tr>
          <tr>
            <td scope="row" width="40%">Status</td>
            <td>: <?= $penduduk['status'] ?></td>
          </tr>
          <tr>
            <td scope="row" width="40%">Pekerjaan</td>
            <td>: <?= $penduduk['pekerjaan'] ?></td>
          </tr>
          <tr>
            <td scope="row" width="40%">Alamat</td>
            <td>: <?= $penduduk['alamat'] ?></td>
          </tr>
        </tbody>
      </table>
      <a name="" id="" class="btn btn-primary text-right" href="<?=base_url('DataPenduduk') ?>" role="button">Kembali</a>
    </div>
  </div>