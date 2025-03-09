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
    <img src="./admin/uploads/<?php echo htmlspecialchars($row['foto_produk']); ?>" 
         alt="<?php echo htmlspecialchars($row['nama_produk']); ?>" 
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
                <button id="openModal" class="w-full bg-green-600 text-white py-3 rounded-md font-bold flex items-center justify-center gap-2 hover:bg-green-700 transition">
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


<div id="modal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="relative w-full max-w-4xl p-8 bg-white rounded-xl shadow-2xl flex flex-col md:flex-row transition-all duration-300">
        <!-- Form Container -->
        <div class="w-full md:w-1/2 p-6">
            <h2 class="text-3xl font-bold text-gray-800 mb-6" id="modalTitle">Sign In</h2>
            
            <!-- Sign In Form -->
            <form id="signInForm" action="login.php" method="POST" class="space-y-5">
                <div>
                    <label for="emailLogin" class="block text-sm font-semibold text-gray-600">Email address</label>
                    <input type="email" id="emailLogin" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                </div>
                <div>
                    <label for="passwordLogin" class="block text-sm font-semibold text-gray-600">Password</label>
                    <input type="password" id="passwordLogin" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                </div>
                <button type="submit" class="w-full py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 transition">Sign In</button>
                <p class="text-sm text-gray-500">Don't have an account? <a href="#" id="showRegister" class="text-indigo-600 hover:underline">Register</a></p>
            </form>
            
            <!-- Register Form -->
            <form id="registerForm" action="prosestransaksiuser.php" method="POST" class="space-y-5 hidden">
                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-600">Name</label>
                    <input type="text" id="name" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                </div>
                <div>
                    <label for="ktp" class="block text-sm font-semibold text-gray-600">No KTP</label>
                    <input type="text" id="ktp" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                </div>
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-600">Email address</label>
                    <input type="email" id="email" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                </div>
                <div>
                    <label for="phone" class="block text-sm font-semibold text-gray-600">Phone Number</label>
                    <input type="tel" id="phone" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                </div>
                <button type="submit" class="w-full py-3 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 transition">Register</button>
                <p class="text-sm text-gray-500">Already have an account? <a href="#" id="showLogin" class="text-indigo-600 hover:underline">Sign In</a></p>
            </form>
        </div>
        
        <!-- Image Container -->
        <div class="hidden md:block w-1/2 p-4">
            <img src="umroh.png" alt="Decorative image" class="rounded-lg shadow-md w-full h-full object-cover">
        </div>
        
        <!-- Close Button -->
        <button id="closeModal" class="absolute top-4 right-4 text-gray-600 hover:text-gray-800 text-2xl">&times;</button>
    </div>
</div>



<script>
    document.getElementById('showRegister').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('signInForm').classList.add('hidden');
        document.getElementById('registerForm').classList.remove('hidden');
        document.getElementById('modalTitle').innerText = 'Register';
    });

    document.getElementById('showLogin').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('registerForm').classList.add('hidden');
        document.getElementById('signInForm').classList.remove('hidden');
        document.getElementById('modalTitle').innerText = 'Sign In';
    });

    document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('modal').classList.add('hidden');
    });
</script>



     
    </div>
  
    <script>
document.addEventListener("DOMContentLoaded", function() {
    const openModalBtn = document.querySelectorAll("#openModal"); // Jika ada banyak tombol
    const modal = document.getElementById("modal");
    const closeModalBtn = document.getElementById("closeModal");

    openModalBtn.forEach(button => {
        button.addEventListener("click", function() {
            modal.classList.remove("hidden"); // Menampilkan modal
        });
    });

    closeModalBtn.addEventListener("click", function() {
        modal.classList.add("hidden"); // Menyembunyikan modal
    });

    // Menutup modal jika klik di luar kontennya
    modal.addEventListener("click", function(event) {
        if (event.target === modal) {
            modal.classList.add("hidden");
        }
    });
});
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
        .modal {
            display: none;
        }
        .modal.active {
            display: flex;
        }
    </style>
<style>
.input-field {
    @apply mt-1 block w-full py-3 px-4 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm;
}
</style>


</body>
</html>