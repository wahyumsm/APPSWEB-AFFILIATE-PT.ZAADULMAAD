<?php
// Mulai session untuk menyimpan data login
session_start();

// Menghubungkan ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zaadulmad";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Proses Registrasi & Login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nama'])) { // **Registrasi**
    $nama = $_POST['nama'];
    $ktp = $_POST['ktp'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $password_plain = $_POST['password'];

    // Hash password
    $password = password_hash($password_plain, PASSWORD_DEFAULT);

    // Cek apakah email sudah terdaftar
    $cekEmail = $conn->prepare("SELECT * FROM transaksiuser WHERE email = ?");
    $cekEmail->bind_param("s", $email);
    $cekEmail->execute();
    $result = $cekEmail->get_result();

    if ($result->num_rows > 0) {
        echo "Email sudah terdaftar, silakan login.";
    } else {
        // Simpan data pengguna baru
        $stmt = $conn->prepare("INSERT INTO transaksiuser (nama, email, telepon, ktp, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nama, $email, $telepon, $ktp, $password);

        if ($stmt->execute()) {
            // Login setelah registrasi berhasil
            $_SESSION['user'] = $nama;
            $_SESSION['email'] = $email;

            // Set cookie yang berlaku selama 30 detik
            setcookie("user_email", $email, time() + 30, "/");
            setcookie("user_name", $nama, time() + 30, "/");

            // Arahkan ke halaman dashboard setelah login
            header("Location: daftarprodukuser.php");
            exit;
        } else {
            echo "Error: " . $stmt->error;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - PT. ZaadulMaadMandiri</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                primary: '#1E3A8A', // Biru tua profesional
                secondary: '#FACC15', // Kuning emas untuk aksen
              }
            }
          }
        }
    </script>
</head>
<body class="bg-gray-100">
    <section class="flex items-center justify-center min-h-screen px-4">
        <div class="w-full max-w-md bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-6 sm:p-8">
                <div class="text-center">
                    <img class="w-16 h-16 mx-auto" src="zaadulmad.png" alt="Logo">
                    <h2 class="text-2xl font-bold text-gray-900 mt-4">Buat Akun Baru</h2>
                    <p class="text-gray-600 text-sm">Silakan daftar untuk bergabung</p>
                </div>
                
                <!-- Form Registrasi -->
                <form action="" method="POST" class="mt-6 space-y-4">
                    <div>
                        <label for="nama" class="block text-sm font-semibold text-gray-600">Nama</label>
                        <input name="nama" type="text" id="nama" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-600">Email address</label>
                        <input name="email" type="email" id="email" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-semibold text-gray-600">Password</label>
                        <input type="password" id="password" name="password" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <div>
                        <label for="ktp" class="block text-sm font-semibold text-gray-600">No KTP</label>
                        <input name="ktp" type="text" id="ktp" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <div>
                        <label for="telepon" class="block text-sm font-semibold text-gray-600">Phone Number</label>
                        <input name="telepon" type="text" id="telepon" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>
                    <button type="submit" class="w-full text-white bg-primary hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-semibold rounded-lg text-sm px-5 py-3 transition-all">
                        Daftar Sekarang
                    </button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
