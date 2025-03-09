<?php
session_start();
include 'config/database.php';

// Cek apakah ada cookie untuk login otomatis
if (isset($_COOKIE['user_email']) && isset($_COOKIE['user_name'])) {
    $_SESSION['email'] = $_COOKIE['user_email'];
    $_SESSION['user'] = $_COOKIE['user_name'];
}

// Proses Login & Registrasi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nama'])) { // **Registrasi**
        $nama = $_POST['nama'];
        $ktp = $_POST['ktp'];
        $email = $_POST['email'];
        $telepon = $_POST['telepon'];
        $password_plain = $_POST['password'];

        $password = password_hash($password_plain, PASSWORD_DEFAULT);

        // Cek apakah email sudah terdaftar
        $cekEmail = $conn->prepare("SELECT * FROM transaksiuser WHERE email = ?");
        $cekEmail->bind_param("s", $email);
        $cekEmail->execute();
        $result = $cekEmail->get_result();

        if ($result->num_rows > 0) {
            echo "Email sudah terdaftar, silakan login.";
        } else {
            $stmt = $conn->prepare("INSERT INTO transaksiuser (nama, email, telepon, ktp, password) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $nama, $email, $telepon, $ktp, $password);

            if ($stmt->execute()) {
                echo "Registrasi berhasil! Silakan login.";
            } else {
                echo "Error: " . $stmt->error;
            }
        }
    } elseif (isset($_POST['emailLogin'])) { // **Login**
        $email = $_POST['emailLogin'];
        $password = $_POST['passwordLogin'];

        $stmt = $conn->prepare("SELECT * FROM transaksiuser WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user['nama'];
                $_SESSION['email'] = $user['email'];

                // Set cookie yang berlaku selama 30 detik
                setcookie("user_email", $user['email'], time() + 30, "/");
                setcookie("user_name", $user['nama'], time() + 30, "/");

                echo "Login berhasil!";
            } else {
                echo "Password salah!";
            }
        } else {
            echo "Email tidak ditemukan!";
        }
    }
}

// Logout (hapus cookie)
if (isset($_GET['logout'])) {
    setcookie("user_email", "", time() - 3600, "/");
    setcookie("user_name", "", time() - 3600, "/");
    session_destroy();
    echo "Logout berhasil!";
}

$conn->close();
?>
