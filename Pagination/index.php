<?php 
session_start();
if (!isset($_SESSION['login'])) {
	header("location: login.php");
}
require 'template.php';

// pagination
// konfigurasi
$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
// membulatkan angka untuk halaman dengan count() / pembulatan ke terdekat

// $jumlahHalaman = round($jumlahData / $jumlahDataPerHalaman);

// membulatkan angka untuk halaman dengan floor() pembulatan ke bawah
// $jumlahHalaman = floor($jumlahData / $jumlahDataPerHalaman);

// membulatkan angka untuk halaman dengan floor() pembulatan ke atas
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

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
	<style>
		.disabled-pagination {
			pointer-events: none;
			cursor: default;
		}
	</style>
</head>
<body>

		<div class="col-lg-12">
			<h1 class="mt-2 text-center">Daftar Mahasiswa</h1>
			<a href="logout.php" class="btn btn-danger mt-2" onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')"><i class="fas fa-fw fa-sign-out-alt"></i> Keluar</a>
			<a href="tambah.php" class="btn btn-primary mt-2"><i class="fas fa-fw fa-user-plus"></i> Tambah Data Mahasiswa</a>&nbsp;
			<form action="" method="post" class="col-lg-3 float-right mt-2">
				<div class="form-group input-group">
					<input type="text" name="keyword" class="form-control" placeholder="Cari..." autocomplete="off">
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
			<!-- Navigasi -->
			<div class="pagination float-right">
				<?php if ($halamanAktif > 1): ?>
				    <a href="?halaman=<?= ($halamanAktif - 1); ?>" class="btn btn-secondary">Previous</a>&nbsp;
			    <?php else : ?>
				    <a href="" class="btn btn-secondary disabled-pagination">Previous</a>&nbsp;
				<?php endif ?>
			    <a href="?halaman=<?= $halamanAktif; ?>" class="btn btn-primary"><?= $halamanAktif; ?></a>&nbsp;
				<?php if ($halamanAktif < $jumlahHalaman): ?>
				    <a href="?halaman=<?= ($halamanAktif + 1); ?>" class="btn btn-secondary">Next</a>&nbsp;
				<?php else : ?>
				    <a href="" class="btn btn-secondary disabled-pagination">Next</a>&nbsp;
				<?php endif ?>
			</div>
		</div>

</body>
</html>