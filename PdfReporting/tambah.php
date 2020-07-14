<?php
session_start();
if (!isset($_SESSION['login'])) {
	header("location: login.php");
}
require 'template.php';
// cek apakah tombol submit sudah ditekan
if (isset($_POST['submit'])) {
	// cek sukses insert / tidak
	if (tambah($_POST) > 0) { ?>
		<script>
			alert('Berhasil Menambah Data!');
			document.location.href='index.php';
		</script>
	<?php 
	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Data Mahasiswa</title>
</head>
<body>

	<div class="container">
		<h1 class="text-center">Tambah Data Mahasiswa</h1>
		<div class="row mt-5">
			<div class="col-md-4 m-auto">
				<form action="" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nrp">NRP</label>
						<input type="text" name="nrp" class="form-control" id="nrp" required>
					</div>
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" name="nama" class="form-control" id="nama" required>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" class="form-control" id="email" required>
					</div>
					<div class="form-group">
						<label for="jurusan">Jurusan</label>
						<input type="text" name="jurusan" class="form-control" id="jurusan" required>
					</div>
					<label for="gambar">Gambar</label>
					<div class="form-group custom-file">
						<input type="file" class="custom-file-input form-control" id="gambar" name="gambar" aria-describedby="inputGroupFileAddon01">
					    <label class="custom-file-label" for="gambar">Choose Image</label>
					</div>
					<div class="form-group mt-4">
						<a href="index.php" class="btn btn-danger"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
						<button type="submit" class="btn btn-success" name="submit"><i class="fas fa-fw fa-user-plus"></i> Add Data</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>