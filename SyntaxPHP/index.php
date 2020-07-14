<?php 
// Pertemuan 2 -PHP dasar
// Syntax PHP

// Standar Output
// contoh : 
// echo, print
// print_r,
// var_dump

// echo "Muhammad Atha Tsaqif";
// echo 54452517;
// print "Muhammad Atha Tsaqif ";
// echo false;
// print_r("Muhammad Atha Tsaqif");
// echo true;
// var_dump("Muhammad Atha Tsaqif");

// echo "Jum'at";

// Penulisan Syntax PHP
// 1. PHP didalam HTML
// 2. HTML didalam PHP

// Variabel dan tipe data
// variabel
// tidak boleh diawali dgn angka, tapi boleh mengandung dengan angka
// tidak boleh pakai - dan spasi

// $nama = "Muhammad Atha";

// echo "Halo, Nama Saya $nama";
// echo 'Halo, Nama Saya $nama';

// Operator
// Aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo 6 + 2; // kasih br biar jelas
// echo 6 - 2;
// echo 6 * 2;
// echo 6 / 2;
// echo 6 % 2;
// echo $x + $y;

// Penggabung String
// .
// $nama_depan = "Muhammad";
// $nama_belakang = "Atha";
// echo $nama_depan . " " . $nama_belakang;

// Operator Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;

// $nama = "Muhammad";
// $nama .= " ";
// $nama .= "Atha";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == 5);
// var_dump(1 <= 5);
// var_dump(1 == "1");

// Identitas
// ===, !==
// var_dump(1 === "1");

// Logika
// &&, ||, !
// $x = 10;
// var_dump($x < 20 && $x %2 == 1);
// var_dump($x < 2 || $x %2 == 0);
?>

<!-- PHP di dalam HTML -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Belajar PHP</title>
</head>
<body>
	<h1>Halo Selamat Datang <?php echo $nama; ?></h1>
</body>
</html> -->

<!-- HTML di dalam PHP -->
<!-- <?php echo "<h1>Halo, Selamat Datang Atha</h1>"; ?> -->
