<?php 
// time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 january 1970
// echo time();

// penggabungan date dan time
// contoh
// echo date('d, M Y', time() + (60*60*24*100));
echo date('d M Y', time() - (60*60*24*100));
?>