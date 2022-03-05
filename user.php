<?php 
    require 'proses.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman user</title>
</head>

<body>
    <h3>
        Halaman Hak Akses user
    </h3>
    
    Selamat datang: <br>
    <!-- Mengambil dan menampilkan data user yang login dengan session php -->
    Username = <?= $_SESSION['username'] ?> <br>
    ID User = <?= $_SESSION['id_user'] ?> <br>

    <a href="logout.php"><button>Keluar</button></a>
</body>

</html>