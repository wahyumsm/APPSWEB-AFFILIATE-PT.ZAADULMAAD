<html>
 <head>
  <title>
   Login Sistem
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
        .custom-header { background-color:#ee8003; }
    </style>
</head>
 <body class="bg-gray-100">
  <!-- Header -->
  <header class="custom-header w-full shadow-md py-3">

   <div class="container mx-auto flex justify-between items-center py-2 px-4">
    <div class="flex items-center space-x-4 text-sm">
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
  <!-- Navigation -->
  <!-- <nav class="bg-white shadow">
   <div class="container mx-auto flex justify-between items-center py-2 px-4">
    <div>
     <img alt="Company Logo" height="30" src="zaadulmad.png" width="100"/>
    </div>
    <ul class="hidden md:flex space-x-3 text-xs md:text-sm">
     <li>
      <a class="text-gray-700 hover:text-teal-700" href="#">
       Beranda
      </a>
     </li>
     <li>
      <a class="text-gray-700 hover:text-teal-700" href="#">
       Paket Umroh
      </a>
     </li>
     <li>
      <a class="text-gray-700 hover:text-teal-700" href="#">
       Paket Haji
      </a>
     </li>
     <li>
      <a class="text-gray-700 hover:text-teal-700" href="#">
       Tentang Kami
      </a>
     </li>
     <li>
      <a class="text-gray-700 hover:text-teal-700" href="#">
       Blog
      </a>
     </li>
     <li>
      <a class="text-gray-700 hover:text-teal-700" href="#">
       Hubungi Kami
      </a>
     </li>
     <li>
      <a class="text-gray-700 hover:text-teal-700" href="#">
       Login
      </a>
     </li>
    </ul>
    <div class="md:hidden">
     <button class="text-gray-700 focus:outline-none" id="menu-button">
      <i class="fas fa-bars">
      </i>
     </button>
    </div>
   </div>
   <div class="md:hidden hidden" id="mobile-menu">
    <ul class="flex flex-col space-y-2 px-4 py-2 text-center">
     <li>
      <a class="text-gray-700 hover:text-teal-700" href="#">
       Beranda
      </a>
     </li>
     <li>
      <a class="text-gray-700 hover:text-teal-700" href="#">
       Paket Umroh
      </a>
     </li>
     <li>
      <a class="text-gray-700 hover:text-teal-700" href="#">
       Paket Haji
      </a>
     </li>
     <li>
      <a class="text-gray-700 hover:text-teal-700" href="#">
       Tentang Kami
      </a>
     </li>
     <li>
      <a class="text-gray-700 hover:text-teal-700" href="#">
       Blog
      </a>
     </li>
     <li>
      <a class="text-gray-700 hover:text-teal-700" href="#">
       Hubungi Kami
      </a>
     </li>
     <li>
      <a class="text-gray-700 hover:text-teal-700" href="#">
       Login
      </a>
     </li>
    </ul>
   </div>
  </nav> -->
  <!-- Main Content -->
  <main class="container mx-auto mt-10 px-4">
   <div class="text-center mb-6">
    <h1 class="text-2xl md:text-3xl font-semibold">
     Login Sistem
    </h1>
   </div>
   <div class="max-w-md mx-auto bg-white p-6 md:p-8 rounded shadow">
   <?php
session_start();
if (isset($_SESSION['error_message'])) {
    echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">';
    echo '<span class="block sm:inline text-sm md:text-base">' . htmlspecialchars($_SESSION['error_message']) . '</span>';
    echo '</div>';
    unset($_SESSION['error_message']); // Hapus pesan setelah ditampilkan
} else {
    echo '<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">';
    echo '<span class="block sm:inline text-sm md:text-base">Silakan login untuk mengakses halaman tujuan Anda</span>';
    echo '</div>';
}
?>

    <form action="config/proseslogin.php" method="POST">
     <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="auth">
       Autentikasi
      </label>
      <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="auth">
       <option>
        Email
       </option>
      </select>
     </div>
     <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
      Email
    </label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
           id="email" name="email" placeholder="Email" type="email" required />
  </div>
     <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
       Password
      </label>
      <div class="relative">
       <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password" id="password" placeholder="Password" type="password"/>
       <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
        <i class="fas fa-eye">
        </i>
       </div>
      </div>
     </div>
     <div class="flex flex-col space-y-3">
   <button type="submit" class="bg-teal-700 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline text-sm md:text-base">
    Login
</button>


      <!-- <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline text-sm md:text-base" type="button">
       Login Melalui WhatsApp
      </button> -->
      <button class="bg-teal-900 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline text-sm md:text-base" type="button">
       Reset Password
      </button>
     </div>
     <div class="text-center mt-4">
         <p class="text-gray-700 text-sm">
            Belum punya akun? 
            <a href="daftaragen.php" class="text-teal-700 hover:underline">Silakan daftar</a>
         </p>
      </div>
    </form>
   </div>
  </main>
  <!-- <script>
   document.getElementById('menu-button').addEventListener('click', function () {
     var menu = document.getElementById('mobile-menu');
     menu.classList.toggle('hidden');
   });
  </script> -->


 </body>
</html>