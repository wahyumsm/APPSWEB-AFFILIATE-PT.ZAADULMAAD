<?php

include 'config/database.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Umroh - Travel Umroh Terbaik - Biaya Umroh</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <style>
        .swiper-button-next, .swiper-button-prev {
            color: #000;
        }
    </style>
      <style>
        .custom-header { background-color:#ee8003; }
    </style>
</head>
<body class="bg-gray-100">
<header class="custom-header w-full shadow-md py-3">

<div class="container mx-auto flex justify-between items-center py-2 px-4"> <div class="flex items-center space-x-4 text-sm">
  <span style="color: white;">
   <i class="fas fa-phone-alt">
   </i>
   0811 806 1116
  </span>
  <span  style="color: white;"> 
   <i class="fas fa-envelope">
   </i>
   info@zadulmaadmandiri.com
  </span>
 </div>
 <div  style="color: white;" class="text-sm">
  SEMUA ORANG BISA UMROH &amp; HAJI
 </div>
</div>
</header>
    <div class="container mx-auto p-4 max-w-7xl">
    <h1 class="text-2xl font-bold text-center mb-4">Paket Umroh & Haji - Travel Terbaik</h1>

<!-- Form Pencarian -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
    <div>
        <label class="block text-sm font-medium text-gray-700" for="keberangkatan">Keberangkatan</label>
        <select class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="keberangkatan" name="keberangkatan">
            <option value="- Semua Data -">- Semua Data -</option>
            <option value="umroh">Paket Umroh</option>
            <option value="haji">Paket Haji</option>
        </select>
    </div>
</div>

<!-- Swiper Container (List Paket Umroh & Haji) -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    
    <!-- Paket Umroh Bayar Belakangan -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden paket-card" data-category="umroh">
        <div class="relative">
            <img alt="Paket Umroh Bayar Belakangan" class="w-full" height="200" src="./umrohdata/Umroh-Juli-23-Juta-768x960.jpg" width="400"/>
            <div class="absolute top-0 right-0 bg-red-500 text-white text-xs font-bold px-2 py-1">PROMO</div>
        </div>
        <div class="p-4">
            <h2 class="text-lg font-bold mb-2">Umroh Juli 23 Juta</h2>
            <ul class="text-sm text-gray-600 mb-4">
                <li><i class="fas fa-calendar-alt mr-2"></i>06 April 2025</li>
                <li><i class="fas fa-hotel mr-2"></i>Mawaddah Al Baraka Hotel (Makkah)</li>
                <li><i class="fas fa-hotel mr-2"></i>Durrat Al Eiman (Madinah)</li>
                <li><i class="fas fa-plane mr-2"></i>IndiGo Airlines</li>
                <li><i class="fas fa-plane-departure mr-2"></i>Soekarno-Hatta International Airport (CGK)</li>
            </ul>
            <p class="text-sm text-gray-600 mb-2">Sisa Seat : 90</p>
            <p class="text-lg font-bold text-red-500 mb-4">Harga mulai :<br/>IDR 1.000.000,00</p>
            <button class="w-full bg-green-600 text-white py-2 rounded-md" onclick="scrollToForm()">PESAN SEKARANG</button>
            <a href="detailproduk.php" class="block w-full bg-blue-600 text-white text-center py-2 rounded-md mt-2">DETAIL PAKET</a>
        </div>
    </div>

    <!-- Paket Promo Umroh 9 Hari -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden paket-card" data-category="umroh">
        <div class="relative">
            <img alt="Paket Promo Umroh 9 Hari" class="w-full" height="200" src="umrohdata/Umroh-Agustus-23-Juta-768x960.jpg" width="400"/>
            <div class="absolute top-0 right-0 bg-red-500 text-white text-xs font-bold px-2 py-1">PROMO</div>
        </div>
        <div class="p-4">
            <h2 class="text-lg font-bold mb-2">Umroh Agustus 23 Juta</h2>
            <ul class="text-sm text-gray-600 mb-4">
                <li><i class="fas fa-calendar-alt mr-2"></i>06 April 2025</li>
                <li><i class="fas fa-hotel mr-2"></i>Marsa Al Jariah Hotel (Makkah)</li>
                <li><i class="fas fa-hotel mr-2"></i>Durrat Al Eiman (Madinah)</li>
                <li><i class="fas fa-plane mr-2"></i>IndiGo Airlines</li>
                <li><i class="fas fa-plane-departure mr-2"></i>Soekarno-Hatta International Airport (CGK)</li>
            </ul>
            <p class="text-sm text-gray-600 mb-2">Sisa Seat : 90</p>
            <p class="text-lg font-bold text-red-500 mb-4">Harga mulai :<br/>IDR 28.500.000,00</p>
            <button class="w-full bg-green-600 text-white py-2 rounded-md" onclick="scrollToForm()">PESAN SEKARANG</button>
            <a href="detailproduk.php" class="block w-full bg-blue-600 text-white text-center py-2 rounded-md mt-2">DETAIL PAKET</a>
        </div>
    </div>

    <!-- Paket Umroh Plus Thoif 9 Hari -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden paket-card" data-category="umroh">
        <div class="relative">
            <img alt="Paket Umroh Plus Thoif" class="w-full" height="200" src="./umrohdata/Umroh-September-23-Juta-768x960.jpg" width="400"/>
            <div class="absolute top-0 right-0 bg-red-500 text-white text-xs font-bold px-2 py-1">PROMO</div>
        </div>
        <div class="p-4">
            <h2 class="text-lg font-bold mb-2">Umroh Septermber 23 Juta</h2>
            <ul class="text-sm text-gray-600 mb-4">
                <li><i class="fas fa-calendar-alt mr-2"></i>16 Juli 2025, 23 Juli 2025, 31 Juli 2025</li>
                <li><i class="fas fa-hotel mr-2"></i>Marsa Al Jariah Hotel (Makkah)</li>
                <li><i class="fas fa-hotel mr-2"></i>Durrat Al Eiman (Madinah)</li>
                <li><i class="fas fa-plane mr-2"></i>Lion Air</li>
                <li><i class="fas fa-plane-departure mr-2"></i>Soekarno-Hatta International Airport (CGK)</li>
            </ul>
            <p class="text-sm text-gray-600 mb-2">Sisa Seat : 135</p>
            <p class="text-lg font-bold text-red-500 mb-4">Harga mulai :<br/>IDR 32.300.000,00</p>
            <button class="w-full bg-green-600 text-white py-2 rounded-md" onclick="scrollToForm()">PESAN SEKARANG</button>
            <a href="detailproduk.php" class="block w-full bg-blue-600 text-white text-center py-2 rounded-md mt-2">DETAIL PAKET</a>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-md overflow-hidden paket-card" data-category="umroh">
        <div class="relative">
            <img alt="Paket Umroh Bayar Belakangan" class="w-full" height="200" src="./umrohdata/oktober23juta.jpg" width="400"/>
            <div class="absolute top-0 right-0 bg-red-500 text-white text-xs font-bold px-2 py-1">PROMO</div>
        </div>
        <div class="p-4">
            <h2 class="text-lg font-bold mb-2">Umroh Oktober 23 Juta</h2>
            <ul class="text-sm text-gray-600 mb-4">
                <li><i class="fas fa-calendar-alt mr-2"></i>06 April 2025</li>
                <li><i class="fas fa-hotel mr-2"></i>Mawaddah Al Baraka Hotel (Makkah)</li>
                <li><i class="fas fa-hotel mr-2"></i>Durrat Al Eiman (Madinah)</li>
                <li><i class="fas fa-plane mr-2"></i>IndiGo Airlines</li>
                <li><i class="fas fa-plane-departure mr-2"></i>Soekarno-Hatta International Airport (CGK)</li>
            </ul>
            <p class="text-sm text-gray-600 mb-2">Sisa Seat : 90</p>
            <p class="text-lg font-bold text-red-500 mb-4">Harga mulai :<br/>IDR 1.000.000,00</p>
            <button class="w-full bg-green-600 text-white py-2 rounded-md" onclick="scrollToForm()">PESAN SEKARANG</button>
            <a href="detailproduk.php" class="block w-full bg-blue-600 text-white text-center py-2 rounded-md mt-2">DETAIL PAKET</a>
        </div>
    </div>

    <!-- Paket Promo Umroh 9 Hari -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden paket-card" data-category="umroh">
        <div class="relative">
            <img alt="Paket Promo Umroh 9 Hari" class="w-full" height="200" src="umrohdata/november.jpg" width="400"/>
            <div class="absolute top-0 right-0 bg-red-500 text-white text-xs font-bold px-2 py-1">PROMO</div>
        </div>
        <div class="p-4">
            <h2 class="text-lg font-bold mb-2">Umroh November 23 Juta</h2>
            <ul class="text-sm text-gray-600 mb-4">
                <li><i class="fas fa-calendar-alt mr-2"></i>06 April 2025</li>
                <li><i class="fas fa-hotel mr-2"></i>Marsa Al Jariah Hotel (Makkah)</li>
                <li><i class="fas fa-hotel mr-2"></i>Durrat Al Eiman (Madinah)</li>
                <li><i class="fas fa-plane mr-2"></i>IndiGo Airlines</li>
                <li><i class="fas fa-plane-departure mr-2"></i>Soekarno-Hatta International Airport (CGK)</li>
            </ul>
            <p class="text-sm text-gray-600 mb-2">Sisa Seat : 90</p>
            <p class="text-lg font-bold text-red-500 mb-4">Harga mulai :<br/>IDR 28.500.000,00</p>
            <button class="w-full bg-green-600 text-white py-2 rounded-md" onclick="scrollToForm()">PESAN SEKARANG</button>
            <a href="detailproduk.php" class="block w-full bg-blue-600 text-white text-center py-2 rounded-md mt-2">DETAIL PAKET</a>
        </div>
    </div>
    <div class="bg-white rounded-lg shadow-md overflow-hidden paket-card" data-category="umroh">
        <div class="relative">
            <img alt="Paket Promo Umroh 9 Hari" class="w-full" height="200" src="umrohdata/desember.jpg" width="400"/>
            <div class="absolute top-0 right-0 bg-red-500 text-white text-xs font-bold px-2 py-1">PROMO</div>
        </div>
        <div class="p-4">
            <h2 class="text-lg font-bold mb-2">Umroh Akhir Tahun 23 Juta</h2>
            <ul class="text-sm text-gray-600 mb-4">
                <li><i class="fas fa-calendar-alt mr-2"></i>06 April 2025</li>
                <li><i class="fas fa-hotel mr-2"></i>Marsa Al Jariah Hotel (Makkah)</li>
                <li><i class="fas fa-hotel mr-2"></i>Durrat Al Eiman (Madinah)</li>
                <li><i class="fas fa-plane mr-2"></i>IndiGo Airlines</li>
                <li><i class="fas fa-plane-departure mr-2"></i>Soekarno-Hatta International Airport (CGK)</li>
            </ul>
            <p class="text-sm text-gray-600 mb-2">Sisa Seat : 90</p>
            <p class="text-lg font-bold text-red-500 mb-4">Harga mulai :<br/>IDR 28.500.000,00</p>
            <button class="w-full bg-green-600 text-white py-2 rounded-md" onclick="scrollToForm()">PESAN SEKARANG</button>
            <a href="detailproduk.php" class="block w-full bg-blue-600 text-white text-center py-2 rounded-md mt-2">DETAIL PAKET</a>
        </div>
    </div>
    <!-- Paket Umroh Plus Thoif 9 Hari -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden paket-card" data-category="umroh">
        <div class="relative">
            <img alt="Paket Umroh Plus Thoif" class="w-full" height="200" src="./umrohdata/Umroh-September-23-Juta-768x960.jpg" width="400"/>
            <div class="absolute top-0 right-0 bg-red-500 text-white text-xs font-bold px-2 py-1">PROMO</div>
        </div>
        <div class="p-4">
            <h2 class="text-lg font-bold mb-2">Umroh Septermber 23</h2>
            <ul class="text-sm text-gray-600 mb-4">
                <li><i class="fas fa-calendar-alt mr-2"></i>16 Juli 2025, 23 Juli 2025, 31 Juli 2025</li>
                <li><i class="fas fa-hotel mr-2"></i>Marsa Al Jariah Hotel (Makkah)</li>
                <li><i class="fas fa-hotel mr-2"></i>Durrat Al Eiman (Madinah)</li>
                <li><i class="fas fa-plane mr-2"></i>Lion Air</li>
                <li><i class="fas fa-plane-departure mr-2"></i>Soekarno-Hatta International Airport (CGK)</li>
            </ul>
            <p class="text-sm text-gray-600 mb-2">Sisa Seat : 135</p>
            <p class="text-lg font-bold text-red-500 mb-4">Harga mulai :<br/>IDR 32.300.000,00</p>
            <button class="w-full bg-green-600 text-white py-2 rounded-md" onclick="scrollToForm()">PESAN SEKARANG</button>
            <a href="detailproduk.php" class="block w-full bg-blue-600 text-white text-center py-2 rounded-md mt-2">DETAIL PAKET</a>
        </div>
    </div>











    
    <!-- Paket Haji -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden paket-card" data-category="haji">
        <div class="relative">
            <img alt="Paket Haji" class="w-full" height="200" src="./hajidata/hajifuroda.jpg" width="400"/>
            <div class="absolute top-0 right-0 bg-blue-500 text-white text-xs font-bold px-2 py-1">Paket Haji</div>
        </div>
        <div class="p-4">
            <h2 class="text-lg font-bold mb-2">Haji Furoda 2025</h2>
            <ul class="text-sm text-gray-600 mb-4">
                <li><i class="fas fa-calendar-alt mr-2"></i>August 2025</li>
                <li><i class="fas fa-hotel mr-2"></i>Hotel Mekkah</li>
                <li><i class="fas fa-hotel mr-2"></i>Hotel Madinah</li>
                <li><i class="fas fa-plane mr-2"></i>Garuda Airlines</li>
                <li><i class="fas fa-plane-departure mr-2"></i>Soekarno-Hatta International Airport (CGK)</li>
            </ul>
            <p class="text-sm text-gray-600 mb-2">Sisa Seat : 50</p>
            <p class="text-lg font-bold text-red-500 mb-4">Harga mulai :<br/>IDR 55.000.000,00</p>
            <button class="w-full bg-green-600 text-white py-2 rounded-md" onclick="scrollToForm()">PESAN SEKARANG</button>
            <a href="detailproduk.php" class="block w-full bg-blue-600 text-white text-center py-2 rounded-md mt-2">DETAIL PAKET</a>
        </div>
    </div>
    <div class="bg-white rounded-lg shadow-md overflow-hidden paket-card" data-category="haji">
        <div class="relative">
            <img alt="Paket Haji" class="w-full" height="200" src="./hajidata/hajikhusus.jpg" width="400"/>
            <div class="absolute top-0 right-0 bg-blue-500 text-white text-xs font-bold px-2 py-1">Paket Haji</div>
        </div>
        <div class="p-4">
            <h2 class="text-lg font-bold mb-2">Haji Khusus
            </h2>
            <ul class="text-sm text-gray-600 mb-4">
                <li><i class="fas fa-calendar-alt mr-2"></i>August 2025</li>
                <li><i class="fas fa-hotel mr-2"></i>Hotel Mekkah</li>
                <li><i class="fas fa-hotel mr-2"></i>Hotel Madinah</li>
                <li><i class="fas fa-plane mr-2"></i>Garuda Airlines</li>
                <li><i class="fas fa-plane-departure mr-2"></i>Soekarno-Hatta International Airport (CGK)</li>
            </ul>
            <p class="text-sm text-gray-600 mb-2">Sisa Seat : 50</p>
            <p class="text-lg font-bold text-red-500 mb-4">Harga mulai :<br/>IDR 55.000.000,00</p>
            <button class="w-full bg-green-600 text-white py-2 rounded-md" onclick="scrollToForm()">PESAN SEKARANG</button>
            <a href="detailproduk.php" class="block w-full bg-blue-600 text-white text-center py-2 rounded-md mt-2">DETAIL PAKET</a>
        </div>

</div>

</div>
   <!-- Form Transaksi -->
   <div id="form-transaksi" class="bg-white rounded-lg shadow-lg p-8 max-w-9xl mx-auto mt-8">
    <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Form Transaksi</h2>
    <form>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Kolom Identitas -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2" for="nama">Nama</label>
                <input class="mt-1 block w-full py-3 px-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm" id="nama" name="nama" type="text" placeholder="Masukkan nama lengkap"/>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2" for="email">Email</label>
                <input class="mt-1 block w-full py-3 px-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm" id="email" name="email" type="email" placeholder="Masukkan email"/>
            </div>

            <!-- Kolom Transaksi -->
            <div>
    <label class="block text-sm font-medium text-gray-700 mb-2" for="jumlah">Jumlah Dibayar</label>
    <input class="mt-1 block w-full py-3 px-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm" 
        id="jumlah" name="jumlah" type="text" placeholder="Masukkan jumlah yang ingin dibayarkan" oninput="formatCurrency(this)" />
</div>


            <!-- Status Keberangkatan & Pembayaran -->
       
            <div>
    <label class="block text-sm font-medium text-gray-700 mb-2" for="metode-pembayaran">Metode Pembayaran</label>
    <select class="mt-1 block w-full py-3 px-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm" id="metode-pembayaran">
        <option value="">Pilih Metode Pembayaran</option>
        <optgroup label="Bank Transfer">
            <option>Bank BCA</option>
            <option>Bank Mandiri</option>
            <option>Bank BRI</option>
            <option>Bank BNI</option>
            <option>Bank CIMB Niaga</option>
            <option>Bank Permata</option>
            <option>Bank Syariah Indonesia (BSI)</option>
        </optgroup>
        <optgroup label="E-Wallet">
            <option>Dana</option>
            <option>GoPay</option>
            <option>OVO</option>
            <option>ShopeePay</option>
            <option>LinkAja</option>
        </optgroup>
        <optgroup label="Lainnya">
            <option>Cash</option>
            <option>Credit Card</option>
            <option>COD Di Kantor</option>
        </optgroup>
    </select>
</div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2" for="bukti-pembayaran">Upload Bukti Pembayaran</label>
                <input class="mt-1 block w-full py-3 px-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm" id="bukti-pembayaran" name="bukti-pembayaran" type="file"/>
            </div>

            <!-- Kode Referal -->
            <div>
    <label class="block text-sm font-medium text-gray-700 mb-2" for="kode-referal">Kode Referal</label>
    <input class="mt-1 block w-full py-3 px-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm" 
        id="kode-referal" name="kode-referal" type="text" placeholder="Masukkan kode referal" oninput="cekKodeReferal()" />
    <p id="promo-message" class="text-sm text-green-600 mt-2"></p>
</div>


            <!-- Kolom Tanggal dan Lokasi -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2" for="tanggal-transaksi">Tanggal Transaksi</label>
                <input class="mt-1 block w-full py-3 px-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm" id="tanggal-transaksi" name="tanggal-transaksi" type="date"/>
            </div>
            <!-- <div>
                <label class="block text-sm font-medium text-gray-700 mb-2" for="keberangkatan">Keberangkatan</label>
                <input class="mt-1 block w-full py-3 px-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm" id="keberangkatan" name="keberangkatan" type="text" placeholder="Masukkan lokasi keberangkatan"/>
            </div> -->

            <!-- Kolom Upload Dokumen -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2" for="foto-ktp">Upload Foto KTP</label>
                <input class="mt-1 block w-full py-3 px-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm" id="foto-ktp" name="foto-ktp" type="file"/>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2" for="foto-paspor">Upload Foto Paspor</label>
                <input class="mt-1 block w-full py-3 px-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm" id="foto-paspor" name="foto-paspor" type="file"/>
            </div>

            <!-- Kolom Agen -->
            <?php
            $host = "localhost"; 
            $user = "nusw7771_nusw7771"; 
            $pass = "nusatechno"; 
            $db   = "nusw7771_zaadulmad";
            
            $conn = new mysqli($host, $user, $pass, $db);
            
            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            } else {
                echo "Koneksi berhasil!";
            }

$query = "SELECT nama, kontak FROM agen";
$result = $conn->query($query);
?>

<div>
    <label class="block text-sm font-medium text-gray-700 mb-2" for="sub-agen">Sub Agen</label>
    <select class="mt-1 block w-full py-3 px-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm"
            id="sub-agen" name="sub-agen">
        <option value="">Pilih Sub Agen</option>
        <?php while ($row = $result->fetch_assoc()): ?>
            <option value="<?= $row['nama']; ?>">
                <?= $row['nama']; ?> (<?= $row['kontak']; ?>)
            </option>
        <?php endwhile; ?>
    </select>
</div>

<?php
$conn->close();
?>

<?php
$host = "localhost"; // Sesuaikan dengan database-mu
$user = "nusw7771_nusw7771";
$password = "nusatechno";
$database = "nusw7771_zaadulmad";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data agen pusat dari tabel induk_keagenan
$query = "SELECT induk_keagenan FROM agen";
$result = $conn->query($query);
?>

<div>
    <label class="block text-sm font-medium text-gray-700 mb-2" for="agen-pusat">Agen Pusat</label>
    <select class="mt-1 block w-full py-3 px-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm"
            id="agen-pusat" name="agen-pusat">
        <option value="">Pilih Agen Pusat</option>
        <?php while ($row = $result->fetch_assoc()): ?>
            <option value="<?= htmlspecialchars($row['induk_keagenan']); ?>"><?= htmlspecialchars($row['induk_keagenan']); ?></option>
        <?php endwhile; ?>
    </select>
</div>

<?php

?>

        </div>
        <button type="button" class="mt-6 w-full bg-green-500 text-white py-3 rounded-lg shadow-md hover:bg-green-700 focus:outline-none">Submit</button>
        <!-- <p class="text-lg font-semibold mt-2">Total Bayar: <span id="total-bayar">Rp 0</span></p> -->
    </form>
</div>
<div id="promo-modal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Masukkan Kode Promo</h2>
        <input type="text" id="kode-promo" class="form-input w-full mb-4" placeholder="Masukkan kode promo...">
        <div class="flex justify-end gap-2">
            <button class="bg-gray-400 text-white px-4 py-2 rounded-lg hover:bg-gray-600" onclick="closePromoModal()">Batal</button>
            <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-700" onclick="confirmTransaction()">Gunakan</button>
        </div>
    </div>
    
</div>




<script>
    const agenPusatSelect = document.getElementById("agen-pusat");
    const agenPusatCustomInput = document.getElementById("agen-pusat-custom");

    agenPusatSelect.addEventListener("change", function() {
        if (this.value === "lainnya") {
            agenPusatCustomInput.classList.remove("hidden");
        } else {
            agenPusatCustomInput.classList.add("hidden");
        }
    });
</script>


<script>
// Function untuk menampilkan paket berdasarkan kategori
document.getElementById('keberangkatan').addEventListener('change', function() {
    var category = this.value;
    var cards = document.querySelectorAll('.paket-card');
    
    cards.forEach(function(card) {
        if (category === '- Semua Data -') {
            card.style.display = 'block';
            card.classList.remove('border-blue-500');
        } else if (card.dataset.category === category) {
            card.style.display = 'block';
            card.classList.add('border-blue-500');
        } else {
            card.style.display = 'none';
            card.classList.remove('border-blue-500');
        }
    });
});
</script>
     
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });

        function scrollToForm() {
            document.getElementById('form-transaksi').scrollIntoView({ behavior: 'smooth' });
        }
    </script>
 <script>
function formatCurrency(input) {
    // Ambil hanya angka
    let value = input.value.replace(/\D/g, '');

    // Ubah angka ke format Rupiah
    let formatted = new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0
    }).format(value ? parseInt(value) : 0);

    // Tampilkan hasil
    input.value = formatted.replace("Rp", "Rp ");
}
</script>


<!-- KODE REFERALL -->
<script>
function cekKodeReferal() {
    let kode = document.getElementById('kode-referal').value;

    if (kode.length < 3) { // Biar tidak cek saat input masih pendek
        document.getElementById('promo-message').innerText = "";
        return;
    }

    fetch('cek-referal.php?kode=' + kode)
        .then(response => response.json())
        .then(data => {
            let promoMessage = document.getElementById('promo-message');
            if (data.status === 'valid') {
                promoMessage.innerText = "✅ Promo: " + data.promo;
            } else {
                promoMessage.innerText = "❌ Kode referal tidak valid!";
            }
        })
        .catch(error => console.error('Error:', error));
}
</script>
<!-- Script untuk Modal -->
<script>
    function openPromoModal() {
        document.getElementById('promo-modal').classList.remove('hidden');
    }
    
    function closePromoModal() {
        document.getElementById('promo-modal').classList.add('hidden');
    }
    
    function confirmTransaction() {
        let promoCode = document.getElementById('kode-promo').value;
        alert('Kode Promo: ' + promoCode + '\nTransaksi Berhasil!');
        closePromoModal();
    }
</script>

<!-- Style Tambahan -->
<style>
    .form-input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        outline: none;
    }
    .form-input:focus {
        border-color: #4F46E5;
        box-shadow: 0 0 5px rgba(79, 70, 229, 0.5);
    }
</style>
<style>
.input-field {
    @apply mt-1 block w-full py-3 px-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm;
}
</style>


</body>
</html>