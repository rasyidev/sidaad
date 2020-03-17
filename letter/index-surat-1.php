<?php require 'app/app.php' ?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<title><?= $title ?></title>
	<style>
		<?=$styles ?>

	</style>
	<!-- <link rel="stylesheet" href="../assets/vendor/css/bootstrap.min.css"> ; -->
	<!-- <link rel="stylesheet" href="..assets/vendor/css/style.css"> -->
	<link rel="icon" href="<?= $favicon ?>" type="image/png" />

</head>

<body>
	<?php $surat = "templateSurat1.php"; ?>
	<?php createSurat($surat) ?>
</body>

</html>
