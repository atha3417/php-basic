<?php 
require 'template.php';
if (isset($_POST['register'])) {
	if (registrasi($_POST) > 0) {
		echo "<script>alert('User Baru Di Tambahkan!');</script>";
	} else {
		echo mysqli_error($conn);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Registrasi</title>
</head>
<body>

	<h1 class="text-center">Halaman Login</h1>
	<div class="col-md-4 m-auto">
	  	<form action="" method="post">
  	  	  	<div class="form-group">
  	  	    	<label for="username">Username</label>
  	  	    	<input type="text" class="form-control" name="username" id="username" autocomplete="off">
	  	  	</div>
	  	  	<div class="form-group">
	  	  		<label for="password">Password</label>
	  	  		<input type="password" name="password" id="password" class="form-control" autocomplete="off">
	  	  	</div>
	  	  	<div class="form-group">
	  	  		<label for="password2">Konfirmasi Password</label>
	  	  		<input type="password" name="password2" id="password2" class="form-control" autocomplete="off">
	  	  	</div>
	  	  	<div class="form-group">
		  	  <button type="submit" name="register" class="btn btn-primary"><i class="fas fa-fw fa-sign-in-alt"></i> Daftar</button>
	  	  	</div>
	  	</form>
	</div>
	
</body>
</html>