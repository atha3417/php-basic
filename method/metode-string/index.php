<?php 
$text = "Hi, Semuanya di Sini";

// strlen() = menghitung panjang sebuah string
// $hasil = strlen($text);

// str_word_count() = menghitung berapa banyak kata pada string
// $hasil = str_word_count($text);

// str_replace(kataYangMauDihapus, kataBaruYangAkanMenggantikannya, sumberTextnya) = mengganti kata tertentu
// $hasil = str_replace("Hi", "Halo", $text);

// str_repeat(teksYangAkanDiulang, berapaKaliDiulangnya) = mengulang kata tertentu
// $hasil = str_repeat("Hi", 10);

// str_shuffle() = mengacak sebuah string
$hasil = str_shuffle($text);

echo $hasil;
?>