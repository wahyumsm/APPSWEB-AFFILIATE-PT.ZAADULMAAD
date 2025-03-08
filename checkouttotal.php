<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Umroh & Haji</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        .custom-header { background-color: #ee8003; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); }
        .hidden { display: none; }
        input:focus, button:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(0, 128, 0, 0.5);
        }
        .button-primary {
            background-color: #ee8003;
            text-align: center;
            padding: 15px 0;
            border-radius: 5px;
            width: 100%;
            margin-top: 20px;
            font-weight: 600;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .button-primary:hover {
            background-color: #d46d00;
        }
        .invoice-container {
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
        }
        .invoice-container hr {
            border: 1px solid #eee;
        }
    </style>
</head>
<body class="bg-gray-100 flex flex-col items-center min-h-screen pt-16">

<header class="custom-header w-full shadow-md py-4 fixed top-0 left-0 right-0 z-10">
    <div class="container mx-auto flex justify-between items-center px-4 text-white text-sm">
        <div class="flex items-center space-x-4">
            <span><i class="fas fa-phone-alt"></i> 0811 806 1116</span>
            <span><i class="fas fa-envelope"></i> info@zadulmaadmandiri.com</span>
        </div>
        <div class="font-semibold">SEMUA ORANG BISA UMROH & HAJI</div>
    </div>
</header>

<div class="bg-white p-6 rounded-lg shadow-lg max-w-lg w-full mt-20 border border-gray-200">
    <h2 class="text-xl font-semibold text-gray-800 mb-6">Detail Pesanan</h2>
    <div class="flex items-center space-x-4 border-b pb-4 mb-4">
        <img src="https://via.placeholder.com/80" alt="Paket Umroh" class="rounded-lg">
        <div>
            <p class="text-lg font-bold">Paket Umroh Reguler</p>
            <p class="text-gray-600">Harga: <span id="harga" class="font-semibold">Rp 30.000.000</span></p>
        </div>
    </div>

    <label class="block text-gray-700 font-medium mb-2">Kode Promo</label>
    <div class="flex items-center border rounded-lg overflow-hidden mb-4">
        <input type="text" id="kode-referral" class="w-full p-2 outline-none" oninput="cekReferral()" placeholder="Masukkan kode promo">
        <button class="bg-green-500 text-white px-4 py-2" onclick="cekReferral()">Gunakan</button>
    </div>
    <p id="promo-message" class="text-sm text-green-600 mt-2"></p>

    <div class="bg-gray-100 p-4 rounded-lg mb-4">
        <div class="flex justify-between"><span>Subtotal</span><span id="subtotal">Rp 30.000.000</span></div>
        <div class="flex justify-between"><span>Fee</span><span id="fee">Rp 15.000</span></div>
        <div class="flex justify-between"><span>Kode Unik</span><span id="kode-unik">Rp 131</span></div>
        <div class="flex justify-between font-bold text-lg mt-2 text-green-600">
            <span>Total Akhir</span>
            <span id="total-checkout">Rp 30.015.131</span>
        </div>
    </div>

    <button class="button-primary flex justify-center items-center space-x-2" onclick="konfirmasiCheckout()">
        <i class="fas fa-shopping-cart"></i>
        <span>Konfirmasi Pembayaran</span>
    </button>

    <div id="loading" class="hidden mt-4 text-center">
        <svg class="animate-spin h-6 w-6 mx-auto text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
        </svg>
        <p class="text-gray-600 mt-2">Memproses pembayaran...</p>
    </div>
</div>

<div id="invoice" class="invoice-container hidden">
    <h2 class="text-xl font-bold text-center mb-4">Invoice Pembayaran</h2>
    <p><strong>Paket:</strong> Umroh Reguler</p>
    <p><strong>Subtotal:</strong> <span id="invoice-subtotal">Rp 30.000.000</span></p>
    <p><strong>Fee:</strong> <span id="invoice-fee">Rp 15.000</span></p>
    <p><strong>Kode Unik:</strong> <span id="invoice-kode-unik">Rp 131</span></p>
    <hr class="my-4">
    <p class="font-bold text-lg"><strong>Total Akhir:</strong> <span id="invoice-total">Rp 30.015.131</span></p>
</div>


<script>
function cekReferral() {
    let referralInput = document.getElementById("kode-referral").value;
    let message = document.getElementById("promo-message");
    let hargaPaket = 30000000;  // Harga Paket
    let dp = 6000000;  // DP yang sudah dibayar
    let fee = 15000;  // Fee
    let kodeUnik = 131;  // Kode Unik

    // Hitung total setelah diskon
    let total = hargaPaket + fee + kodeUnik - dp;

    if (referralInput) {
        // Kirim permintaan ke backend untuk memverifikasi kode referral
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "verifikasi_referral.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                let response = JSON.parse(xhr.responseText);

                if (response.success) {
                    // Diskon 1 juta jika referral valid
                    let discount = 1000000; // Diskon 1 JT
                    total -= discount; // Terapkan diskon
                    document.getElementById("total-checkout").innerText = "Rp " + total.toLocaleString();
                    message.innerText = "Promo berhasil digunakan! Diskon 1 JT telah diterapkan.";
                    document.getElementById("invoice-total").innerText = "Rp " + total.toLocaleString();
                } else {
                    // Jika kode referral tidak valid
                    document.getElementById("total-checkout").innerText = "Rp " + total.toLocaleString();
                    message.innerText = "Kode referral tidak valid.";
                    document.getElementById("invoice-total").innerText = "Rp " + total.toLocaleString();
                }
            }
        };
        xhr.send("kode_referral=" + encodeURIComponent(referralInput));
    } else {
        // Update harga tanpa promo
        document.getElementById("total-checkout").innerText = "Rp " + total.toLocaleString();
        document.getElementById("invoice-total").innerText = "Rp " + total.toLocaleString();
    }
}

function konfirmasiCheckout() {
    let button = document.querySelector("button");
    let loading = document.getElementById("loading");

    button.classList.add("hidden");
    loading.classList.remove("hidden");

    setTimeout(() => {
        window.location.href = "success.html";
    }, 3000);
}
</script>

</body>
</html>
