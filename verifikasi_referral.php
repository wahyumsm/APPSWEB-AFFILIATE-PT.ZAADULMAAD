<?php
require './config/database.php'; 

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kode_referral = $_POST['kode_referral'] ?? '';


    $sql = "SELECT * FROM agen WHERE kode_referral = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $kode_referral);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo json_encode(["success" => true, "message" => "Kode referral valid! Anda mendapatkan diskon 5%."]);
    } else {
        echo json_encode(["success" => false, "message" => "Kode referral tidak valid."]);
    }

    $stmt->close();
} else {
    echo json_encode(["success" => false, "message" => "Invalid request method."]);
}

$conn->close();
?>
