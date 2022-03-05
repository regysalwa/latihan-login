<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
if (isset($_POST['Login'])) {
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password =  md5($_POST['password']);
//md5 digunakan untuk proses enkripsi password yang di inputkan
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from tb_user where user='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['role']=="admin"){
		// buat session login dan username
        $_SESSION['id_user'] = $data['id_user'];
		$_SESSION['status'] = "login";
		$_SESSION['username'] = $username;
		// alihkan ke halaman  admin
		header("location:admin.php");
 
	// cek jika user login sebagai user
	}else if($data['role']=="user"){
		// buat session login dan username
        $_SESSION['id_user'] = $data['id_user'];
		$_SESSION['status'] = "login";
		$_SESSION['username'] = $username;
		// alihkan ke halaman user
		header("location:user.php");
 
	}else{
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
        $pesan = "Username atau Password tidak sesuai";
	}	
}else{
	header("location:index.php?pesan=gagal");
    $pesan = "Login gagal";
}
}

?>