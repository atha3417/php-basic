<?php 
// $_GET
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
	<title>$_GET</title>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>
	<ul>
	<?php foreach($mahasiwa as $mhs) : ?>
		<li>
			<a href="latihan2.php?nama=<?= $mhs['nama'] ?>&nrp=<?= $mhs['nrp']; ?>&&email=<?= $mhs['email']; ?>&&image=<?= $mhs['gambar']; ?>&&jurusan=<?= $mhs['jurusan']; ?>"><?= $mhs['nama']; ?></a>
		</li>
	<?php endforeach ?>
	</ul>
	
</body>
</html>