<letter>
	<?php
$data = $_POST;
$conn = mysqli_connect('localhost', 'root', '', 'sidaad');
extract($data);
$date = date('d-m-Y');
$query = "INSERT INTO transaksi VALUES 
    ('', 
    'Surat Keterangan Status Pernikahan', 
    '$nik', 
    '$user_id', 
    '$date'
    )";
mysqli_query($conn, $query);

	?>
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
		<h1 class="bold-underlined" contenteditable>SURAT KETERANGAN BELUM MENIKAH</h1>
		<p contenteditable>Nomor: 470.447.VII.08.08.III.2020
		</p>
	</div>


	<p class="text mt-2 line-height-15" contenteditable>Yang bertanda tangan dibawah ini Kepala Desa Jatimulyo, Kecamatan Jati Agung, Kabupaten Lampung Selatan menerangkan dengan sebenarnya bahwa :</p>
	<div class="form ml-3 line-height-10" contenteditable>
		<table class="mt-1">
			<tr height="12px">
				<td width="200px">
					<p>&#9675; Nama</p>
				</td>
				<td>
					<p>: <?=$nama ?></p>
				</td>
			</tr>
			<tr>
				<td width="200px">
					<p>&#9675; Jenis Kelamin</p>
				</td>
				<td>
					<p>: <?=$jkel ?></p>
				</td>
			</tr>
			<tr>
				<td width="200px">
					<p>&#9675; Tempat, Tanggal Lahir</p>
				</td>
				<td>
					<p>: <?=$ttl ?></p>
				</td>
			</tr>
			<tr>
				<td width="200px">
					<p>&#9675; Warga Negara</p>
				</td>
				<td>
					<p>: <?=$kewarganegaraan ?></p>
				</td>
			</tr>
			<tr>
				<td width="200px">
					<p>&#9675; Agama</p>
				</td>
				<td>
					<p>: <?=$agama ?></p>
				</td>
			</tr>
			<tr>
				<td width="200px">
					<p>&#9675; Status Perkawinan</p>
				</td>
				<td>
					<p>: <?=$status ?></p>
				</td>
			</tr>

			<tr>
				<td width="200px">
					<p>&#9675; Pekerjaan</p>
				</td>
				<td>
					<p>: <?=$pekerjaan ?></p>
				</td>
			</tr>
			<tr>
				<td width="200px">
					<p>&#9675; Alamat</p>
				</td>
				<td>
					<p>: <?=$alamat ?></p>
				</td>
			</tr>
		</table>
	</div>

	<br>
	<br>
	<p contenteditable="">Adalah benar warga desa kami yang berdomisili dengan alamat tersebut diatas, berdasarkan dari laporan pamong setempat dan juga pengamatan kami warga kami tersebut benar Belum Pernah Menikah (Jejaka/Perawan).
	</p>
	<p contenteditable class="mt-1">Demikian Surat Keterangan ini kami berikan agar kiranya dapat dipergunakan sebagaimana mestinya.</p>

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