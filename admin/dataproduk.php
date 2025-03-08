<!DOCTYPE html>
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
 
</div>
      
  </div>


  <section class="section">
  <div class="row">
    <div class="col-lg-12">
        <div class="card shadow-lg">
            <div class="card-body">
                <h5 class="card-title text-center">Data Paket Ibadah</h5>
                <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addDataModal">
                    Tambah Data
                </button>

                <!-- Table -->
                <div class="table-responsive">
                    <table id="dataTable" class="table table-bordered table-hover text-center align-middle">
                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Jenis Produk</th>
                                <th>Jenis Paket</th>
                                <th>Program Harian</th>
                                <th>Stok</th>
                                <th>Kategori</th>
                                <th>Foto Produk</th>
                                <th>Status Produk</th>
                                <th>Fasilitas Terbaik</th>
                                <th>Keberangkatan</th>
                                <th>Harga Quad</th>
                                <th>Harga Triple</th>
                                <th>Harga Double</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            <?php
                            $koneksi = mysqli_connect("localhost", "root", "", "zaadulmad");

                            if (!$koneksi) {
                                die("Koneksi database gagal: " . mysqli_connect_error());
                            }

                            $result = mysqli_query($koneksi, "SELECT * FROM paket_ibadah");

                            if (!$result) {
                                die("Query gagal: " . mysqli_error($koneksi));
                            }

                            if (mysqli_num_rows($result) > 0) {
                                $no = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td class='text-center align-middle'>{$no}</td>";
                                    echo "<td class='align-middle'>" . htmlspecialchars($row['nama_produk']) . "</td>";
                                    echo "<td class='align-middle'>" . htmlspecialchars($row['jenis_produk']) . "</td>";
                                    echo "<td class='align-middle'>" . htmlspecialchars($row['jenis_paket']) . "</td>";
                                    echo "<td class='align-middle'>" . htmlspecialchars($row['program_harian']) . "</td>";
                                    echo "<td class='align-middle text-center'>" . htmlspecialchars($row['stok']) . "</td>";
                                    echo "<td class='align-middle'>" . htmlspecialchars($row['kategori']) . "</td>";
                                    echo "<td class='align-middle text-center'>";
                                    echo "<img src='" . htmlspecialchars($row['foto_produk']) . "' class='img-thumbnail' style='width: 50px; height: 50px; object-fit: cover;'>";
                                    echo "</td>";
                                    echo "<td class='align-middle text-center'>" . htmlspecialchars($row['status_produk']) . "</td>";
                                    echo "<td class='align-middle'>" . htmlspecialchars($row['fasilitas_terbaik']) . "</td>";
                                    echo "<td class='align-middle'>" . htmlspecialchars($row['keberangkatan']) . "</td>";
                                    echo "<td class='align-middle text-end'>" . number_format($row['harga_quad'], 0, ',', '.') . "</td>";
                                    echo "<td class='align-middle text-end'>" . number_format($row['harga_triple'], 0, ',', '.') . "</td>";
                                    echo "<td class='align-middle text-end'>" . number_format($row['harga_double'], 0, ',', '.') . "</td>";
                                    echo "<td class='text-center align-middle'>";
                                    echo "<div class='d-flex justify-content-center gap-2'>";
                                    echo "<button class='btn btn-sm btn-primary' onclick=\"editProduk('" . $row['id_produk'] . "')\">";
                                    echo "<i class='fas fa-edit'></i> Edit</button>";
                                    echo "<button class='btn btn-sm btn-danger' onclick=\"hapusProduk('" . $row['id_produk'] . "')\">";
                                    echo "<i class='fas fa-trash'></i> Hapus</button>";
                                    echo "<button class='btn btn-sm btn-info' onclick=\"detailProduk('" . $row['id_produk'] . "')\">";
                                    echo "<i class='fas fa-eye'></i> Detail</button>";
                                    echo "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                    $no++;
                                }
                            } else {
                                echo "<tr><td colspan='15' class='text-center text-muted py-3'>Tidak ada data</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</section>

<!-- Modal Tambah Data -->
<div class="modal fade" id="addDataModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Tambah Data Paket Ibadah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addDataForm">
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
              </div>
              <?php
include '../config/database.php'; // Pastikan ada koneksi ke database

$sql = "SHOW COLUMNS FROM paket_ibadah WHERE Field = 'jenis_produk'";
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    $enumJenis = str_replace("enum('", "", $row['Type']);
    $enumJenis = str_replace("')", "", $enumJenis);
    $jenis_produk_options = explode("','", $enumJenis);
} else {
    $jenis_produk_options = [];
}
?>
<div class="mb-3">
    <label for="jenis_produk" class="form-label">Jenis Produk</label>
    <select class="form-control" id="jenis_produk" name="jenis_produk" required>
        <option value="">-- Pilih Jenis Produk --</option>
        <?php
        if (!empty($jenis_produk_options)) {
            foreach ($jenis_produk_options as $jenis) {
                echo "<option value='$jenis'>$jenis</option>";
            }
        } else {
            echo "<option value=''>Error: Data tidak ditemukan</option>";
        }
        ?>
    </select>
</div>


              <div class="mb-3">
                <label for="jenis_paket" class="form-label">Jenis Paket</label>
                <input type="text" class="form-control" id="jenis_paket" name="jenis_paket" required>
              </div>
              <div class="mb-3">
                <label for="program_harian" class="form-label">Program Harian</label>
                <input type="text" class="form-control" id="program_harian" name="program_harian" required>
              </div>
              <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" required>
              </div>
              <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="foto_produk" class="form-label">Foto Produk</label>
                <input type="file" class="form-control" id="foto_produk" name="foto_produk">
              </div>
              <?php
include '../config/database.php'; // Pastikan ada titik koma

$sql = "SHOW COLUMNS FROM paket_ibadah WHERE Field = 'status_produk'";
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    $enumStatus = str_replace("enum('", "", $row['Type']);
    $enumStatus = str_replace("')", "", $enumStatus);
    $status_produk_options = explode("','", $enumStatus);
}
?>
<div class="mb-3">
    <label for="status_produk" class="form-label">Status Produk</label>
    <select class="form-control" id="status_produk" name="status_produk" required>
        <option value="">-- Pilih Status Produk --</option>
        <?php
        if (!empty($status_produk_options)) {
            foreach ($status_produk_options as $status) {
                echo "<option value='$status'>$status</option>";
            }
        } else {
            echo "<option value=''>Error: Data tidak ditemukan</option>";
        }
        ?>
    </select>
</div>



              <div class="mb-3">
                <label for="fasilitas_terbaik" class="form-label">Fasilitas Terbaik</label>
                <input type="text" class="form-control" id="fasilitas_terbaik" name="fasilitas_terbaik" required>
              </div>
              <div class="mb-3">
                <label for="keberangkatan" class="form-label">Keberangkatan</label>
                <input type="date" class="form-control" id="keberangkatan" name="keberangkatan" required>
              </div>
              <div class="mb-3">
                <label for="harga_quad" class="form-label">Harga Quad</label>
                <input type="number" class="form-control" id="harga_quad" name="harga_quad" required>
              </div>
              <div class="mb-3">
                <label for="harga_triple" class="form-label">Harga Triple</label>
                <input type="number" class="form-control" id="harga_triple" name="harga_triple" required>
              </div>
              <div class="mb-3">
                <label for="harga_double" class="form-label">Harga Double</label>
                <input type="number" class="form-control" id="harga_double" name="harga_double" required>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>


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


<!-- TAMBAH PRODUKK -->
<script>
  document.getElementById("addDataForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Mencegah reload halaman

    let formData = new FormData(this);

    fetch("proses_tambah.produk.php", {
      method: "POST",
      body: formData,
    })
    .then(response => response.text())
    .then(result => {
      alert(result);
      location.reload(); // Refresh halaman setelah berhasil tambah data
    })
    .catch(error => console.error("Error:", error));
  });
</script>

</body>

</html>