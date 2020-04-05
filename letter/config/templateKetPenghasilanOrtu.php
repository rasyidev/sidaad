	<?php
	$data = $_POST;
	$conn = mysqli_connect('localhost', 'root', '', 'sidaad');
	extract($data);
	$date = date('d-m-Y');
	$query = "INSERT INTO transaksi VALUES 
			('', 
			'Surat Keterangan Penhasilan Orangtua', 
			'$nik', 
			'$user_id', 
			'$date'
			)";
	mysqli_query($conn, $query);
	?>
	<div class="not-to-be-printed">
		<a href="../dashboard" class="dashboard">Kembali ke Dashboard</a>
	</div>
	z
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
		</div>
		<div class="header text-center mt-1" contenteditable>
			<h1 class="bold-underlined font14" contenteditable>SURAT KETERANGAN PENGHASILAN</h1>
			<p contenteditable>Nomor: 470.3041.VII.08.08.<?= romanMonth() ?>.<?= date('Y') ?>
			</p>
		</div>


		<p class="text mt-2 line-height-15" contenteditable>Yang bertanda tangan dibawah ini Kepala Desa Jatimulyo, Kecamatan Jati Agung, Kabupaten Lampung Selatan menerangkan dengan sebenarnya bahwa :</p>
		<div class="form ml-3 line-height-10" contenteditable>
			<table class="mt-1">
				<tr height="12px">
					<td width="200px">
						<p> Nama</p>
					</td>
					<td>
						<p class="uppercase text-bold">: <?= $nama ?></p>
					</td>
				</tr>
				<tr>
					<td width="200px">
						<p> Tempat, Tanggal Lahir</p>
					</td>
					<td>
						<p>: <?= $ttl ?></p>
					</td>
				</tr>
				<tr>
					<td width="200px">
						<p> Jenis Kelamin</p>
					</td>
					<td>
						<p>: <?= $jkel ?></p>
					</td>
				</tr>
				<tr>
					<td width="200px">
						<p> Pekerjaan</p>
					</td>
					<td>
						<p>: <?= $pekerjaan ?></p>
					</td>
				</tr>
				<tr>
					<td width="200px">
						<p>&#9675; Alamat</p>
					</td>
					<td>
						<p>: <?= $alamat ?></p>
					</td>
				</tr>
			</table>
		</div>

		<br>
		<br>
		<p contenteditable>Nama tersebut di atas benar penduduk Desa <b>Jatimulyo</b> seperti yang tercantum di atas dan menurut keterangan yang bersangkutan mempunyai penghasilan <b> <?= $penghasilan ?></b> per bulan. dan jumlah tanggungan dalam keluarga <?= $jumlah_tanggungan ?> orang. Surat Keterangan ini diberikan kepada yang bersangkutan untuk dipergunakan sebagai salah satu syarat kelengkapan berkas <b><?= $tujuan_pembuatan ?></b>
		</p>
		<p contenteditable class="mt-1">Demikian Surat Keterangan ini kami berikan agar kiranya dapat dipergunakan sebagaimana mestinya.</p>
		<br>
		<div class="d-flex justify-content-end">
			<div class="ttd text-center" contenteditable>
				<p>Jatimulyo, <?= date('d') . ' ' . bulan() . ' ' . date('Y') ?></p>
				<p>Kepala Desa Jatimulyo</p>
				<br>
				<br>
				<br>
				<br>
				<br>
				<P class="bold-underlined">SUMARDI, SE.</P>
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