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
<header class="custom-header w-full bg-blue-600 shadow-md py-3">
    <div class="container mx-auto flex justify-between items-center px-4">
        <!-- Kontak Info -->
        <div class="hidden md:flex items-center space-x-4 text-sm text-white">
            <span><i class="fas fa-phone-alt"></i> 0811 806 1116</span>
            <span><i class="fas fa-envelope"></i> info@zadulmaadmandiri.com</span>
        </div>

        <!-- Slogan (Selalu Ditampilkan) -->
        <div class="text-sm text-white font-semibold text-center md:text-left flex-1">
            SEMUA ORANG BISA UMROH &amp; HAJI
        </div>

        <!-- Tombol Sign In & Sign Up -->
        <div class="hidden md:flex space-x-2">
            <a id="openModal"  href="#" class="bg-white text-blue-600 px-4 py-2 rounded-lg text-sm font-semibold hover:bg-gray-200 transition">
                Sign In
            </a>
            <a href="signupuser.php" class="bg-blue-500 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-blue-700 transition">
                Sign Up
            </a>
        </div>

        <!-- Tombol Menu Mobile -->
        <button id="mobile-menu-button" class="md:hidden text-white focus:outline-none">
            <i class="fas fa-bars text-2xl"></i>
        </button>
    </div>

    <!-- Menu Mobile (Hidden by Default) -->
    <div id="mobile-menu" class="hidden md:hidden flex flex-col items-center bg-blue-700 text-white p-4 space-y-2">
        <a href="#" class="w-full text-center py-2 bg-white text-blue-600 rounded-lg font-semibold">Sign In</a>
        <a href="#" class="w-full text-center py-2 bg-blue-500 rounded-lg font-semibold">Sign Up</a>
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

	

		<div class="w-full md:w-1/2 p-6">
			<h2 class="text-3xl font-bold text-gray-800 mb-6" id="modalTitle">Sign In</h2>
			<div class="message hidden border px-4 py-2 rounded-md mb-4"></div>

			<!-- Sign In Form -->
  <form id="signInForm" action="loginuser.php" method="POST" class="space-y-5">
  <div class="message hidden border px-4 py-2 rounded-md mb-4"></div>
	<div>
		<label for="emailLogin" class="block text-sm font-semibold text-gray-600">Email address</label>
		<input type="email" name="emailLogin" id="emailLogin" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
	</div>
	<div>
		<label for="passwordLogin" class="block text-sm font-semibold text-gray-600">Password</label>
		<input type="password" name="passwordLogin" id="passwordLogin" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
	</div>
	<button type="submit" class="w-full py-3 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 transition">Sign In</button>
	<p class="text-sm text-gray-500">Don't have an account? <a href="#" id="showRegister" class="text-indigo-600 hover:underline">Register</a></p>
</form>

			
			<!-- Register Form -->
			<form id="registerForm" action="loginuser.php" method="POST" class="space-y-5 hidden">
				<div>
					<label for="nama" class="block text-sm font-semibold text-gray-600">Nama</label>
					<input  name="nama"  type="text" id="nama" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
				</div>
				<div>
					<label for="email" class="block text-sm font-semibold text-gray-600">Email address</label>
					<input name="email" type="email" id="email" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
				</div>
				<div>
	<label for="password" class="block text-sm font-semibold text-gray-600">Password</label>
	<input  type="password" id="password" name="password" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
</div>

				<div>
					<label for="ktp" class="block text-sm font-semibold text-gray-600">No KTP</label>
					<input name="ktp" type="text" id="ktp" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
				</div>
				<div>
					<label for="telepon" class="block text-sm font-semibold text-gray-600">Phone Number</label>
					<input  name="telepon" type="telepon" id="telepon" class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
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
document.addEventListener("DOMContentLoaded", function() {
	const openModalBtn = document.querySelectorAll("#openModal");
	const modal = document.getElementById("modal");
	const closeModalBtn = document.getElementById("closeModal");

	openModalBtn.forEach(button => {
		button.addEventListener("click", function() {
			modal.classList.remove("hidden"); 
		});
	});

	closeModalBtn.addEventListener("click", function() {
		modal.classList.add("hidden");
	});


	modal.addEventListener("click", function(event) {
		if (event.target === modal) {
			modal.classList.add("hidden");
		}
	});
});
</script>


 <script>
function formatCurrency(input) {
   
	let value = input.value.replace(/\D/g, '');

 
	let formatted = new Intl.NumberFormat('id-ID', {
		style: 'currency',
		currency: 'IDR',
		minimumFractionDigits: 0
	}).format(value ? parseInt(value) : 0);


	input.value = formatted.replace("Rp", "Rp ");
}
</script>

<!-- untuk nangkap data setelah login dan pindah ke login sign in -->
<script>
document.getElementById("registerForm").addEventListener("submit", function(event) {
	event.preventDefault(); 
	let formData = new FormData(this);

	fetch("loginuser.php", { 
		method: "POST",
		body: formData
	})
	.then(response => response.text()) 
	.then(result => {
		if (result.includes("Registrasi berhasil")) { 
  
			let email = document.getElementById("email").value;
			let password = document.getElementById("password").value;

	 
			document.getElementById("emailLogin").value = email;
			document.getElementById("passwordLogin").value = password;

	 
			document.getElementById("registerForm").classList.add("hidden");
			document.getElementById("signInForm").classList.remove("hidden");

			alert("Registrasi berhasil! Silakan login.");
		} else {
			alert("Registrasi gagal: " + result);
		}
	})
	.catch(error => console.error("Error:", error));
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
	const signInForm = document.getElementById("signInForm");
	const registerForm = document.getElementById("registerForm");
	const messageBox = document.querySelector(".message");

	signInForm.addEventListener("submit", function (e) {
		e.preventDefault();

		const formData = new FormData(signInForm);
		fetch("loginuser.php", {
			method: "POST",
			body: formData
		})
		.then(response => response.text())
		.then(data => {
			messageBox.classList.remove("hidden");
			if (data.includes("Login berhasil")) {
				messageBox.textContent = data;
				messageBox.classList.add("bg-green-100", "text-green-700", "border-green-500");
				setTimeout(() => {
					window.location.href = "daftarprodukuser.php"; // Redirect setelah login sukses
				}, 1500);
			} else {
				messageBox.textContent = data;
				messageBox.classList.add("bg-red-100", "text-red-700", "border-red-500");
			}
		})
		.catch(error => console.error("Error:", error));
	});
});
</script>

<script>
function cekKodeReferal() {
	let kode = document.getElementById('kode-referal').value;

	if (kode.length < 3) { 
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
    document.getElementById("mobile-menu-button").addEventListener("click", function () {
        document.getElementById("mobile-menu").classList.toggle("hidden");
    });
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