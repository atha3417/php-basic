<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trim</title>
</head>
<body>

	<h1>Belajar PHP</h1>
	<p><strong>trim menghilangkan spasi/whitespace diawal atau diakhir kata</strong></p>
	<?php 

	$text = " ini adalah input user ";
	echo 'sebelum'.$text;
	echo '<br>';
	$hasil = trim($text);
	// $hasil = ltrim($text);
	// $hasil = rtrim($text);
	echo 'sebelum'.$hasil;

	?>
	
</body>
</html>