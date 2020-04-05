	<?php
	$data = $_POST;
	$conn = mysqli_connect('localhost', 'root', '', 'sidaad');
	extract($data);
	$date = date('d-m-Y');
	$query = "INSERT INTO transaksi VALUES 
			('', 
			'Surat Izin Keramaian', 
			'$nik', 
			'$user_id', 
			'$date'
			)";
	mysqli_query($conn, $query);
	?>
	<div class="not-to-be-printed">
		<a href="../dashboard" class="dashboard">Kembali ke Dashboard</a>
	</div>
	<style>
		p{
			font-size: 11pt;
		}
	</style>
	<letter>
		<!-- Start KOP -->
		<div class="kop" style="display: flex; align-items: center; margin-bottom: 10pt">
			<img src="<?= $logo ?>" height="80px" alt="" class="mr-4">
			<div class="header">
				<div class="header-text">
					<h2 class="text-bold text-center font14">PEMERINTAH KABUPATEN LAMPUNG SELATAN</h4>
						<h2 class="text-bold text-center font14">KECAMATAN JATI AGUNG</h2>
						<h1 class="text-bold text-center font16">KANTOR KEPALA DESA JATIMULYO</h1>
				</div>
			</div>
		</div>
		<div class="alamat">
			<hr class="line-bold">
			<p class="text-center">Sekretariat: Jalan P. Senopati No. 1 Desa Jatimulyo, Kec. Jati Agung, Lampung Selatan</p>
			<hr class="line-bold">
			<!-- End KOP -->
			<div class="d-flex justify-between">
				<table class="pl-0 mt-0">
					<tr height="1px">
						<td>
							<p>Nomor</p>
						</td>
						<td>
							<p>: 300/0462/ VII.08.08 /<?= romanMonth() ?>/ <?= date('Y') ?></p>
						</td>
					</tr>
					<tr height="12px">
						<td>
							<p>Lampiran</p>
						</td>
						<td>
							<p>: -</p>
						</td>
					</tr>
					<tr height="12px">
						<td>
							<p>Perihal</p>
						</td>
						<td>
							<p>: Pemberitahuan Kapolsek</p>
						</td>
					</tr>
				</table>

				<div class="text-box text-center pr-0">
					<p>Kepada Yth.</p>
					<p>Bapak Kapolsek Jati Agung</p>
					<p>Di -</p>
					<p>Tempat</p>
				</div>
			</div>

			<p>Dengan hormat,</p>
			<p class="text line-height-15 mt-0" contenteditable>Yang bertanda tangan dibawah ini Kepala Desa Jatimulyo Kecamatan Jati Agung telah didatangi oleh yang bersangkutan :</p>
			<div class="form ml-3 line-height-10" contenteditable>
				<table class="mt-1">
					<tr height="12px">
						<td width="200px">
							<p>1. Nama lengkap dan alias</p>
						</td>
						<td>
							<p class="uppercase text-bold">: <?= $nama ?></p>
						</td>
					</tr>
					<tr height="12px">
						<td width="200px">
							<p>2. Umur</p>
						</td>
						<td>
							<p>: <?= $umur ?></p>
						</td>
					</tr>
					<tr>
						<td width="200px">
							<p>3. Kewarganegaraan</p>
						</td>
						<td>
							<p>: <?= $kewarganegaraan ?></p>
						</td>
					</tr>
					<tr>
						<td width="200px">
							<p>4. Agama</p>
						</td>
						<td>
							<p>: <?= $agama ?></p>
						</td>
					</tr>
					<tr>
						<td width="200px">
							<p>5. Pekerjaan</p>
						</td>
						<td>
							<p>: <?= $pekerjaan ?></p>
						</td>
					</tr>
					<tr>
						<td width="200px">
							<p>6. Alamat</p>
						</td>
						<td>
							<p>: <?= $alamat ?></p>
						</td>
					</tr>
				</table>
			</div>
			<br>
			<p contenteditable>Bermaksud menyelenggarakan <b><?= $nama_acara ?></b> Pada :
			</p>

			<table class="mt-1 ml-4 mt-0">
				<tr>
					<td width="200px" style="height: 80%">
						<p contenteditable>Hari</p>
					</td>
					<td style="height: 80%">
						<p contenteditable>: <?= $hari_acara ?></p>
					</td>
				</tr>
				<tr height="12px">
					<td width="200px">
						<p contenteditable>Tanggal</p>
					</td>
					<td>
						<p contenteditable>: <?= $tanggal_acara ?></p>
					</td>
				</tr>
				<tr>
					<td width="200px">
						<p contenteditable>Waktu</p>
					</td>
					<td>
						<p contenteditable>: <?= $waktu_acara ?></p>
					</td>
				</tr>
				<tr>
					<td width="200px">
						<p contenteditable>Tempat</p>
					</td>
					<td>
						<p contenteditable>: <?= $tempat_acara ?></p>
					</td>
				</tr>
				<tr>
					<td width="200px">
						<p contenteditable>Hiburan</p>
					</td>
					<td>
						<p contenteditable>: <?= $hiburan ?></p>
					</td>
				</tr>
				<tr>
					<td width="200px">
						<p contenteditable>Nama Hiburan</p>
					</td>
					<td>
						<p contenteditable>: <?= $nama_hiburan ?></p>
					</td>
				<tr>
					<td width="200px">
						<p contenteditable>Pimpinan</p>
					</td>
					<td>
						<p contenteditable>: <?= $pimpinan ?></p>
					</td>
				</tr>
				<tr>
					<td width="200px">
						<p contenteditable>No. HP</p>
					</td>
					<td>
						<p contenteditable>: <?= $no_telp ?></p>
					</td>
				</tr>
				<tr>
					<td width="200px">
						<p contenteditable>Undangan</p>
					</td>
					<td>
						<p contenteditable>: <?= $jumlah_undangan ?> Orang</p>
					</td>
				</tr>
			</table>

			<p contenteditable class="mt-1">Demikian Surat Rekomendasi ini kami buat dengan sebenarnya, kiranya dapat dipergunakan sebagaimana mestinya.</p>
			<div class="d-flex justify-around" contenteditable>
				<div class="ttd text-center" contenteditable>
					<p contenteditable>Jatimulyo, <?= date('d') . ' ' . bulan() . ' ' . date('Y') ?></p>
					<p contenteditable>Kepala Desa Jatimulyo</p>
					<br>
					<br>
					<br>
					<br>
					<P contenteditable class="bold-underlined">SUMARDI, SE.</P>
				</div>
				<div class="pemohon text-center">
					<p contenteditable>PEMOHON</p>
					<br>
					<br>
					<br>
					<br>
					<br>
					<p contenteditable class="uppercase bold-underlined mt-05"><?= $nama ?></p>
				</div>
			</div>
			<br>
			<br>
			<br>
			<div class="d-flex justify-center">
				<div class="text-tembusan text-center">
					<p contenteditable>An DANRAMIL 421-09/TANJUNG BINTANG</p>
					<p contenteditable> DANPOSRAMIL JATI AGUNG</p>
					<br>
					<br>
					<br>
					<br>
					<p contenteditable>____________________________</p>
				</div>
			</div>
			<header>
			</header>

			<main>
			</main>

			<footer>
			</footer>
	</letter>

	<selectiontools id="selectiontools">
		<button id="btn-bold"><strong>B</strong></button>
		<button id="btn-italic"><em>I</em></button>
		<script src="app/js/selectiontools.js"></script>
	</selectiontools>