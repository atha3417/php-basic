<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Implode</title>
</head>
<body>

	<h1>Belajar PHP</h1>
	<p><strong>implode menggabungkan beberapa array menjadi 1 string</strong></p>
	<?php 
	$pekerjaan = ["Programmer", "Designer", "Manager"];
	// implode(separator, array)
	$hasil = implode(" ", $pekerjaan);
	echo $hasil;
	?>
	
</body>
</html>