<?php 

session_start(); 

if (!isset($_SESSION['user_id'])) { 

 header("Location: index.php"); 

} 

?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - ZaadulMaadMandiri </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    body {
        background-color: #f4f6f9;
    }
    .card {
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .dashboard-header {
        font-size: 24px;
        font-weight: bold;
        color: #333;
    }
    .icon {
        font-size: 24px;
        color: #17a2b8;
    }
    .transaction-link {
        font-weight: bold;
        color: #007bff;
        text-decoration: none;
    }
    .transaction-link:hover {
        text-decoration: underline;
    }
</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <marquee behavior="scroll" direction="left">Biaya Umroh Haji ZaadulMaadMandiri Tour Travel</marquee>

      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">


        
  
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Wahyu Hidayat</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-heading">Manajemen Transaksi</li>


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i>
        </a><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Data Paket Haji</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
        .card {
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        .icon-img {
            width: 50px;
            height: 50px;
        }
    </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <marquee behavior="scroll" direction="left">Biaya Umroh Haji ZaadulMaadMandiri Tour Travel</marquee>

      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">


        
  
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Wahyu Hidayat</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-heading">Manajemen Transaksi</li>


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="paketumroh.php">
              <i class="bi bi-circle"></i><span>Paket Umroh</span>
            </a>
          </li>
          <li>
            <a href="pakethaji.php">
              <i class="bi bi-circle"></i><span>Paket Haji</span>
            </a>
          </li>
          <li>
            <a href="komisitransaksi.php">
              <i class="bi bi-circle"></i><span>Komisi Transaksi</span>
            </a>
          </li>
          <li>
            <a href="dataproduk.php">
              <i class="bi bi-circle"></i><span>Data Produk </span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->


   

      <li class="nav-heading">Akun Saya</li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>


    </ul>

  </aside><!-- End Sidebar-->
  
  <main id="main" class="main">
  <div class="container mt-4">

  <div class="pagetitle">
      <h1>Transaksi Paket Umrah</h1>
     
    </div><!-- End Page Title -->
    <div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5>Jumlah Transaksi</h5>
                        <p class="mb-0">1 Transaksi</p>
                    </div>
                    <img src="https://cdn-icons-png.flaticon.com/128/3159/3159907.png" alt="transaksi" class="icon-img">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5>Transaksi Hari Ini</h5>
                        <p class="mb-0">0 Transaksi</p>
                    </div>
                    <img src="https://cdn-icons-png.flaticon.com/128/3890/3890684.png" alt="jatuh tempo" class="icon-img">
                </div>
            </div>
        </div>

    </div>
</div>
      
  </div>


    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Transaksi Umroh</h5>
            
              <!-- Table with stripped rows -->
              <table id="dataTable" class="table table-bordered table-hover">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Paket Haji</th>
                    <th>Pemesan</th>
                    <th>Jumlah Pax</th>
                    <th>Tanggal Berangkat</th>
                    <th>Waktu Transaksi</th>
                    <th>Status</th>
                    <th>% Bayar</th>
                    <th>Start Date</th>
                    <th>Completion</th>
                </tr>
            </thead>
            <tbody id="tableBody">
                <!-- Data akan di-generate oleh JavaScript -->
            </tbody>
        </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#dataTable').DataTable({
            "paging": true,  // Aktifkan pagination
            "lengthMenu": [5, 10, 25, 50], // Jumlah data per halaman
            "searching": true, // Aktifkan fitur pencarian
            "ordering": true, // Aktifkan fitur sorting
            "info": true // Tampilkan jumlah data
        });
    });
</script>
<script>
        // Data dummy untuk tabel
        const data = [
            { kode: "HAJ001", nama: "Ahmad Syafiq", paket: "Haji Plus", pemesan: "PT Travel Haji", pax: 4, tanggal: "2025-06-10", transaksi: "2025-02-15 14:30", status: "Lunas", bayar: "100%", start: "2025-02-15", completion: "Selesai", statusClass: "bg-success" },
            { kode: "UMR202", nama: "Fatimah Azzahra", paket: "Umroh Reguler", pemesan: "PT Berkah Travel", pax: 2, tanggal: "2025-04-05", transaksi: "2025-01-10 09:15", status: "Menunggu", bayar: "50%", start: "2025-01-10", completion: "Proses", statusClass: "bg-warning text-dark" },
            { kode: "HAJ303", nama: "Umar Bin Khattab", paket: "Haji Furoda", pemesan: "PT Amanah Umroh", pax: 6, tanggal: "2025-09-20", transaksi: "2025-03-01 11:00", status: "Gagal", bayar: "0%", start: "2025-03-01", completion: "Dibatalkan", statusClass: "bg-danger" },
            { kode: "HAJ303", nama: "Umar Bin Khattab", paket: "Haji Furoda", pemesan: "PT Amanah Umroh", pax: 6, tanggal: "2025-09-20", transaksi: "2025-03-01 11:00", status: "Gagal", bayar: "0%", start: "2025-03-01", completion: "Dibatalkan", statusClass: "bg-danger" },
            { kode: "HAJ303", nama: "Umar Bin Khattab", paket: "Haji Furoda", pemesan: "PT Amanah Umroh", pax: 6, tanggal: "2025-09-20", transaksi: "2025-03-01 11:00", status: "Gagal", bayar: "0%", start: "2025-03-01", completion: "Dibatalkan", statusClass: "bg-danger" },
            { kode: "HAJ303", nama: "Umar Bin Khattab", paket: "Haji Furoda", pemesan: "PT Amanah Umroh", pax: 6, tanggal: "2025-09-20", transaksi: "2025-03-01 11:00", status: "Gagal", bayar: "0%", start: "2025-03-01", completion: "Dibatalkan", statusClass: "bg-danger" },
            { kode: "HAJ303", nama: "Umar Bin Khattab", paket: "Haji Furoda", pemesan: "PT Amanah Umroh", pax: 6, tanggal: "2025-09-20", transaksi: "2025-03-01 11:00", status: "Gagal", bayar: "0%", start: "2025-03-01", completion: "Dibatalkan", statusClass: "bg-danger" },
            { kode: "HAJ303", nama: "Umar Bin Khattab", paket: "Haji Furoda", pemesan: "PT Amanah Umroh", pax: 6, tanggal: "2025-09-20", transaksi: "2025-03-01 11:00", status: "Gagal", bayar: "0%", start: "2025-03-01", completion: "Dibatalkan", statusClass: "bg-danger" },
            { kode: "HAJ303", nama: "Umar Bin Khattab", paket: "Haji Furoda", pemesan: "PT Amanah Umroh", pax: 6, tanggal: "2025-09-20", transaksi: "2025-03-01 11:00", status: "Gagal", bayar: "0%", start: "2025-03-01", completion: "Dibatalkan", statusClass: "bg-danger" },
            { kode: "HAJ303", nama: "Umar Bin Khattab", paket: "Haji Furoda", pemesan: "PT Amanah Umroh", pax: 6, tanggal: "2025-09-20", transaksi: "2025-03-01 11:00", status: "Gagal", bayar: "0%", start: "2025-03-01", completion: "Dibatalkan", statusClass: "bg-danger" },
            { kode: "HAJ303", nama: "Umar Bin Khattab", paket: "Haji Furoda", pemesan: "PT Amanah Umroh", pax: 6, tanggal: "2025-09-20", transaksi: "2025-03-01 11:00", status: "Gagal", bayar: "0%", start: "2025-03-01", completion: "Dibatalkan", statusClass: "bg-danger" },
            { kode: "HAJ303", nama: "Umar Bin Khattab", paket: "Haji Furoda", pemesan: "PT Amanah Umroh", pax: 6, tanggal: "2025-09-20", transaksi: "2025-03-01 11:00", status: "Gagal", bayar: "0%", start: "2025-03-01", completion: "Dibatalkan", statusClass: "bg-danger" },
            { kode: "HAJ303", nama: "Umar Bin Khattab", paket: "Haji Furoda", pemesan: "PT Amanah Umroh", pax: 6, tanggal: "2025-09-20", transaksi: "2025-03-01 11:00", status: "Gagal", bayar: "0%", start: "2025-03-01", completion: "Dibatalkan", statusClass: "bg-danger" },
            { kode: "HAJ303", nama: "Umar Bin Khattab", paket: "Haji Furoda", pemesan: "PT Amanah Umroh", pax: 6, tanggal: "2025-09-20", transaksi: "2025-03-01 11:00", status: "Gagal", bayar: "0%", start: "2025-03-01", completion: "Dibatalkan", statusClass: "bg-danger" },
            { kode: "HAJ303", nama: "Umar Bin Khattab", paket: "Haji Furoda", pemesan: "PT Amanah Umroh", pax: 6, tanggal: "2025-09-20", transaksi: "2025-03-01 11:00", status: "Gagal", bayar: "0%", start: "2025-03-01", completion: "Dibatalkan", statusClass: "bg-danger" },
            { kode: "HAJ303", nama: "Umar Bin Khattab", paket: "Haji Furoda", pemesan: "PT Amanah Umroh", pax: 6, tanggal: "2025-09-20", transaksi: "2025-03-01 11:00", status: "Gagal", bayar: "0%", start: "2025-03-01", completion: "Dibatalkan", statusClass: "bg-danger" },
            { kode: "HAJ303", nama: "Umar Bin Khattab", paket: "Haji Furoda", pemesan: "PT Amanah Umroh", pax: 6, tanggal: "2025-09-20", transaksi: "2025-03-01 11:00", status: "Gagal", bayar: "0%", start: "2025-03-01", completion: "Dibatalkan", statusClass: "bg-danger" },
            { kode: "HAJ303", nama: "Umar Bin Khattab", paket: "Haji Furoda", pemesan: "PT Amanah Umroh", pax: 6, tanggal: "2025-09-20", transaksi: "2025-03-01 11:00", status: "Gagal", bayar: "0%", start: "2025-03-01", completion: "Dibatalkan", statusClass: "bg-danger" },
            { kode: "HAJ303", nama: "Umar Bin Khattab", paket: "Haji Furoda", pemesan: "PT Amanah Umroh", pax: 6, tanggal: "2025-09-20", transaksi: "2025-03-01 11:00", status: "Gagal", bayar: "0%", start: "2025-03-01", completion: "Dibatalkan", statusClass: "bg-danger" },
            { kode: "HAJ303", nama: "Umar Bin Khattab", paket: "Haji Furoda", pemesan: "PT Amanah Umroh", pax: 6, tanggal: "2025-09-20", transaksi: "2025-03-01 11:00", status: "Gagal", bayar: "0%", start: "2025-03-01", completion: "Dibatalkan", statusClass: "bg-danger" },
            { kode: "HAJ303", nama: "Umar Bin Khattab", paket: "Haji Furoda", pemesan: "PT Amanah Umroh", pax: 6, tanggal: "2025-09-20", transaksi: "2025-03-01 11:00", status: "Gagal", bayar: "0%", start: "2025-03-01", completion: "Dibatalkan", statusClass: "bg-danger" },
            
        ];

        // Ambil elemen tbody
        const tableBody = document.getElementById("tableBody");

        // Loop untuk menambahkan data ke dalam tabel
        data.forEach((item, index) => {
            let row = `
                <tr>
                    <td>${index + 1}</td>
                    <td>${item.kode}</td>
                    <td>${item.nama}</td>
                    <td>${item.paket}</td>
                    <td>${item.pemesan}</td>
                    <td>${item.pax}</td>
                    <td>${item.tanggal}</td>
                    <td>${item.transaksi}</td>
                    <td><span class="badge ${item.statusClass}">${item.status}</span></td>
                    <td>${item.bayar}</td>
                    <td>${item.start}</td>
                    <td><span class="badge ${item.statusClass}">${item.completion}</span></td>
                </tr>
            `;
            tableBody.innerHTML += row;
        });
    </script>
</body>

</html>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="paketumroh.php">
              <i class="bi bi-circle"></i><span>Paket Umroh</span>
            </a>
          </li>
          <li>
            <a href="pakethaji.php">
              <i class="bi bi-circle"></i><span>Paket Haji</span>
            </a>
          </li>
          <li>
            <a href="komisitransaksi.php">
              <i class="bi bi-circle"></i><span>Komisi Transaksi</span>
            </a>
          </li>
          
          <li>
            <a href="dataproduk.php">
              <i class="bi bi-circle"></i><span>Data Produk </span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->


   

      <li class="nav-heading">Akun Saya</li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>


    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="container mt-4">
      <div class="dashboard-header mb-4">Dashboard Biaya Umroh Haji PT.ZaadulMaadMandiri</div>
      
      <div class="row">
            <div class="col-md-4">
                <div class="card p-3 shadow">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Jumlah Transaksi</h5>
                            <p class="mb-0">1 Transaksi</p>
                        </div>
                        <i class="fas fa-file-invoice icon"></i> <!-- Ikon dokumen transaksi -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 shadow">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Jatuh Tempo</h5>
                            <p class="mb-0">0 Transaksi</p>
                        </div>
                        <i class="fas fa-clock icon"></i> <!-- Ikon jam -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 shadow">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Saldo Deposit</h5>
                            <p class="mb-0">IDR 0,00</p>
                        </div>
                        <i class="fas fa-wallet icon"></i> <!-- Ikon dompet -->
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4 p-3 shadow">
            <h5><i class="fas fa-exchange-alt me-2"></i> Transaksi Terbaru</h5>
            <a href="#" class="transaction-link"><i class="fas fa-receipt me-1"></i> [TRB000358] Transaksi Paket Haji Oleh Wahyu</a>
            <span class="badge bg-success"><i class="fas fa-calendar-check me-1"></i> 2025-03-02 22:58:35</span>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card p-3 shadow">
                    <h5><i class="fas fa-exclamation-circle me-2"></i> Pembayaran Jatuh Tempo</h5>
                    <p class="text-muted"><i class="fas fa-info-circle me-1"></i> Tidak ada pembayaran jatuh tempo</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-3 shadow">
                    <h5><i class="fas fa-hourglass-half me-2"></i> Pembayaran Menunggu Konfirmasi</h5>
                    <p class="text-muted"><i class="fas fa-info-circle me-1"></i> Tidak ada pembayaran menunggu konfirmasi</p>
                </div>
            </div>
        </div>
  </div>
    
  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>