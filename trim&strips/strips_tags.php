<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Strips</title>
</head>
<body>

	<h1>Belajar PHP</h1>
	<p><strong>strips_tags mencegah user memasukkan kode html/css/js</strong></p>

	<?php 
	$text = "<script>alert('Halo')</script>";
	$text2 = "<h1><strong>Halo </strong> <sup>Semuanya</sup></h1>";

	// $hasil = strip_tags($text);
	$hasil = strip_tags($text2, "<strong>");

	// echo $text;
	// echo $text2;
	echo $hasil;
	?>
	
</body>
</html>