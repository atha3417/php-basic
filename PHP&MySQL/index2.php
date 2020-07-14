<?php 
// Koneksi ke Database
// $conn = mysqli_connect('localhost', 'root', '', 'phpdasar');
require 'functions.php';
// ambil data mahasiswa / query
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
if (!$result) {
	echo mysqli_error($conn);
}
// ambil data (fetch) dari object result
// caranya ad 4 : 
// mysqli_fetch_row(); // mengembalikan array numerik
// mysqli_fetch_assoc(); // mengembalikan array associative
// mysqli_fetch_array(); // mengembalikan array numerik dan associative
// mysqli_fetch_object(); // mengembalikan object, pemanggilannya dengan cara "$variabel->nama_fieldnya;" tanpa petik

// mysqli_fetch_assoc();
// $mhs = mysqli_fetch_row($result);
// var_dump($mhs[1]);

// mysqli_fetch_assoc();
// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs['jurusan']);

// mysqli_fetch_array();
// $mhs = mysqli_fetch_array($result);
// var_dump($mhs);
// var_dump($mhs['jurusan']);

// mysqli_fetch_object();
// $mhs = mysqli_fetch_object($result);
// var_dump($mhs->nama);

// menampilkan seluruh isi array dari mysqli_fetch_assoc();
// while(mysqli_fetch_assoc($result)) {
// 	var_dump($mhs);
// }
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
		<?php $i = 1; while($row = mysqli_fetch_assoc($result)) : ?>
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
		<?php endwhile; ?>
	</table>
	
</body>
</html>