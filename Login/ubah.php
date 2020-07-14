<?php
require 'template.php';
$id = $_GET['id'];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
if (isset($_POST['submit'])) {
	if (ubah($_POST) > 0) { ?>
		<script>
			alert('Berhasil Mengubah Data!');
			document.location.href='index.php';
		</script>
	<?php } else { ?>
		<script>
			alert('Gagal Mengubah Data!');
			window.location='index.php';
		</script>"
	<?php
	} 
} ?>
<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<title>Ubah Data Mahasiswa</title>
</head>
<body>

	<div class="container">
		<h2 class="text-center">Ubah Data Mahasiswa</h2>
		<div class="row mt-5">
			<div class="col-md-4 m-auto">
				<form action="" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<input type="hidden" name="id" value="<?= $mhs['id']; ?>">
						<input type="hidden" name="gambarLama" value="<?= $mhs['gambar']; ?>">
						<label for="nrp">NRP</label>
						<input type="text" name="nrp" class="form-control" id="nrp" value="<?= $mhs['nrp']; ?>" required>
					</div>
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" name="nama" class="form-control" id="nama" value="<?= $mhs['nama']; ?>" required>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" class="form-control" id="email" value="<?= $mhs['email']; ?>" required>
					</div>
					<div class="form-group">
						<label for="jurusan">Jurusan</label>
						<input type="text" name="jurusan" class="form-control" id="jurusan" value="<?= $mhs['jurusan']; ?>" required>
					</div>
					<label for="gambar">Gambar</label><br>
					<a href="img/<?= $mhs['gambar']; ?>" title="View Image On New Tab" target="_blank">
						<img src="img/<?= $mhs['gambar']; ?>" alt="<?= $mhs['gambar']; ?>" width="30%" class="img-thumbnail">
					</a>
					<br>
					<small class="text-info">Kosongkan Jika Tidak Mau Mengganti Gambar <i class="fas fa-fw fa-arrow-down"></i></small>
					<div class="form-group custom-file mt-2">
						<input type="file" class="custom-file-input form-control" id="gambar" name="gambar" aria-describedby="inputGroupFileAddon01">
					    <label class="custom-file-label" for="gambar">Choose Image</label>
					</div>
					<div class="form-group mt-4">
						<a href="index.php" class="btn btn-danger"><i class="fas fa-fw fa-arrow-left"></i> Kembali</a>
						<button type="submit" class="btn btn-success" name="submit"><i class="fas fa-fw fa-user-edit"></i> Ubah Data</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>