<?php 
// sleep(1);
usleep(200000);
require '../functions.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM mahasiswa 
			WHERE nama LIKE '%$keyword%' 
			OR nrp LIKE '%$keyword%' 
			OR email LIKE '%$keyword%' 
			OR jurusan LIKE '%$keyword%'";
$mahasiswa = query($query);

?>

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