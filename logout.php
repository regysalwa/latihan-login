<?php
session_start();
//perintah mengakhiri session:
session_destroy();
//mengalihkan kembali ke halaman login
header('location:index.php');
?>