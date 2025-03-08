<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Payment Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white shadow-lg rounded-lg w-full max-w-md">
    <div class="bg-blue-900 text-white text-center py-4 rounded-t-lg">
      <h1 class="text-2xl">Rp704.869</h1>
      <p class="text-sm">Order ID #8ZaadulMaadMandiri-252985</p>
      <a class="text-sm underline" href="#">Details</a>
    </div>
    <div class="p-4">
      <div class="text-center text-gray-600 mb-4">
        <p>Choose within 23:59:53</p>
      </div>
      <div class="mb-4">
        <h2 class="text-gray-600 font-semibold mb-2">Recommended payment method</h2>
        <div class="flex items-center justify-between p-4 border rounded-lg cursor-pointer" onclick="toggleDetails('recommended-method')">
          <div class="flex items-center">
            <img alt="GoPay/GoPay Later logo" class="mr-2" height="24" src="https://storage.googleapis.com/a1aa/image/_ZxHjjJdaqsMUVtSbqqyeRH0naViYSFPHRr2l8yYUVg.jpg" width="24"/>
            <span>GoPay/GoPay Later</span>
          </div>
          <i class="fas fa-chevron-right text-gray-400"></i>
        </div>
        <div id="recommended-method" class="hidden p-4 border rounded-lg mt-2">
          <p>Details about GoPay/GoPay Later payment method.</p>
        </div>
      </div>
      <div>
        <h2 class="text-gray-600 font-semibold mb-2">All payment methods</h2>
        <div class="mb-4">
          <div class="flex items-center justify-between p-4 border rounded-lg cursor-pointer" onclick="toggleDetails('virtual-account')">
            <div class="flex items-center">
              <span>Virtual account</span>
            </div>
            <i class="fas fa-chevron-down text-gray-400"></i>
          </div>
          <div id="virtual-account" class="hidden p-4 border rounded-lg mt-2">
            <div class="flex items-center">
              <img alt="Mandiri logo" class="mr-2" height="24" src="https://storage.googleapis.com/a1aa/image/Z9rD0B3hUeTaOqg8Mpwa5J9E9KgP7bHTbqQGrMK0cfo.jpg" width="24"/>
              <img alt="BNI logo" class="mr-2" height="24" src="https://storage.googleapis.com/a1aa/image/tiAaG5p96S32FKLOKyWBs7g2TaTh-_I4aEAAUQ3o9l0.jpg" width="24"/>
              <img alt="BRI logo" class="mr-2" height="24" src="https://storage.googleapis.com/a1aa/image/j4OBdv56vMumEtGH9mdzEd1bHVdZedqpUf4IJ5ExGzA.jpg" width="24"/>
              <img alt="Bank logo" class="mr-2" height="24" src="https://storage.googleapis.com/a1aa/image/VtKi1cR0-IESzvnQI2ExDoMe6uLYI5P3bd-TpP__PZ8.jpg" width="24"/>
            </div>
            <p>Details about Virtual account payment method.</p>
          </div>
        </div>
        <div class="mb-4">
          <div class="flex items-center justify-between p-4 border rounded-lg cursor-pointer" onclick="toggleDetails('gopay-later')">
            <div class="flex items-center">
              <img alt="GoPay/GoPay Later logo" class="mr-2" height="24" src="https://storage.googleapis.com/a1aa/image/_ZxHjjJdaqsMUVtSbqqyeRH0naViYSFPHRr2l8yYUVg.jpg" width="24"/>
              <span>GoPay/GoPay Later</span>
            </div>
            <i class="fas fa-chevron-right text-gray-400"></i>
          </div>
          <div id="gopay-later" class="hidden p-4 border rounded-lg mt-2">
            <p>Details about GoPay/GoPay Later payment method.</p>
          </div>
        </div>
        <div>
          <div class="flex items-center justify-between p-4 border rounded-lg cursor-pointer" onclick="toggleDetails('qris')">
            <div class="flex items-center">
              <img alt="QRIS logo" class="mr-2" height="24" src="https://storage.googleapis.com/a1aa/image/3HVlJnDXpRhcTySDV6Z1MGWCm0sphalqlsqxsKp9uF4.jpg" width="24"/>
              <span>QRIS</span>
            </div>
            <i class="fas fa-chevron-right text-gray-400"></i>
          </div>
          <div id="qris" class="hidden p-4 border rounded-lg mt-2">
            <p>Details about QRIS payment method.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="flex items-center justify-between p-4 border-t text-gray-600 text-sm">
      <div class="flex items-center">
        <i class="fas fa-globe mr-2"></i>
        <span>EN</span>
      </div>
      <div>
        <span>Powered by</span>
        <img alt="Midtrans logo" class="inline-block ml-1" height="20" src="https://storage.googleapis.com/a1aa/image/8XkVGHNMSEqWzmYFfH74DvK1CG1Oeyg4q3v-D0uAdWs.jpg" width="50"/>
      </div>
    </div>
  </div>
  <script>
    function toggleDetails(id) {
      const element = document.getElementById(id);
      if (element.classList.contains('hidden')) {
        element.classList.remove('hidden');
      } else {
        element.classList.add('hidden');
      }
    }
  </script>
</body>
</html>