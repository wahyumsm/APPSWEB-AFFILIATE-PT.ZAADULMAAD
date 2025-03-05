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