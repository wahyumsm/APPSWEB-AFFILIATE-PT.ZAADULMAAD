<?php
session_start();

// Hapus cookies dengan mengatur waktu kedaluwarsa ke waktu lalu
setcookie("user_email", "", time() - 3600, "/");
setcookie("user_name", "", time() - 3600, "/");

// Hancurkan sesi
session_destroy();

// Redirect ke halaman login setelah logout
header("Location: daftarproduk.php");
exit();
?>
