<?php
session_start();

// Periksa apakah pengguna masuk atau memiliki peran yang sesuai
if (!isset($_SESSION['masuk']) || ($_SESSION['masuk'] !== true) || ($_SESSION['role'] !== 'supervisor' && $_SESSION['role'] !== 'admin')) {
    header("Location: login.php");
    exit();
}

// Mendapatkan username dan id_user dari session
$username = $_SESSION['username'];
$idUser = $_SESSION['id_user'];
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BERANDA - SMART</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo2.png" rel="icon">
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  

  <!-- Template Main CSS File -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
  .header {
    background-color: #892641;
  }
  .sidebar{
      background-color: #892641;
    }
  .tbsmart{
    font-size: 12px;
    margin-bottom: 0;
    font-weight: 600;
    color: #ffffff;
  }
  .pengumuman{
    font-size: 40px;
    font-weight: 700;
    color: #fff;
    font-family: "Nunito", sans-serif;
    text-align: center;
    padding-top: 100px;
  }
  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 70vh;
  }
          
.content {
    text-align: center;
  }
.c-item {
  height: 360px;
  }
  .c-img {
  height: 100%;
  object-fit: cover;
  filter: brightness(0.6);
  }
  .img {
  height: 50%; /* Mengurangi lebar gambar menjadi 50% dari ukuran aslinya */
  width: auto; /* Menjaga rasio aspek gambar */
}
.cat-item div {
    background: #FFFFFF;
    transition: .5s;
    
}

.cat-item:hover div {
    background: gray;
    border-color: transparent;
}

.cat-item div * {
    transition: .5s;
}

.cat-item:hover div * {
    color: #892641 !important;
}

</style>




<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo2.png" alt="">
        <span class="htsimpan">SMART<br>
          <tb class="tbsmart">Sistem Informasi Manajemen Pengelolaan</tb></span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Cari barang" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              Notifikasi Terbaru
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Lihat Semua</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Peringatan</h4>
                <p>Stok barang berkurang</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Stok Habis</h4>
                <p>Barang persediaan ini di gudang sudah habis</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Barang sudah diambil</h4>
                <p>Barang telah siap dan sudah diambil dari gudang</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Informasi update</h4>
                <p>Stok barang ini telah diperbarui</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Lihat semua notifikasi</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $username; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6> <?php echo $username; ?></h6>
              <span><?php echo $idUser; ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profil.html">
                <i class="bi bi-person"></i>
                <span>Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
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
      <span>Beranda</span>
    </a>
  </li><!-- End Beranda Sidebar -->

  <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
    <i class="bi bi-bar-chart"></i><span></span>Kelola Data</span><i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
    <li>
      <a href="kelolaKategori.php">
        <i class="bi bi-circle"></i><span>Kelola Kategori</span>
      </a>
    </li>
    <li>
      <a href="inputBarangBaru.php">
        <i class="bi bi-circle"></i><span>Input Barang Baru</span>
      </a>
    </li>
    <li>
      <a href="inputStok.php">
        <i class="bi bi-circle"></i><span>Input Stok</span>
      </a>
    </li>
    <li>
      <a href="kelolaUser.php">
        <i class="bi bi-circle"></i><span>Kelola User</span>
      </a>
    </li>
  </ul>
</li><!-- End Kelola Data Sidebar -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="kelolaPermintaan.php">
      <i class="bi bi-journal-text"></i><span>Kelola Permintaan</span>
    </a>
  </li><!-- End Kelola Permintaan Data Sidebar -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="laporanUser.php">
          <i class="bi bi-circle"></i><span>Laporan Permintaan User</span>
        </a>
      </li>
      <li>
        <a href="laporanMutasi.php">
          <i class="bi bi-circle"></i><span>Laporan Mutasi Barang Persediaan</span>
        </a>
      </li>
      <li>
        <a href="laporanBuku.php">
          <i class="bi bi-circle"></i><span>Laporan Buku Persediaan</span>
        </a>
      </li>
      <li>
        <a href="laporanPersediaan.php">
          <i class="bi bi-circle"></i><span>Laporan Persediaan Masuk</span>
        </a>
      </li>
    </ul>
  </li><!-- End Laporan Sidebar -->



  <li class="nav-item">
    <a class="nav-link collapsed" href="profil.php">
      <i class="bi bi-person"></i>
      <span>Profil</span>
    </a>
  </li><!-- End Profil Sidebar -->

</ul>

</aside>
<!-- End Sidebar-->


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Beranda</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Beranda</li>
        </ol>


        <!--Image dahsboard-->
       


        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner opacity-75 c-item">
            <img src="assets/img/gudang6.jpg" class="d-block w-100 c-img" alt="Slide 3">
            <div class="carousel-caption top-0 mt-4">
              <p class="pengumuman">Harap Mengambil Barang yang Sudah Dipesan</p>
            </div>
            </div>
          </div>

        <!--End Image Dashboard-->



    </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <class="col-lg-8">
          <div class="row">


            <!-- Riwayat Pengambilan -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hari ini</a></li>
                    <li><a class="dropdown-item" href="#">Bulan ini</a></li>
                    <li><a class="dropdown-item" href="#">Tahun ini</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Transaksi Harian <span>| Hari ini</span></h5>

                  <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                      <tr>
                        <th scope="col">Id Transaksi Order Num</th>
                        <th scope="col">Id User</th>
                        <th scope="col">Id Barang</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tanggal Ready</th>
                        <th scope="col">Tanggal Diambil</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>123200</th>
                        <td>3001</td>
                        <td>2003</td>
                        <td class="fw-bold">Selesai</td>
                        <td>19-06-2023</td>
                        <td>20-06-2023</td>
                      </tr>
                      <tr>
                        <th>123204</th>
                        <td>3009</td>
                        <td>2007</td>
                        <td class="fw-bold">Batal</td>
                        <td>18-06-2023</td>
                        <td>Null</td>
                      </tr>
                      <tr>
                        <th>123210</th>
                        <td>3011</td>
                        <td>2002</td>
                        <td class="fw-bold">Selesai</td>
                        <td>19-06-2023</td>
                        <td>21-06-2003</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

       
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      SMART <strong><span>Sistem Informasi Manajemen Pengelolaan</span></strong>
    </div>
    <div class="credits">
      Made by <a href="https://bootstrapmade.com/">Tim Efektif</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    $(document).ready(function () {
    $('#example').DataTable();
    });
  </script>

</body>

</html>


