<?php
$koneksi = mysqli_connect("localhost", "root", "", "zaadulmad");

if (!$koneksi) {
    die(json_encode(["status" => "error", "message" => "Koneksi database gagal: " . mysqli_connect_error()]));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_produk'])) {
    $id_produk = mysqli_real_escape_string($koneksi, $_POST['id_produk']);

    // Ambil nama file foto dari database
    $query_get_foto = "SELECT foto_produk FROM paket_ibadah WHERE id_produk = '$id_produk'";
    $result_foto = mysqli_query($koneksi, $query_get_foto);

    if ($result_foto && mysqli_num_rows($result_foto) > 0) {
        $row = mysqli_fetch_assoc($result_foto);
        $foto_produk = $row['foto_produk'];

        // Hapus foto jika ada
        if (!empty($foto_produk) && file_exists("uploads/" . $foto_produk)) {
            unlink("uploads/" . $foto_produk);
        }
    }

    // Hapus data dari database
    $query_delete = "DELETE FROM paket_ibadah WHERE id_produk = '$id_produk'";
    if (mysqli_query($koneksi, $query_delete)) {
        echo json_encode(["status" => "success", "message" => "Produk berhasil dihapus"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Gagal menghapus produk: " . mysqli_error($koneksi)]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Permintaan tidak valid"]);
}

mysqli_close($koneksi);
?>
