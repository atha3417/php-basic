<?php
require 'template.php';
// cek apakah tombol submit sudah ditekan
if (isset($_POST['submit'])) {
	// cek sukses insert / tidak
	if (tambah($_POST) > 0) { ?>
		<script>
			alert('Berhasil Menambah Data!');
			document.location.href='index.php';
		</script>
	<?php } else { ?>
		<script>
			alert('Gagal Menambah Data!');
			window.location='tambah.php';
		</script>"
	<?php
	} 
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Data Mahasiswa</title>
</head>
<body>

	<div class="container">
		<h2 class="text-center">Tambah Data Mahasiswa</h2>
		<div class="row mt-5">
			<div class="col-md-4 m-auto">
				<form action="" method="post">
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
					<div class="form-group">
						<label for="gambar">Gambar</label>
						<input type="text" name="gambar" class="form-control" id="gambar" required>
					</div>
					<div class="form-group">
						<a href="index.php" class="btn btn-danger"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
						<button type="submit" class="btn btn-success" name="submit"><i class="fas fa-fw fa-user-plus"></i> Add Data</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>