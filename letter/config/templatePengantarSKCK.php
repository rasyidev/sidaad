	<?php
	$data = $_POST;
	$conn = mysqli_connect('localhost', 'root', '', 'sidaad');
	extract($data);
	$date = date('d-m-Y');
	$query = "INSERT INTO transaksi VALUES 
			('', 
			'Surat Pengantar SKCK', 
			'$nik', 
			'$user_id', 
			'$date'
			)";
	mysqli_query($conn, $query);
	?>
	<div class="not-to-be-printed">
		<a href="../dashboard" class="dashboard">Kembali ke Dashboard</a>
	</div>

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
				<table class="pl-0">
					<tr height="12px">
						<td>
							<p>Nomor</p>
						</td>
						<td>
							<p>: 300/634/ VII.08.08 /<?= romanMonth() ?>/ <?= date('Y') ?></p>
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
							<p>: Mohon Diterbitkan SKCK</p>
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
			<p class="text line-height-15" contenteditable>Yang bertanda tangan dibawah ini Kepala Desa Jatimulyo Kecamatan Jati Agung telah didatangi oleh yang bersangkutan :</p>
			<div class="form ml-3 line-height-10" contenteditable>
				<table class="mt-1">
					<tr height="12px">
						<td width="200px">
							<p>Nama</p>
						</td>
						<td>
							<p class="uppercase text-bold">: <?= $nama ?></p>
						</td>
					</tr>
					<tr>
						<td width="200px">
							<p>NIK</p>
						</td>
						<td>
							<p>: <?= $nik ?></p>
						</td>
					</tr>
					<tr>
						<td width="200px">
							<p>Tempat, Tanggal Lahir</p>
						</td>
						<td>
							<p>: <?= $ttl ?></p>
						</td>
					</tr>
					<tr>
						<td width="200px">
							<p>Jenis Kelamin</p>
						</td>
						<td>
							<p>: <?= $jkel ?></p>
						</td>
					</tr>
					<tr>
						<td width="200px">
							<p>Agama</p>
						</td>
						<td>
							<p>: <?= $agama ?></p>
						</td>
					</tr>
					<tr>
						<td width="200px">
							<p>Status Perkawinan</p>
						</td>
						<td>
							<p>: <?= $status ?></p>
						</td>
					</tr>
					<tr>
						<td width="200px">
							<p>Warga Negara</p>
						</td>
						<td>
							<p>: <?= $kewarganegaraan ?></p>
						</td>
					</tr>
					<tr>
						<td width="200px">
							<p>Pekerjaan</p>
						</td>
						<td>
							<p>: <?= $pekerjaan ?></p>
						</td>
					</tr>
					<tr>
						<td width="200px">
							<p>Alamat</p>
						</td>
						<td>
							<p>: <?= $alamat ?></p>
						</td>
					</tr>
				</table>
			</div>
			<br>
			<p contenteditable><b>Keperluan :</b></p>
			<p contenteditable>Mohon diterbitkan Surat Keterangan Catatan Kepolisian ( SKCK ) dari Polres Lampung Selatan untuk keperluan : <b><?= $keperluan ?>.</b></p>
			<p contenteditable>Sebagai bahan pertimbangan bapak kami sampaikan bahwa selama berdomisili di desa Jatimulyo Kec. Jati Agung Kab. Lampung Selatan yang bersangkutan beradat istiadat dan berkelakuan baik, tidak pernah melakukan tindakan yang melanggar hukum yang berlaku serta bebas dari narkoba.
				Demikian surat permohonan ini dibuat dengan sebenarnya agar dapat dipergunakan sebagaimana mestinya.
			</p>
			<br>
			<div class="d-flex justify-content-end">
				<div class="ttd text-center" contenteditable>
					<p contenteditable>Jatimulyo, <?= date('d') . ' ' . bulan() . ' ' . date('Y') ?></p>
					<p contenteditable>Kepala Desa Jatimulyo</p>
					<br>
					<br>
					<br>
					<br>
					<br>
					<P contenteditable class="bold-underlined">SUMARDI, SE.</P>
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