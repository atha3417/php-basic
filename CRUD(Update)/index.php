<?php 
require 'template.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Admin</title>
</head>
<body>
	
	<div class="col-lg">
		<h1 class="mt-2">Daftar Mahasiswa</h1>
		<a href="tambah.php" class="btn btn-primary mt-2 mb-1"><i class="fas fa-fw fa-user-plus"></i> Tambah Data Mahasiswa</a>
		<br><br>
		<table class="table table-hover table-bordered table-striped">
			<thead>
				<tr class="text-center">
					<th>No.</th>
					<th>Aksi</th>
					<th>Gambar</th>
					<th>NRP</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Jurusan</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1; foreach($mahasiswa as $row) : ?>
				<tr class="text-center">
					<th><?= $i; ?></th>
					<td>
						<a href="ubah.php?id=<?= $row['id']; ?>" class="badge badge-pill badge-success">ubah</a> 
						<a href="hapus.php?id=<?= $row['id']; ?>" class="badge badge-pill badge-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">hapus</a>
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
			</tbody>
		</table>
	</div>

</body>
</html>