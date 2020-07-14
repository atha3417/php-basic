<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Admin</title>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>NRP</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
		<tr>
		<?php $i = 1; foreach($mahasiswa as $row) : ?>
			<th><?= $i; ?></th>
			<td>
				<a href="">ubah</a> | 
				<a href="">hapus</a>
			</td>
			<td>
				<img src="img/<?= $row['gambar']; ?>" width="50">
				<td><?= $row['nrp']; ?></td>
				<td><?= $row['nama']; ?></td>
				<td><?= $row['email']; ?></td>
				<td><?= $row['jurusan']; ?></td>
			</td>
		</tr>
		<?php $i++ ?>
		<?php endforeach; ?>
	</table>
	
</body>
</html>