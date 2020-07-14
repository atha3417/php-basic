<?php 
require 'template.php';
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC");

// tombol cari ditekan
if (isset($_POST['cari'])) {
	$mahasiswa = cari($_POST['keyword']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Admin</title>
</head>
<body>

		<div class="col-lg-12">
			<h1 class="mt-2">Daftar Mahasiswa</h1>
			<a href="tambah.php" class="btn btn-primary mt-2 mb-1"><i class="fas fa-fw fa-user-plus"></i> Tambah Data Mahasiswa</a>
			<br><br>
			<form action="" method="post" class="col-lg-3 float-right">
				<div class="form-group input-group">
					<input type="text" name="keyword" class="form-control" placeholder="Cari..." autofocus autocomplete="off">
	              	<button type="submit" name="cari" class="btn btn-info" style="border-radius: 0 !important;">
	                	<i class="fas fa-fw fa-search"></i>
	              	</button>
				</div>
			</form>
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