<?php
$host = "localhost"; 
$user = "zaadul_admin"; 
$pass = "Admin12345!@#"; 
$db   = "zaadulmaad";

    $conn = new mysqli($host, $user, $pass, $db);
    

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
    ?>
