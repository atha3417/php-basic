<?php 
$kotak = array('Kucing', 'Kura-kura', 'Koala', 'Kucing');
$nama = ['Atha', 'Fayza', 'Rayner', 'Marchelle'];

// array_unique() = mencetak hanya yang unik / hanya satu pada array
// $hasil = array_unique($kotak);

// array_reverse() = mencetak array secara terbalik / dari belakang ke depan
// $hasil = array_reverse($kotak);

// shuffle() = mengacak urutan array
// shuffle($kotak);
// $hasil = $kotak;

// count() = menghitung berapa banyak isi array
// $hasil = count($nama);

// sort() = mengurutkan array dari terkecil ke terbesar
sort($nama);
$hasil = $nama;

var_dump($hasil);
?>