<?php
error_log(json_encode($_POST));

header('Content-Type: application/json');
require './config/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    header("Location: checkouttotal.php?error=Invalid request");
    exit;
}

$nama = trim($_POST['nama'] ?? '');
$email = trim($_POST['email'] ?? '');
$jumlah = preg_replace('/[^\d]/', '', $_POST['jumlah'] ?? '0'); 
$tanggal_transaksi = trim($_POST['tanggal_transaksi'] ?? '');
$sub_agen = trim($_POST['sub_agen'] ?? '');
$agen_pusat = trim($_POST['agen_pusat'] ?? '');


if (empty($nama) || empty($email) || empty($jumlah) || empty($tanggal_transaksi)) {

    header("Location: checkouttotal.php?error=Semua field wajib diisi");
    exit;
}

$sql = "INSERT INTO transaksiuser (nama, email, jumlah, tanggal_transaksi, sub_agen, agen_pusat) 
        VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssisss", $nama, $email, $jumlah, $tanggal_transaksi, $sub_agen, $agen_pusat);

if ($stmt->execute()) {

    header("Location: checkouttotal.php?success=Transaksi berhasil&referal=" . urlencode($sub_agen)); 
    exit;
} else {
   
    header("Location: checkouttotal.php?error=Gagal menyimpan transaksi");
    exit;
}

$stmt->close();
$conn->close();
?>
