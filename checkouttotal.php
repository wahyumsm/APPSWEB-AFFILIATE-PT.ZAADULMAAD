<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Umroh & Haji</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        .custom-header { background-color:#ee8003; }
        .hidden { display: none; }
        input:focus, button:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(0, 128, 0, 0.5);
        }
    </style>
</head>
<body class="bg-gray-100 flex flex-col items-center min-h-screen pt-16">

<header class="custom-header w-full shadow-md py-3 fixed top-0 z-10">
    <div class="container mx-auto flex justify-between items-center py-2 px-4 text-white text-sm">
        <div class="flex items-center space-x-4">
            <span><i class="fas fa-phone-alt"></i> 0811 806 1116</span>
            <span><i class="fas fa-envelope"></i> info@zadulmaadmandiri.com</span>
        </div>
        <div class="font-semibold">SEMUA ORANG BISA UMROH & HAJI</div>
    </div>
</header>

<div class="bg-white p-6 rounded-lg shadow-lg max-w-lg w-full mt-10 border border-gray-200">
    <h2 class="text-xl font-semibold text-gray-800 mb-4">Detail Pesanan</h2>
    <div class="flex items-center space-x-4 border-b pb-4 mb-4">
        <img src="https://via.placeholder.com/80" alt="Paket Umroh" class="rounded-lg">
        <div>
            <p class="text-lg font-bold">Paket Umroh Reguler</p>
            <p class="text-gray-600">Harga: <span id="harga" class="font-semibold">Rp 30.000.000</span></p>
        </div>
    </div>
    
    <label class="block text-gray-700 font-medium mb-2">Kode Promo</label>
    <div class="flex items-center border rounded-lg overflow-hidden">
        <input type="text" id="kode-promo" class="w-full p-2 outline-none" oninput="cekPromo()" placeholder="Masukkan kode promo">
        <button class="bg-green-500 text-white px-4 py-2" onclick="cekPromo()">Gunakan</button>
    </div>
    <p id="promo-message" class="text-sm text-green-600 mt-2"></p>

    <div class="bg-gray-100 p-4 mt-4 rounded-lg text-sm">
        <div class="flex justify-between"><span>Subtotal</span><span id="subtotal">Rp 30.000.000</span></div>
        <div class="flex justify-between"><span>Ongkir Dokumen</span><span id="ongkir">Rp 200.000</span></div>
        <div class="flex justify-between"><span>Asuransi</span><span id="asuransi">Rp 500.000</span></div>
        <div class="flex justify-between font-bold text-lg mt-2 text-green-600">
            <span>Total Akhir</span>
            <span id="total-checkout">Rp 30.700.000</span>
        </div>
    </div>

    <button class="mt-6 w-full bg-orange-500 text-white py-3 rounded-lg shadow-md hover:bg-orange-600 transition duration-300 flex justify-center items-center space-x-2" onclick="konfirmasiCheckout()">
        <i class="fas fa-shopping-cart"></i>
        <span>Konfirmasi Pembayaran</span>
    </button>

    <button class="mt-4 w-full bg-blue-500 text-white py-3 rounded-lg shadow-md hover:bg-blue-600 transition duration-300 flex justify-center items-center space-x-2" onclick="cetakInvoice()">
    <i class="fas fa-file-pdf"></i>
    <span>Cetak Invoice</span>
</button>

    </button>
    
    <div id="loading" class="hidden mt-4 text-center">
        <svg class="animate-spin h-6 w-6 mx-auto text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
        </svg>
        <p class="text-gray-600 mt-2">Memproses pembayaran...</p>
    </div>
</div>

<!-- Invoice (Hidden by Default) -->
<div id="invoice" class="hidden bg-white p-6 max-w-lg mx-auto mt-10 border border-gray-300 shadow-md">
    <h2 class="text-xl font-bold text-center mb-4">Invoice Pembayaran</h2>
    <p><strong>Paket:</strong> Umroh Reguler</p>
    <p><strong>Subtotal:</strong> <span id="invoice-subtotal">Rp 30.000.000</span></p>
    <p><strong>Ongkir Dokumen:</strong> <span id="invoice-ongkir">Rp 200.000</span></p>
    <p><strong>Asuransi:</strong> <span id="invoice-asuransi">Rp 500.000</span></p>
    <hr class="my-2">
    <p class="font-bold text-lg"><strong>Total Akhir:</strong> <span id="invoice-total">Rp 30.700.000</span></p>
</div>

<script>
    let hargaPaket = 30000000;
    let ongkir = 200000;
    let asuransi = 500000;
    
    function cekPromo() {
        let promoInput = document.getElementById("kode-promo").value;
        let message = document.getElementById("promo-message");
        let subtotal = hargaPaket;
        
        if (promoInput.toUpperCase() === "UMROH2024") {
            let diskon = subtotal * 0.1;
            let total = subtotal - diskon + ongkir + asuransi;
            document.getElementById("total-checkout").innerText = "Rp " + total.toLocaleString();
            message.innerText = "Kode promo berhasil! Anda mendapatkan diskon 10%.";

            // Update invoice
            document.getElementById("invoice-total").innerText = "Rp " + total.toLocaleString();
        } else {
            document.getElementById("total-checkout").innerText = "Rp " + (subtotal + ongkir + asuransi).toLocaleString();
            message.innerText = "";

            // Reset invoice total
            document.getElementById("invoice-total").innerText = "Rp 30.700.000";
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

    function cetakInvoice() {
        let invoice = document.getElementById("invoice");
        invoice.classList.remove("hidden");

        setTimeout(() => {
            window.print();
            invoice.classList.add("hidden");
        }, 500);
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

<script>
    function cetakInvoice() {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();

        // Logo
        doc.setFont("helvetica", "bold");
        doc.setFontSize(18);
        doc.text("Invoice Umroh & Haji", 105, 20, null, null, "center");

        // Informasi Perusahaan
        doc.setFontSize(10);
        doc.text("Zadul Maad Mandiri", 20, 30);
        doc.text("Jl. Contoh No. 123, Jakarta", 20, 35);
        doc.text("Telp: 0811 806 1116", 20, 40);
        doc.text("Email: info@zadulmaadmandiri.com", 20, 45);

        // Garis pembatas
        doc.line(20, 50, 190, 50);

        // Detail Pesanan
        let startY = 60;
        doc.setFontSize(12);
        doc.text("Detail Pesanan:", 20, startY);

        startY += 10;
        doc.setFontSize(10);
        doc.text("Nama Paket:", 20, startY);
        doc.text("Paket Umroh Reguler", 100, startY);

        startY += 7;
        doc.text("Harga:", 20, startY);
        doc.text("Rp 30.000.000", 100, startY);

        startY += 7;
        doc.text("Ongkir Dokumen:", 20, startY);
        doc.text("Rp 200.000", 100, startY);

        startY += 7;
        doc.text("Asuransi:", 20, startY);
        doc.text("Rp 500.000", 100, startY);

        // Total Akhir
        startY += 10;
        doc.setFont("helvetica", "bold");
        doc.text("Total Akhir:", 20, startY);
        doc.text("Rp 30.700.000", 100, startY);

        // Footer
        startY += 20;
        doc.setFontSize(10);
        doc.setFont("helvetica", "italic");
        doc.text("Terima kasih telah mempercayai layanan kami!", 105, startY, null, null, "center");

        // Simpan PDF
        doc.save("Invoice_Umroh_Haji.pdf");
    }
</script>

</body>
</html>
