<?php 
// cek apakah tidak ada data di $_GET
if (!isset($_GET['nama']) || !isset($_GET['nrp']) || !isset($_GET['email']) || !isset($_GET['gambar']) || !isset($_GET['jurusan'])) {
	// redirect
	header("location:latihan1.php");
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detail Mahasiswa</title>
</head>
<body>

	<ul>
		<li><img src="img/<?= $_GET['image']; ?>"></li>
		<li><?= $_GET['nama'] ?></li>
		<li><?= $_GET['nrp'] ?></li>
		<li><?= $_GET['email']; ?></li>
		<li><?= $_GET['jurusan']; ?></li>
	</ul>

	<a href="latihan1.php">Kembali ke Daftar Mahasiswa</a>
	
</body>
</html>