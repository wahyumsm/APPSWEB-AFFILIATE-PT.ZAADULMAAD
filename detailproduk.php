<?php
include 'config/database.php'; // Pastikan file koneksi database sudah dimasukkan

if (isset($_GET['id'])) {
    $id_produk = $_GET['id'];

    // Pastikan koneksi tidak null
    if (!$conn) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

    // Buat query untuk mendapatkan detail produk
    $query = "SELECT * FROM paket_ibadah WHERE id_produk = ?";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        $stmt->bind_param("i", $id_produk);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Simpan hasil query ke dalam variabel
            $nama_produk = $row['nama_produk'];
            $foto_produk = $row['foto_produk'];
            $jenis_paket = $row['jenis_paket'];
            $kategori = $row['kategori'];
            $keberangkatan = $row['keberangkatan'];
            $stok = $row['stok'];
            $harga_double = $row['harga_double'];
            $harga_triple = $row['harga_triple'];
            $harga_quad = $row['harga_quad'];
        } else {
            die("Produk tidak ditemukan.");
        }
    } else {
        die("Query gagal: " . $conn->error);
    }
} else {
    die("ID produk tidak ditemukan.");
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Paket Promo Umroh 9 Hari</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
    .custom-header { background: linear-gradient(to right, #ff7e5f, #feb47b); }
    .divider { border-bottom: 2px solid #ddd; margin: 12px 0; }
    .btn-primary { background: linear-gradient(to right, #16a085, #2ecc71); }
    .btn-primary:hover { background: linear-gradient(to right, #2ecc71, #16a085); }
    .btn-secondary:hover { background-color: #d1d5db; }
  </style>
</head>
<body class="bg-gray-100 font-sans">

  <!-- HEADER -->
  <header class="custom-header w-full shadow-md py-3">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center text-white px-6">
      <div class="flex items-center space-x-6 text-sm">
        <span><i class="fas fa-phone-alt"></i> 0811 806 1116</span>
        <span><i class="fas fa-envelope"></i> info@zadulmaadmandiri.com</span>
      </div>
      <div class="text-sm mt-2 md:mt-0 text-center md:text-right font-semibold">
        SEMUA ORANG BISA UMROH &amp; HAJI
      </div>
    </div>
  </header>

  <!-- CONTENT -->
  <div class="container mx-auto p-6 md:p-12">
    <h1 class="text-3xl md:text-4xl font-extrabold text-center mb-8 text-gray-800"><?php echo $nama_produk; ?></h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      
        <!-- Gambar -->
        <div>
            <img class="w-full rounded-xl shadow-xl transform hover:scale-105 transition duration-500" 
                src="./admin/uploads/<?php echo $foto_produk; ?>" alt="<?php echo $nama_produk; ?>"/>
        </div>

        <!-- Detail Paket -->
        <div class="bg-white p-8 rounded-xl shadow-xl">
            <h2 class="text-xl md:text-2xl font-bold mb-4 text-gray-900">Detail Paket</h2>
            
            <div class="divider"></div>
            <p class="text-gray-700 font-semibold">Jenis Paket:</p>
            <p class="text-gray-900"><?php echo $jenis_paket; ?> - <?php echo $kategori; ?></p>
            
            <div class="divider"></div>
            <p class="text-gray-700 font-semibold">Tanggal Keberangkatan:</p>
            <p class="text-gray-900"><?php echo $keberangkatan; ?> <span class="text-green-600 font-bold">(<?php echo $stok; ?> Seat Tersedia)</span></p>
            
            <div class="divider"></div>
            <p class="text-gray-700 font-semibold">Pilihan Kamar:</p>
            
            <div class="border border-gray-300 rounded-lg p-4 mb-2 bg-gray-50 hover:bg-gray-100 transition">
                <p class="text-lg font-medium">Double (1 Kamar ber-2)</p>
                <p class="text-red-600 font-bold">IDR <?php echo $harga_double; ?>/Pax</p>
            </div>
            
            <div class="border border-gray-300 rounded-lg p-4 mb-2 bg-gray-50 hover:bg-gray-100 transition">
                <p class="text-lg font-medium">Triple (1 Kamar ber-3)</p>
                <p class="text-red-600 font-bold">IDR <?php echo $harga_triple; ?>/Pax</p>
            </div>
            
            <div class="border border-gray-300 rounded-lg p-4 mb-2 bg-gray-50 hover:bg-gray-100 transition">
                <p class="text-lg font-medium">Quad (1 Kamar ber-4)</p>
                <p class="text-red-600 font-bold">IDR <?php echo $harga_quad; ?>/Pax</p>
            </div>

            <div class="divider"></div>
            <button class="w-full text-white py-3 rounded-lg shadow-md bg-green-600 font-bold text-lg hover:shadow-lg transition duration-300">
                Pesan Sekarang
            </button>
            
            <button class="w-full bg-gray-200 text-gray-700 py-3 rounded-lg mt-3 shadow-md font-semibold text-lg hover:shadow-lg transition duration-300">
                Download Brosur
            </button>
        </div>
    </div>
</div>


</body>
</html>
