<?php 
function salam($nama = "Admin", $waktu = "Datang") {
	return "Selamat $waktu, $nama!";
}

function berteriak($callback) {
	echo "HALOOOOOOOO <br>";
	// $callback();
	if (is_callable($callback)) {
		call_user_func($callback, 'Selamat Datang');
	} else {
		echo ' dia bukan fungsi';
	}
}

// callback function

// berteriak(function() {
// 	echo 'Saya anonymous function alias ga punya nama';
// });

$panggil = function($text) {
	echo $text;
};

// berteriak(312321);
berteriak($panggil);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan Function</title>
</head>
<body>
	<h1><?= salam('Atha', 'Malam'); ?></h1>
</body>
</html>