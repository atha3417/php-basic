<?php 
// Pengulangan pada array
// for / foreach
$angka = [53,24,6,7,2,534,23,2];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan 2</title>
	<style>
		.kotak {
			width: 50px;
			height: 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}
		.clear {
			clear: both;
		}
	</style>
</head>
<body>
	<!-- menampilkan array dengan for -->
	<?php for($i = 0; $i < count($angka); $i++) { ?>
		<div class="kotak"><?= $angka[$i]; ?></div>
	<?php } ?>

	<div class="clear"></div>

	<!-- menampilkan array dengan foreach (templating) -->
	<?php foreach($angka as $a) { ?>
		<div class="kotak"><?= $a ?></div>
	<?php } ?>

	<div class="clear"></div>

	<!-- menampilkan array dengan foreach (templating lebih rapi) -->
	<?php foreach($angka as $a) : ?>
		<div class="kotak"><?= $a ?></div>
	<?php endforeach; ?>
</body>
</html>