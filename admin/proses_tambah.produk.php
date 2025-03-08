<?php
$koneksi = mysqli_connect("localhost", "root", "", "zaadulmad");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

$nama_produk = $_POST['nama_produk'];
$jenis_produk = $_POST['jenis_produk'];
$jenis_paket = $_POST['jenis_paket'];
$program_harian = $_POST['program_harian'];
$stok = $_POST['stok'];
$kategori = $_POST['kategori'];
$status_produk = $_POST['status_produk'];
$fasilitas_terbaik = $_POST['fasilitas_terbaik'];
$keberangkatan = $_POST['keberangkatan'];
$harga_quad = $_POST['harga_quad'];
$harga_triple = $_POST['harga_triple'];
$harga_double = $_POST['harga_double'];

// Upload foto produk
$foto_produk = "";
if (isset($_FILES['foto_produk']) && $_FILES['foto_produk']['error'] === UPLOAD_ERR_OK) {
    $target_dir = "uploads/";
    $foto_produk = basename($_FILES["foto_produk"]["name"]);
    $target_file = $target_dir . $foto_produk;
    move_uploaded_file($_FILES["foto_produk"]["tmp_name"], $target_file);
}

$query = "INSERT INTO paket_ibadah (nama_produk, jenis_produk, jenis_paket, program_harian, stok, kategori, foto_produk, status_produk, fasilitas_terbaik, keberangkatan, harga_quad, harga_triple, harga_double) 
VALUES ('$nama_produk', '$jenis_produk', '$jenis_paket', '$program_harian', '$stok', '$kategori', '$foto_produk', '$status_produk', '$fasilitas_terbaik', '$keberangkatan', '$harga_quad', '$harga_triple', '$harga_double')";

if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil ditambahkan!";
} else {
    echo "Gagal menambahkan data: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
