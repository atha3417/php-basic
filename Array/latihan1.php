<?php 
// Array
// variabel yang dapat memiliki banyak nilai
// elemen pad array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu");
// cara baru
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Novemer", "Desember"];
$arr1 = [123, "tulisan", false];

// menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo '<br><br>';
// print_r($bulan);

// menampilkan 1 elemen pada array (echo)
// echo $arr1[0];
// echo "<br><br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Minggu";
echo '<br><br>';
var_dump($hari);
?>