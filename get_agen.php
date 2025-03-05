?php

$host = "localhost"; // Sesuaikan dengan database-mu
$user = "root";
$password = "";
$database = " 
";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$query = "SELECT nama, kontak FROM agen";
$result = $conn->query($query);

$agen = [];
while ($row = $result->fetch_assoc()) {
    $agen[] = $row;
}

echo json_encode($agen);
$conn->close();


?>