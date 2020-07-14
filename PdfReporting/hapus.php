<?php 
session_start();
if (!isset($_SESSION['login'])) {
	header("location: login.php");
}
require 'functions.php';
$id = $_GET['id'];
if (hapus($id) > 0) { ?>
	<script>
		alert('Berhasil Menghapus Data!');
		document.location.href='index.php';
	</script>
<?php } else { ?>
	<script>
		alert('Gagal Menghapus Data!');
		window.location='index.php';
	</script>"
<?php } ?>