<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Implode</title>
</head>
<body>

	<h1>Belajar PHP</h1>
	<p><strong>explode mengubah beberapa kata menjadi beberapa string</strong></p>
	<?php 
	$pelajaran = "HTML, CSS, JavaScript, PHP, Database/MySql, Ruby, Perl";
	// explode(separator, string, 'optional-BerapaJumlahKataYangMauDiubah')
	echo $pelajaran;
	$hasil = explode(" ", $pelajaran, 5);
	var_dump($hasil);
	?>
	
</body>
</html>