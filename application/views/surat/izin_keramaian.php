<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-center">Form Surat Izin Keramaian</h1>
        <form action="<?= base_url('letter/index_izin_keramaian.php') ?>" method="post" class="col col-10 col-md-8">
            <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>">
            <input type="hidden" name="nik" value="<?= $penduduk['nik'] ?>">
            <div class="form-group">
                <input type="text" class="form-control" name="nama" id="" aria-describedby="helpId" placeholder="Nama Lengkap" value="<?php if ($this->uri->segment(3) == $penduduk['nik']) {
                                                                                                                                            echo $penduduk['nama'];
                                                                                                                                        } ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="ttl" id="ttl" aria-describedby="helpId" placeholder="Tempat, Tanggal Lahir. Contoh: Bandar lampung, 21 Maret 1999" value="<?php if ($this->uri->segment(3) == $penduduk['nik']) {
                                                                                                                                                        echo $penduduk['ttl'];
                                                                                                                                                    } ?>">
            </div>
            <div class="form-group">
                <select class="form-control" name="agama" id="agama">
                    <option value="" disabled selected>Agama</option>
                    <?php foreach ($daftar_agama as $a) : ?>
                        <?php if ($penduduk['agama'] == $a) : ?>
                            <option value="<?= $a ?>" selected><?= $a ?></option>
                        <?php else : ?>
                            <option value="<?= $a ?>"><?= $a ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <select class="form-control" name="jkel" id="jkel">
                    <option value="" disabled selected>Jenis Kelamin</option>
                    <?php foreach ($daftar_jkel as $a) : ?>
                        <?php if ($penduduk['jkel'] == $a) : ?>
                            <option value="<?= $a ?>" selected><?= $a ?></option>
                        <?php else : ?>
                            <option value="<?= $a ?>"><?= $a ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <select class="form-control" name="kewarganegaraan" id="kewarganegaraan">
                    <option value="" disabled selected>Kewarganegaraan</option>
                    <?php foreach ($kewarganegaraan as $a) : ?>
                        <?php if ($penduduk['kewarganegaraan'] == $a) : ?>
                            <option value="<?= $a ?>" selected><?= $a ?></option>
                        <?php else : ?>
                            <option value="<?= $a ?>"><?= $a ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <select class="form-control" name="status" id="status">
                    <option value="" disabled selected>Status</option>
                    <?php foreach ($daftar_status as $a) : ?>
                        <?php if ($penduduk['status'] == $a) : ?>
                            <option value="<?= $a ?>" selected><?= $a ?></option>
                        <?php else : ?>
                            <option value="<?= $a ?>"><?= $a ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" aria-describedby="helpId" placeholder="Pekerjaan" value="<?php if ($this->uri->segment(3) == $penduduk['nik']) {
                                                                                                                                                        echo $penduduk['pekerjaan'];
                                                                                                                                                    } ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="helpId" placeholder="Alamat" value="<?php if ($this->uri->segment(3) == $penduduk['nik']) {
                                                                                                                                            echo $penduduk['alamat'];
                                                                                                                                        } ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="umur" id="umur" aria-describedby="helpId" placeholder="Umur">
            </div>
            <hr>
            <div class="form-group">
                <input type="text" class="form-control" name="nama_acara" id="tujuan_pembuatan" aria-describedby="helpId" placeholder="Nama Acara">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="hari_acara" id="hari_acara" aria-describedby="helpId" placeholder="Hari">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="tanggal_acara" id="tanggal_acara" aria-describedby="helpId" placeholder="Tanggal">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="waktu_acara" id="waktu_acara" aria-describedby="helpId" placeholder="Waktu">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="tempat_acara" id="tempat_acara" aria-describedby="helpId" placeholder="Tempat">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="hiburan" id="hiburan" aria-describedby="helpId" placeholder="Hiburan">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="nama_hiburan" id="nama_hiburan" aria-describedby="helpId" placeholder="Nama Hiburan">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="pimpinan" id="pimpinan" aria-describedby="helpId" placeholder="Pimpinan">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="no_telp" id="no_telp" aria-describedby="helpId" placeholder="Nomor Telepon">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="jumlah_undangan" id="jumlah_undangan" aria-describedby="helpId" placeholder="Jumlah Undangan">
            </div>

            <button type="submit" class="btn btn-primary">Buat Surat Izin Keramaian</button>
        </form>
    </div>
</div>