<?php 
$arr = [
    'nama' => "Atha",
    'kelas' => 8,
    'sekolah' => "TBZ BS",
    'umur' => 14
];

$arr2 = [
    'kamar' => 7,
    'jabatan' => "BEST",
    'bagian' => "Aktasi"
];

// array_values() = mencetak index masing-masing dari associativeArray
// $hasil = array_values($arr);

// array_keys() = mencetak kunci atau nama indexnya
// $hasil = array_keys($arr);

// array_merge(array1, array2) = menggabungkan 2 / lebih array
$hasil = array_merge($arr, $arr2);

var_dump($hasil);
?>