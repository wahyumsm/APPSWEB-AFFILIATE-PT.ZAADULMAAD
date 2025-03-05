<?php
$host = "localhost"; // Sesuaikan dengan database-mu
$user = "root";
$password = "";
$database = "zaadulmad";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Koneksi gagal"]));
}

$kode = $_GET['kode_referral'] ?? '';

// Cek di database
$query = $conn->prepare("SELECT kode_referral  FROM agen WHERE kode = ?");
$query->bind_param("s", $kode);
$query->execute();
$result = $query->get_result();

if ($row = $result->fetch_assoc()) {
    echo json_encode(["status" => "valid", "promo" => $row['promo']]);
} else {
    echo json_encode(["status" => "invalid"]);
}

$conn->close();
?>
