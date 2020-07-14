<?php 
// $mahasiwa = [
// 	["Sandhika Galih", "87473442", "sandhikagalih@unpas.ac.id", "Teknik Informatika"],
// 	["327364334223", "Doddy Ferdiansyah", "dody@gmail.com", "Teknik Industri"],
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiwa = [
	[
	'nrp' => "78467834233432",
	'email' => "sandhikagalih@unpas.ac.id",
	'nama' => "Sandhika Galih",
	'jurusan' => "Teknik Informatika",
	'gambar' => "1.jpg"
	],
	[
	'nama' => "Doddy Ferdiansyah",
	'jurusan' => "Teknik Industri",
	'nrp' => "43892342378234",
	'email' => "doddy@gmail.com",
	'gambar' => "2.jpg"
	]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daftar Mahasiswa</title>
</head>
<body>
	
	<h1>Daftar Mahasiswa</h1>
	<?php foreach ($mahasiwa as $mhs): ?>
		<ul>
			<li>
				<img src="img/<?= $mhs["gambar"] ?>">
			</li>
			<li>Nama : <?= $mhs['nama'] ?></li>
			<li>NRP : <?= $mhs['nrp'] ?></li>
			<li>Jurusan : <?= $mhs['jurusan'] ?></li>
			<li>Email : <?= $mhs['email'] ?></li>
		</ul>
	<?php endforeach; ?>

</body>
</html>