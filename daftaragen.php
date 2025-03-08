
<?php
include 'config/database.php';
$sql = "SELECT id, nama, peran, kode_referral AS jenis, induk_keagenan AS induk, 
               '' AS jenis_kelamin, kontak AS no_telp, alamat, email 
        FROM agen";
$result = $conn->query($sql);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Jadi Agen Travel Umroh Resmi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script>
        function showTab(tabName) {
            document.getElementById('informasi').style.display = tabName === 'informasi' ? 'block' : 'none';
            document.getElementById('daftarKeagenan').style.display = tabName === 'daftarKeagenan' ? 'block' : 'none';

            document.getElementById('tab-informasi').classList.toggle('text-blue-500', tabName === 'informasi');
            document.getElementById('tab-informasi').classList.toggle('text-gray-500', tabName !== 'informasi');
            document.getElementById('tab-daftarKeagenan').classList.toggle('text-blue-500', tabName === 'daftarKeagenan');
            document.getElementById('tab-daftarKeagenan').classList.toggle('text-gray-500', tabName !== 'daftarKeagenan');
        }

        function toggleContent(id) {
            var content = document.getElementById(id);
            var icon = document.getElementById(id + '-icon');
            if (content.style.display === 'none') {
                content.style.display = 'block';
                icon.classList.remove('fa-chevron-down');
                icon.classList.add('fa-chevron-up');
            } else {
                content.style.display = 'none';
                icon.classList.remove('fa-chevron-up');
                icon.classList.add('fa-chevron-down');
            }
        }

        function goToPage(pageNumber) {
            // Implement pagination logic here
            console.log("Go to page:", pageNumber);
        }

        function showModal(agentId) {
            var modal = document.getElementById('modal');
            var modalContent = document.getElementById('modal-content');
            // Fetch and display agent details based on agentId
            modalContent.innerHTML = `
                <p><strong>Kode:</strong> ${agentId}</p>
                <p><strong>Nama:</strong> Agen ${agentId}</p>
                <p><strong>Peran:</strong> Sub Agen</p>
                <p><strong>Jenis:</strong> Umroh</p>
                <p><strong>Detail:</strong> Detail informasi keagenan untuk ${agentId}</p>
            `;
            modal.style.display = 'flex';
        }

        function closeModal() {
            var modal = document.getElementById('modal');
            modal.style.display = 'none';
        }
    </script>
      <style>
        .custom-header { background-color:#ee8003; }
        .custom-headerr { background-color:#26a69a; }
        .custom-headerrr { color:#26a69a; }
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
















        <div class="bg-white shadow-md rounded-lg p-4 mx-20">
            <div class="border-b-2 border-gray-200 mb-4">
                <ul class="flex">
                    <li class="mr-4">
                        <a id="tab-informasi" class="   custom-headerrr font-semibold cursor-pointer" onclick="showTab('informasi')">Informasi</a>
                    </li>
                    <li>
                        <a id="tab-daftarKeagenan" class="text-gray-500 cursor-pointer" onclick="showTab('daftarKeagenan')">Daftar Keagenan</a>
                    </li>
                </ul>
            </div>
            <div id="informasi">
                <div class="flex flex-col md:flex-row">
                    <div class=" w-full md:w-1/2 pr-2">
                        <div class="mb-4">
                            <div class="custom-headerr text-white p-3 rounded-t-lg text-sm flex justify-between items-center cursor-pointer" onclick="toggleContent('branchCoordinator')">
                                Branch Coordinator
                                <i id="branchCoordinator-icon" class="fas fa-chevron-down"></i>
                            </div>
                            <div id="branchCoordinator" class=" border border-gray-200 p-3 rounded-b-lg text-sm" style="display: none;">
                                <p>Jenjang karir menjadi seorang Branch Coordinator (BC) adalah wajib mempunyai 30 Eksekutive Syiar dalam 1 musim hijriah atau 30 Jamaah yang siap untuk melakukan syiar.</p>
                                <p class="mt-2">Seorang BC berhak mendapatkan :</p>
                                <ol class="list-decimal list-inside mt-2">
                                    <li>Komisi Group Selling Rp 500.000 dari berapapun yang dihasilkan penjualan oleh Eksekutive Syiarnya</li>
                                    <li>Direct Selling BC Rp 3.500.000 hingga Rp 6.500.000</li>
                                </ol>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="custom-headerr text-white p-3 rounded-lg text-sm flex justify-between items-center cursor-pointer" onclick="toggleContent('executiveSyiar')">
                                Executive Syiar
                                <i id="executiveSyiar-icon" class="fas fa-chevron-down"></i>
                            </div>
                            <div id="executiveSyiar" class="border border-gray-200 p-3 rounded-b-lg text-sm" style="display: none;">
                                <!-- Content for Executive Syiar -->
                                <p>Content for Executive Syiar goes here.</p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="custom-headerr text-white p-3 rounded-lg text-sm flex justify-between items-center cursor-pointer" onclick="toggleContent('branchManager')">
                                Branch Manager
                                <i id="branchManager-icon" class="fas fa-chevron-down"></i>
                            </div>
                            <div id="branchManager" class="border border-gray-200 p-3 rounded-b-lg text-sm" style="display: none;">
                                <!-- Content for Branch Manager -->
                                <p>Content for Branch Manager goes here.</p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="custom-headerr text-white p-3 rounded-lg text-sm flex justify-between items-center cursor-pointer" onclick="toggleContent('subAgen')">
                                Sub Agen
                                <i id="subAgen-icon" class="fas fa-chevron-down"></i>
                            </div>
                            <div id="subAgen" class="border border-gray-200 p-3 rounded-b-lg text-sm" style="display: none;">
                                <!-- Content for Sub Agen -->
                                <p>Content for Sub Agen goes here.</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 pl-2">
                    <div class="bg-gray-100 p-3 rounded-lg text-sm">
    <h2 class="text-base font-semibold mb-3 text-blue-600">REGISTRASI KEAGENAN</h2>
    <form method="POST" action="registeragen.php" id="registerForm">

        <div class="mb-3">
            <label class="block text-gray-700">Nama</label>
            <input type="text" name="nama" class="w-full p-2 border border-gray-300 rounded" placeholder="Nama" required>
        </div>
        <div class="mb-3">
            <label class="block text-gray-700">Peran</label>
            <select name="peran" class="w-full p-2 border border-gray-300 rounded" required>
                <option value="subagen">Sub Agen</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="block text-gray-700">Induk Keagenan</label>
            <div class="flex">
                <input type="text" name="induk_keagenan" class="w-full p-2 border border-gray-300 rounded-l">
                <button type="button" class="bg-blue-500 text-white p-2 rounded-r"><i class="fas fa-user"></i></button>
            </div>
        </div>
        <div class="mb-3">
            <label class="block text-gray-700">No.Telepon/HP</label>
            <div class="flex">
                <span class="bg-gray-200 p-2 border border-gray-300 rounded-l">+62</span>
                <input type="text" name="kontak" class="w-full p-2 border border-gray-300 rounded-r" placeholder="No.Telepon/HP" required>
            </div>
        </div>
        <div class="mb-3">
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" class="w-full p-2 border border-gray-300 rounded" placeholder="Email" required>
        </div>
        <div class="mb-3">
            <label class="block text-gray-700">Kata Sandi</label>
            <input type="password" name="password" class="w-full p-2 border border-gray-300 rounded" placeholder="Kata Sandi" minlength="8" required>
            <p class="text-xs text-gray-500 mt-1">Password minimal 8 karakter, selalu gunakan password yang aman</p>
        </div>
        <div class="mb-3">
            <label class="block text-gray-700">Informasi Rekening Bank</label>
            <div class="mb-2">
                <select name="bank" class="w-full p-2 border border-gray-300 rounded" required>
                    <option value="">Pilih Bank</option>
                    <option value="bri">BRI</option>
                    <option value="bca">BCA</option>
                    <option value="mandiri">Mandiri</option>
                </select>
            </div>
            <div>
                <input type="text" name="rekening" class="w-full p-2 border border-gray-300 rounded" placeholder="Nomor Rekening" required>
            </div>
        </div>
        <button type="submit" class="bg-blue-500 text-white p-2 rounded w-full">Daftar</button>
    </form>

    <!-- Tambahan Link untuk Login -->
    <p class="text-center text-sm text-gray-600 mt-3">
        Sudah punya akun? <a href="login.php" class="text-blue-500 font-semibold">Login di sini</a>
    </p>
</div>

                    </div>
                </div>
            </div>
            <div id="daftarKeagenan" style="display: none;">
    <table style="text-align: center;" class="min-w-full bg-white text-sm">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b border-gray-200 bg-gray-100">No</th>
                <th class="py-2 px-4 border-b border-gray-200 bg-gray-100">Nama</th>
                <th class="py-2 px-4 border-b border-gray-200 bg-gray-100">Peran</th>
                <th class="py-2 px-4 border-b border-gray-200 bg-gray-100">Jenis</th>
                <th class="py-2 px-4 border-b border-gray-200 bg-gray-100">Induk</th>
                <th class="py-2 px-4 border-b border-gray-200 bg-gray-100">Jenis Kelamin</th>
                <th class="py-2 px-4 border-b border-gray-200 bg-gray-100">No.Telp</th>
                <th class="py-2 px-4 border-b border-gray-200 bg-gray-100">Alamat</th>
                <th class="py-2 px-4 border-b border-gray-200 bg-gray-100">Email</th>
                <th class="py-2 px-4 border-b border-gray-200 bg-gray-100">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if ($result->num_rows > 0) {
                $no = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td class='py-2 px-4 border-b border-gray-200'>" . $no++ . "</td>";
                    echo "<td class='py-2 px-4 border-b border-gray-200'>" . htmlspecialchars($row['nama']) . "</td>";
                    echo "<td class='py-2 px-4 border-b border-gray-200'>" . htmlspecialchars($row['peran']) . "</td>";
                    echo "<td class='py-2 px-4 border-b border-gray-200'>" . htmlspecialchars($row['jenis']) . "</td>";
                    echo "<td class='py-2 px-4 border-b border-gray-200'>" . htmlspecialchars($row['induk']) . "</td>";
                    echo "<td class='py-2 px-4 border-b border-gray-200'>" . htmlspecialchars($row['jenis_kelamin']) . "</td>";
                    echo "<td class='py-2 px-4 border-b border-gray-200'>" . htmlspecialchars($row['no_telp']) . "</td>";
                    echo "<td class='py-2 px-4 border-b border-gray-200'>" . htmlspecialchars($row['alamat']) . "</td>";
                    echo "<td class='py-2 px-4 border-b border-gray-200'>" . htmlspecialchars($row['email']) . "</td>";
                    echo "<td class='py-2 px-4 border-b border-gray-200'>";
                    echo "<button class='bg-blue-500 text-white px-2 py-1 rounded' onclick=\"showModal('" . $row['id'] . "')\">";
                    echo "<i class='fas fa-user'></i></button>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='10' class='py-2 px-4 border-b border-gray-200 text-center'>Tidak ada data</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <div class="flex justify-between items-center mt-4">
        <button class="bg-gray-300 text-gray-700 px-3 py-1 rounded" onclick="goToPage(1)">Previous</button>
        <div>
            <button class="bg-blue-500 text-white px-3 py-1 rounded mx-1" onclick="goToPage(1)">1</button>
            <button class="bg-gray-300 text-gray-700 px-3 py-1 rounded mx-1" onclick="goToPage(2)">2</button>
            <button class="bg-gray-300 text-gray-700 px-3 py-1 rounded mx-1" onclick="goToPage(3)">3</button>
        </div>
        <button class="bg-gray-300 text-gray-700 px-3 py-1 rounded" onclick="goToPage(2)">Next</button>
    </div>
</div>

        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center" style="display: none;">
        <div class="bg-white p-6 rounded-lg w-1/3">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold">Detail Keagenan</h2>
                <button class="text-gray-500" onclick="closeModal()"><i class="fas fa-times"></i></button>
            </div>
            <div id="modal-content">
                <!-- Agent details will be displayed here -->
            </div>
            <div class="mt-4 text-right">
                <button class="bg-blue-500 text-white px-4 py-2 rounded" onclick="closeModal()">Close</button>
            </div>
        </div>
    </div>
</body>
<script>
    document.getElementById('registerForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah reload halaman
    
        const formData = new FormData(this);
        
        fetch('registeragen.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Pendaftaran berhasil!');
            } else {
                alert('Pendaftaran gagal: ' + data.message);
            }
        })
        .catch(error => console.error('Error:', error));
    });
    </script>
      <!-- <script>
   document.getElementById('menu-button').addEventListener('click', function () {
     var menu = document.getElementById('mobile-menu');
     menu.classList.toggle('hidden');
   });
  </script> -->
</html>