<?php 
session_start();
require 'template.php';
// cek cookie
if (isset($_COOKIE['randomkeystring']) && isset($_COOKIE['randomstringkey'])) {
	$id = $_COOKIE['randomkeystring'];
	$key = $_COOKIE['randomstringkey'];

	// ambil username berdasarkan id
	$result = mysqli_query($conn, "SELECT username FROM user WHERE id = '$id'");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username
	if ($key === hash('sha256', $row['username'])) {
		$_SESSION['login'] = true;
	}
}

if (isset($_SESSION['login'])) {
	header("location: index.php");
	exit;
}


if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
	// cek username
	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_array($result);
		// cek aktif / tidak
		if ($row['is_active'] == 1) {
			// cek password
			if(password_verify($password, $row['password'])) {
				// set session
				$_SESSION['login'] = true;
				// cek remember me
				if (isset($_POST['remember'])) {
					// buat cookie
					setcookie('randomkeystring', $row['id'], time() + 120);
					setcookie('randomstringkey', hash('sha256', $row['username']), time() + 120);
				}

				header("location: index.php");
				exit;
			} else {
				$pass_error = true;
			}
		} else {
			$aktif_error = true;
		}
	} else {
		$user_error = true;
	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Login</title>
</head>
<body>

	<h1 class="text-center">Halaman Login</h1>

	<div class="col-md-4 m-auto">
		<?php if (isset($user_error)): ?>
			<div class="alert alert-danger text-center mt-3">Username Tidak Terdafar!</div>
		<?php endif ?>
		<?php if (isset($pass_error)): ?>
			<div class="alert alert-danger text-center mt-3">Password Salah!</div>
		<?php endif ?>
		<?php if (isset($aktif_error)): ?>
			<div class="alert alert-danger text-center mt-3">Username Belum diaktifkan Oleh Admin!</div>
		<?php endif ?>
		<form action="" method="post" class="mt-2">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" id="username" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control" required>
			</div>
			<div class="form-group custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" id="remember" name="remember">
				<label class="custom-control-label" for="remember">Remember Me</label>
	        </div>
			<div class="form-group">
				<button type="submit" name="login" class="btn btn-primary"><i class="fas fa-fw fa-sign-in-alt"></i> Masuk</button>
			</div>
		</form>
	</div>
	
</body>
</html>