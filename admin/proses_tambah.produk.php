<?php
$koneksi = mysqli_connect("localhost", "root", "", "zaadulmad");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Ambil data dari form dan hindari SQL Injection
$nama_produk = mysqli_real_escape_string($koneksi, $_POST['nama_produk']);
$jenis_produk = mysqli_real_escape_string($koneksi, $_POST['jenis_produk']);
$jenis_paket = mysqli_real_escape_string($koneksi, $_POST['jenis_paket']);
$program_harian = mysqli_real_escape_string($koneksi, $_POST['program_harian']);
$stok = mysqli_real_escape_string($koneksi, $_POST['stok']);
$kategori = mysqli_real_escape_string($koneksi, $_POST['kategori']);
$status_produk = mysqli_real_escape_string($koneksi, $_POST['status_produk']);
$fasilitas_terbaik = mysqli_real_escape_string($koneksi, $_POST['fasilitas_terbaik']);
$keberangkatan = mysqli_real_escape_string($koneksi, $_POST['keberangkatan']);
$harga_quad = mysqli_real_escape_string($koneksi, $_POST['harga_quad']);
$harga_triple = mysqli_real_escape_string($koneksi, $_POST['harga_triple']);
$harga_double = mysqli_real_escape_string($koneksi, $_POST['harga_double']);

// Upload foto produk
$foto_produk = "";
if (isset($_FILES['foto_produk']) && $_FILES['foto_produk']['error'] === UPLOAD_ERR_OK) {
    $target_dir = "uploads/";

    // Cek apakah folder "uploads/" ada, jika tidak buat foldernya
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Ambil informasi file
    $file_name = $_FILES["foto_produk"]["name"];
    $file_tmp = $_FILES["foto_produk"]["tmp_name"];
    $file_size = $_FILES["foto_produk"]["size"];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    // Ekstensi yang diperbolehkan
    $allowed_ext = array("jpg", "jpeg", "png", "gif");

    // Cek ekstensi file
    if (!in_array($file_ext, $allowed_ext)) {
        die("Format file tidak diizinkan. Hanya JPG, JPEG, PNG, dan GIF.");
    }

    // Cek ukuran file (maksimal 2MB)
    if ($file_size > 2 * 1024 * 1024) {
        die("Ukuran file terlalu besar. Maksimal 2MB.");
    }

    // Buat nama file unik
    $foto_produk = time() . "_" . uniqid() . "." . $file_ext;
    $target_file = $target_dir . $foto_produk;

    // Cek apakah berhasil diunggah
    if (!move_uploaded_file($file_tmp, $target_file)) {
        die("Gagal mengunggah file.");
    }
}

// Simpan data ke database
$query = "INSERT INTO paket_ibadah (nama_produk, jenis_produk, jenis_paket, program_harian, stok, kategori, foto_produk, status_produk, fasilitas_terbaik, keberangkatan, harga_quad, harga_triple, harga_double) 
VALUES ('$nama_produk', '$jenis_produk', '$jenis_paket', '$program_harian', '$stok', '$kategori', '$foto_produk', '$status_produk', '$fasilitas_terbaik', '$keberangkatan', '$harga_quad', '$harga_triple', '$harga_double')";

if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil ditambahkan!";
} else {
    echo "Gagal menambahkan data: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
