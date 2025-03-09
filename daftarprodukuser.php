<?php
session_start();


if (!isset($_SESSION['email']) || !isset($_SESSION['user'])) {

    header("Location: daftarproduk.php");
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Travel Umroh</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-blue-50">
    <!-- Navbar -->
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="zaadulmad.png" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">PT.ZaadulMaadMandiri</span>
        </a>
        <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
    <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img class="w-8 h-8 rounded-full" src="https://buildwithangga.com/themes/front/images/default-avatar.svg" alt="user photo">
    </button>
    <!-- Dropdown menu -->
    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
        <div class="px-4 py-3">
            <span class="block text-sm text-gray-900 dark:text-white">Hello Wahyu</span>
            <span class="block text-sm text-gray-500 truncate dark:text-gray-400">wahyuhidayadd@gmail.com</span>
        </div>
        <ul class="py-2" aria-labelledby="user-menu-button">
            <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
            </li>
       
            <li>
    <a href="logoutuser.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Logout</a>
</li>

        </ul>
    </div>
</div>

      
        </div>
      </nav>

    <!-- Main Content -->
    <div class="max-w-5xl mx-auto p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Paket Umroh -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <img src="https://zadulmaadmandiri.com/zaadulmaad/admin/uploads/1741517009_67cd70d1ab8d8.jpg" 
                 alt="Paket Umroh" 
                 class="w-full rounded-lg transform transition duration-500 hover:scale-105" />
            <h2 class="text-lg font-semibold mt-4 text-center">Paket Umroh: Perjalanan Spiritual ke Tanah Suci</h2>
            <div class="flex justify-center mt-2 text-yellow-500">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span class="text-gray-600 ml-2">(132)</span>
            </div>
        </div>

        <!-- Pembayaran -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-lg font-semibold">Metode Pembayaran</h3>
            <button class="bg-gray-800 text-white px-4 py-2 rounded-full mt-2 w-full">Otomatis</button>
            <h3 class="text-lg font-semibold mt-6">Kode Promo</h3>
            <input type="text" id="promo-code-input" placeholder="Masukkan kode promo" class="w-full p-2 border rounded-lg mt-2 cursor-pointer" onclick="openModal()" />
            <div id="promo-modal" class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg w-96">
        <h3 class="text-xl font-semibold mb-4">Masukkan Kode Promo</h3>
        <input type="text" placeholder="Masukkan kode promo" class="w-full p-2 border rounded-lg mb-4" />
        <div class="flex justify-end space-x-2">
            <button onclick="closeModal()" class="px-4 py-2 bg-gray-300 rounded-md">Batal</button>
            <button class="px-4 py-2 bg-blue-600 text-white rounded-md">Terapkan Code</button>
        </div>
    </div>
</div>
            <h3 class="text-lg font-semibold mt-6">Detail Pembayaran</h3>
            <div class="mt-2">
                <div class="flex justify-between">
                    <span>Harga normal</span>
                    <span class="line-through text-red-500">Rp 800,000</span>
                </div>
                <div class="flex justify-between mt-2">
                    <span>Harga paket <span class="bg-blue-100 text-blue-500 px-2 py-1 rounded-full text-xs">Diskon</span></span>
                    <span>Rp 269,000</span>
                </div>
                <div class="flex justify-between mt-2">
                    <span>Kode unik</span>
                    <span>- Rp 131</span>
                </div>
                <div class="flex justify-between mt-2">
                    <span>Biaya layanan <i class="fas fa-question-circle text-gray-500"></i></span>
                    <span>+ Rp 15,000</span>
                </div>
                <div class="flex justify-between mt-2 font-semibold">
                    <span>Total transfer</span>
                    <span>Rp 283,869</span>
                </div>
            </div>
            
            <label class="flex items-center mt-6">
                <input type="checkbox" class="form-checkbox"/>
                <span class="ml-2">Saya setuju dengan <a href="#" class="text-blue-500">Terms & Conditions</a></span>
            </label>
            
            <button class="bg-blue-500 text-white w-full py-2 rounded-lg mt-4">Bayar & Gabung Paket</button>
        </div>
    </div>
    <script>
        const btn = document.querySelector('button.mobile-menu-button');
        const menu = document.querySelector('.mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const toggleButton = document.querySelector("[data-collapse-toggle]");
        const navMenu = document.getElementById("navbar-user");
    
        toggleButton.addEventListener("click", function () {
            navMenu.classList.toggle("hidden");
        });
    });
    </script>
    <!-- MODAL PROMO -->
    <script>
    function openModal() {
        document.getElementById('promo-modal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('promo-modal').classList.add('hidden');
    }
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>