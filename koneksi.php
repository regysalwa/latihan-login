<?php

$host ='localhost';
$nama ='root';
$pass ='';
$db   ='db_login';

$koneksi = mysqli_connect($host, $nama, $pass, $db);

// Validasi berhasil terkoneksi atau tidak
if (!$koneksi){
    die("Koneksi gagal:".mysqli_connect_error());
}

?>