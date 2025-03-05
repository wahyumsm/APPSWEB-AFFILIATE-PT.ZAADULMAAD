<?php
require './config/database.php'; 

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(["success" => false, "message" => "Invalid request"]);
    exit;
}


$nama = $_POST['nama'] ?? '';
$peran = $_POST['peran'] ?? '';
$induk_keagenan = $_POST['induk_keagenan'] ?? '';
$kontak = $_POST['kontak'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$bank = $_POST['bank'] ?? '';
$rekening = $_POST['rekening'] ?? '';


if (empty($nama) || empty($peran) || empty($induk_keagenan) || empty($kontak) || empty($email) || empty($password) || empty($bank) || empty($rekening)) {
    echo json_encode(["success" => false, "message" => "Semua kolom wajib diisi"]);
    exit;
}


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(["success" => false, "message" => "Format email tidak valid"]);
    exit;
}
if (!preg_match('/^[0-9]{10,15}$/', $kontak)) {
    echo json_encode(["success" => false, "message" => "Nomor kontak tidak valid"]);
    exit;
}


$hashed_password = password_hash($password, PASSWORD_BCRYPT);


function generateReferralCode($length = 8) {
    return strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, $length));
}

$kode_referral = generateReferralCode();


$sql = "INSERT INTO agen (nama, peran, induk_keagenan, kontak, email, password, bank, rekening, kode_referral) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssss", $nama, $peran, $induk_keagenan, $kontak, $email, $hashed_password, $bank, $rekening, $kode_referral);

if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Pendaftaran berhasil!", "kode_referral" => $kode_referral]);
} else {
    echo json_encode(["success" => false, "message" => "Nomor kontak atau email sudah terdaftar"]);
}

$stmt->close();
$conn->close();
?>
