<?php 
// cek apakah tombol sudah di pencet
if (isset($_POST['submit'])) {
	// cek username dan password
	if ($_POST['name'] == 'Admin' && $_POST['password'] == "myPassword") {
		// jika benar redirect ke admin.php
		header('location: admin.php');
	} else {
		// jika salah tampilkan pesan kesalahan
		$error = true;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halam Login</title>
	<style>
		.btn {
			display: inline-block;
			font-weight: 400;
			color: #212529;
			text-align: center;
			vertical-align: middle;
			cursor: pointer;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			background-color: transparent;
			border: 1px solid transparent;
			padding: .105rem .75rem;
			font-size: 1rem;
			line-height: 1.5;
			border-radius: .25rem;
			transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
		}

		.btn:hover {
			color: #212529;
			text-decoration: none
		}

		.btn-primary {
			color: #fff;
			background-color: #007bff;
			border-color: #007bff
		}

		.btn-primary:hover {
			color: #fff;
			background-color: #0069d9;
			border-color: #0062cc
		}
		.error {
			color: red;
			font-style: italic;
		}
	</style>
</head>
<body>

	<h1>Halaman Login!</h1>
	<?php if (isset($error)): ?>
		<p class="error"><b>username / password salah!</b></p>
	<?php endif ?>
	<ul>
		<div>
			<form action="" method="post">
				<li>
					<label for="username">Username : </label>
					<input type="text" name="name" id="username">
				</li>
				<li>
					<label for="password">Password : </label>
					<input type="password" name="password" id="password" style="margin-left: 3.5px;">
				</li>
				<li>
					<button type="submit" name="submit" class="btn btn-primary">Login</button>
				</li>
			</form>
		</div>
	</ul>
	
</body>
</html>