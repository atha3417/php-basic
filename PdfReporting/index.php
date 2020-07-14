<?php 
session_start();
if (!isset($_SESSION['login'])) {
	header("location: login.php");
}
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
	<style>
		.loader {
			width: 150px;
			position: absolute;
			top: 35px;
			left: 914px;
			z-index: -1;
			display: none;
		}

		@media print {
			.hilang {
				display: none;
			}
			.margin {
				margin-top: 50px;
				margin-bottom: 30px;
			}
		}
	</style>
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/script.js"></script>
</head>
<?php $print = false; ?>
<body <?= $print == true ? 'onload="window.print()"' : null; ?>>

		<div class="col-lg-12">
			<h1 class="mt-2 text-center margin">Daftar Mahasiswa</h1>
			<a href="tambah.php" class="btn btn-primary mt-2 hilang"><i class="fas fa-fw fa-user-plus"></i> Tambah Data Mahasiswa</a>
			<a href="logout.php" class="btn btn-danger mt-2 hilang" onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')"><i class="fas fa-fw fa-sign-out-alt"></i> Keluar</a>
			<a href="cetak.php" class="btn btn-secondary hilang mt-2" target="_blank"><i class="fas fa-fw fa-print"></i> Cetak</a>
			<img src="img/loader.gif" class="loader">
			<form action="" method="post" class="col-lg-3 float-right mt-2 hilang">
				<div class="form-group input-group">
					<input type="text" name="keyword" id="keyword" class="form-control" placeholder="Cari..." autocomplete="off" autofocus>
	              	<button type="submit" name="cari" id="tombol-cari" class="btn btn-info" style="border-radius: 0 !important;">
	                	<i class="fas fa-fw fa-search"></i>
	              	</button>
				</div>
			</form>
			<div id="container">
				<table class="table table-hover table-bordered table-striped">
					<thead>
						<tr class="text-center">
							<th>No.</th>
							<th>Gambar</th>
							<th>NRP</th>
							<th>Nama</th>
							<th>Email</th>
							<th>Jurusan</th>
							<th class="hilang">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; foreach($mahasiswa as $row) : ?>
						<tr class="text-center">
							<th><?= $i; ?></th>
							<td>
								<img src="img/<?= $row['gambar']; ?>" width="50">
								<td><?= $row['nrp']; ?></td>
								<td><?= $row['nama']; ?></td>
								<td><?= $row['email']; ?></td>
								<td><?= $row['jurusan']; ?></td>
							</td>
							<td class="hilang">
								<a href="ubah.php?id=<?= $row['id']; ?>" class="badge badge-pill badge-success">ubah</a> 
								<a href="hapus.php?id=<?= $row['id']; ?>" class="badge badge-pill badge-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">hapus</a>
							</td>
						</tr>
						<?php $i++ ?>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>

</body>
</html>