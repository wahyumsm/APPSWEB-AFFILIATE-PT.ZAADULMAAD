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
$kode_referral = $_POST['kode_referral'] ?? '';  // Ambil kode referral yang dimasukkan

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

// Cek apakah kode referral valid
if (!empty($kode_referral)) {
    $sql_check_referral = "SELECT id FROM agen WHERE kode_referral = ?";
    $stmt_check_referral = $conn->prepare($sql_check_referral);
    $stmt_check_referral->bind_param("s", $kode_referral);
    $stmt_check_referral->execute();
    $result = $stmt_check_referral->get_result();

    if ($result->num_rows === 0) {
        echo json_encode(["success" => false, "message" => "Kode referral tidak valid"]);
        exit;
    }
    $stmt_check_referral->close();
} else {
    // Jika kode referral tidak dimasukkan, bisa lanjut tanpa pengecekan
    $kode_referral = null;  // Atau bisa buat kode referral baru jika perlu
}

// Generate kode referral untuk agen
function generateReferralCode($length = 8) {
    return strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, $length));
}
$kode_referral_agen = generateReferralCode();

// Insert data agen baru ke database
$sql = "INSERT INTO agen (nama, peran, induk_keagenan, kontak, email, password, bank, rekening, kode_referral) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssss", $nama, $peran, $induk_keagenan, $kontak, $email, $hashed_password, $bank, $rekening, $kode_referral_agen);

if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Pendaftaran berhasil!", "kode_referral" => $kode_referral_agen]);
} else {
    echo json_encode(["success" => false, "message" => "Nomor kontak atau email sudah terdaftar"]);
}

$stmt->close();
$conn->close();
?>
    