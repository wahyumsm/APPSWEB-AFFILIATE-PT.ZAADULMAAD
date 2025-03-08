<?php


include 'config/database.php';


$sql = "SELECT * FROM paket_ibadah";
$result = $conn->query($sql);


if (!$result) {
    die("Query Error: " . $conn->error);
}


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

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php while ($row = $result->fetch_assoc()) { ?>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden paket-card transform transition duration-300 hover:scale-105" data-category="<?php echo strtolower($row['jenis_produk']); ?>">
            
            <!-- Gambar -->
            <div class="relative group">
                <div class="overflow-hidden rounded-t-lg">
                    <img src="<?php echo $row['foto_produk']; ?>" 
                         alt="<?php echo $row['nama_produk']; ?>" 
                         class="w-full object-cover aspect-[4/5] min-h-[300px] bg-gray-200 transition-transform duration-300 group-hover:scale-105">
                </div>

                <!-- Badge Status -->
                <div class="absolute top-3 right-3 px-3 py-1 rounded-full text-xs font-bold text-white shadow-md
                    <?php echo ($row['status_produk'] == 'Tersedia') ? 'bg-green-500' : 'bg-red-500'; ?>">
                    <?php echo strtoupper($row['status_produk']); ?>
                </div>
            </div>

            <!-- Detail Produk -->
            <div class="p-5 space-y-4">
                <h2 class="text-xl font-bold text-gray-900"><?php echo $row['nama_produk']; ?></h2>
                
                <p class="text-sm text-gray-600 flex items-center gap-2">
                    <i class="fas fa-box text-blue-500 text-sm"></i> 
                    <?php echo $row['jenis_paket']; ?> - <?php echo $row['kategori']; ?>
                </p>

                <ul class="text-sm text-gray-700 space-y-2">
                    <li class="flex items-center gap-2">
                        <i class="fas fa-plane-departure text-green-500 text-sm"></i> 
                        <strong>Keberangkatan:</strong> <?php echo date("d F Y", strtotime($row['keberangkatan'])); ?>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-users text-purple-500 text-sm"></i> 
                        <strong>Stok:</strong> <?php echo $row['stok']; ?> seat
                    </li>
                    
                </ul>

                <!-- Harga -->
                <div class="text-lg font-bold text-red-500 flex items-center gap-2">
                    <i class="fas fa-tags"></i> Harga Mulai:
                </div>
                <ul class="text-md text-gray-700 space-y-1">
                    <li class="flex items-center gap-2">
                        <i class="fas fa-bed text-gray-500 text-sm"></i> 
                        <strong>Quad:</strong> IDR <?php echo number_format($row['harga_quad'], 0, ',', '.'); ?>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-bed text-gray-500 text-sm"></i> 
                        <strong>Triple:</strong> IDR <?php echo number_format($row['harga_triple'], 0, ',', '.'); ?>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-bed text-gray-500 text-sm"></i> 
                        <strong>Double:</strong> IDR <?php echo number_format($row['harga_double'], 0, ',', '.'); ?>
                    </li>
                </ul>

                <!-- Tombol Pesan & Detail -->
                <div class="space-y-3">
                    <button class="w-full bg-green-600 text-white py-3 rounded-md font-bold flex items-center justify-center gap-2 hover:bg-green-700 transition">
                        <i class="fas fa-shopping-cart"></i> PESAN SEKARANG
                    </button>
                    <a href="detailproduk.php?id=<?php echo $row['id_produk']; ?>" 
                       class="block w-full bg-blue-600 text-white text-center py-3 rounded-md font-bold flex items-center justify-center gap-2 hover:bg-blue-700 transition">
                        <i class="fas fa-info-circle"></i> DETAIL PAKET
                    </a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

</div>
   <!-- Form Transaksi -->
   <div id="form-transaksi" class="bg-white rounded-lg shadow-lg p-8 max-w-9xl mx-auto mt-8">
    <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Form Transaksi</h2>
    <form method="POST" action="prosestransaksiuser.php" enctype="multipart/form-data">
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
            <div>
    <label class="block text-sm font-medium text-gray-700 mb-2" for="telepon">Telepon / WhatsApp</label>
    <input class="mt-1 block w-full py-3 px-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm" 
           id="telepon" 
           name="telepon" 
           type="text" 
           placeholder="Masukkan nomor telepon" />
</div>

            <!-- Kolom Transaksi -->
            <div>
    <label class="block text-sm font-medium text-gray-700 mb-2" for="jumlah">Jumlah Dibayar</label>
    <input class="mt-1 block w-full py-3 px-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm" 
        id="jumlah" name="jumlah" type="text" placeholder="Masukkan jumlah yang ingin dibayarkan" oninput="formatCurrency(this)" />
</div>
<input type="hidden" name="kode_referral" value="<?php echo isset($_GET['ref']) ? $_GET['ref'] : ''; ?>">

            <!-- Status Keberangkatan & Pembayaran -->
       



            <!-- Kolom Tanggal dan Lokasi -->
            <div>
    <label class="block text-sm font-medium text-gray-700 mb-2" for="tanggal_transaksi">Tanggal Transaksi</label>
    <input class="mt-1 block w-full py-3 px-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm" 
           id="tanggal_transaksi" 
           name="tanggal_transaksi" 
           type="date" 
           value="<?php echo date('Y-m-d'); ?>" />
</div>

            <!-- <div>
                <label class="block text-sm font-medium text-gray-700 mb-2" for="keberangkatan">Keberangkatan</label>
                <input class="mt-1 block w-full py-3 px-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm" id="keberangkatan" name="keberangkatan" type="text" placeholder="Masukkan lokasi keberangkatan"/>
            </div> -->

            <!-- Kolom Upload Dokumen -->


            <!-- Kolom Agen -->
            <?php
       $host = "localhost"; // Sesuaikan dengan database-mu
$user = "root";
$password = "";
$db = "zaadulmad";
            
            $conn = new mysqli($host, $user, $password, $db);
            
            if ($conn->connect_error) {
                die("Koneksi gagal: " . $conn->connect_error);
            } 
$query = "SELECT nama, kontak FROM agen";
$result = $conn->query($query);
?>

<div>
    <label class="block text-sm font-medium text-gray-700 mb-2" for="sub_agen">Sub Agen</label>
    <select class="mt-1 block w-full py-3 px-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm"
            id="sub_agen" name="sub_agen">
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
$user = "root";
$password = "";
$database = "zaadulmad";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data agen pusat dari tabel induk_keagenan
$query = "SELECT induk_keagenan FROM agen";
$result = $conn->query($query);
?>

<div>
    <label class="block text-sm font-medium text-gray-700 mb-2" for="agen_pusat">Agen Pusat</label>
    <select class="mt-1 block w-full py-3 px-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm"
            id="agen_pusat" name="agen_pusat">
        <option value="">Pilih Agen Pusat</option>
        <?php while ($row = $result->fetch_assoc()): ?>
            <option value="<?= htmlspecialchars($row['induk_keagenan']); ?>"><?= htmlspecialchars($row['induk_keagenan']); ?></option>
        <?php endwhile; ?>
    </select>
</div>

<?php

?>

        </div>
        <button type="submit" class="mt-6 w-full bg-green-500 text-white py-3 rounded-lg shadow-md hover:bg-green-700 focus:outline-none">Submit</button>
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