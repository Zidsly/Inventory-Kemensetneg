<?php
session_start();

// Periksa apakah pengguna masuk atau memiliki peran yang sesuai
if (!isset($_SESSION['masuk']) || ($_SESSION['masuk'] !== true) || ($_SESSION['role'] !== 'user')) {
    header("Location: login.php");
    exit();
}


// Mendapatkan username dan id_user dari session
$username = $_SESSION['username'];
$idUser = $_SESSION['id_user'];

// Lanjutkan dengan konten halaman indexUser.php
// ...
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
  height: 200px;
  }
  .c-img {
  height: 100%;
  object-fit: cover;
  filter: brightness(0.6);
  }
  .img {
  height: 35%; /* Mengurangi lebar gambar menjadi 50% dari ukuran aslinya */
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

.dropdown-container {
    display: flex;
    align-items: center;
}

.dropdown {
    display: flex;
    align-items: center;
}

.dropdown-btn {
    display: inline-block;
    height: 50px;
    font-size: 13px;
    font-weight: 600;
    background-color: #892641;
    border: 1px solid #892641;
    color: #fff;
    transition: 0.2s;
    cursor: pointer;
    outline: none;
    padding: 8px 16px;
    border-radius: 24px;
    margin-right: 10px;
}

.dropdown-btn:hover {
    background-color: #fff;
    border: 1px solid #892641;
    color: #892641;
}

.dropdown-content {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    background-color: #f9f9f9;
    z-index: 1;
    margin-top: 10px;
    padding: 10px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
}

.subcategories {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    grid-gap: 10px;
    max-height: 200px;
    overflow-y: auto;
}

.subcategories a {
    display: block;
    padding: 5px;
    text-decoration: none;
    color: #333;
}

.search-bar {
    display: flex;
    align-items: center;
}

.search-form {
    margin-bottom: 0;
}

.search-bar input {
    height: 48px;
    width: 50px;
    background: #892641;
    border: 1px solid #892641;
    border-radius: 50px;
    box-sizing: border-box;
    font-size: 14px;
    color: #892641;
    outline: none;
    padding-left: 16px;
    transition: .5s;
}

.search-bar input::placeholder {
    opacity: 0;
    color: #892641;
}

.search-bar:hover input {
    width: 300px;
    background: #fff;
    border-radius: 24px;
    z-index: 2;
}

.search-bar:hover .dropdown-btn {
    display: none;
}

.search-bar:hover input::placeholder {
    opacity: 100;
}

.search-bar i {
    font-size: 20px;
    color: #fff;
    transition: .2s;
    margin-left: 10px;
}

.search-bar:hover i {
    color: #892641;
    z-index: 3;
}

.product-image {
    width: 100%;
    height: 150px;
    background-color: #ccc;
    margin-bottom: 10px;
    margin-top: 50px;
}

.button-container2 {
    position: fixed;
    bottom: 50px;
    right: 20px;
}

.button-container2 .btn {
    background-color: transparent;
    border: none;
}

      .title2 {
        text-align: center;
        color: inherit;
        font-weight: bold;
        font-size: 24px;
        color: #892641;
        background-color: transparent;
        border: none
}


.product-container {
    max-height: 600px; /* Atur tinggi maksimum sesuai kebutuhan */
    margin-bottom: 20px;
  }

  .product-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: flex-start;
  }

  .product-card {
    text-align: center;
    width: calc(16.666% - 20px); /* 6 kolom */
  }

  .product-image {
    width: 100%;
    height: 150px;
    background-color: #ccc;
    margin-bottom: 10px;
  }

  .product-image img {
    height: 150px;
    width: 100%;
    object-fit: fill;
  }

  .product-title {
    font-weight: bold;
    margin-bottom: 5px;
  }

  .product-button {
    display: inline-block;
    font-size: 14px;
    padding: 4px 8px;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 4px;
    text-decoration: none;
    color: #333;
    font-weight: bold;
    cursor: pointer;
    transition: 0.2s;
  }

  .product-button:hover {
    background-color: #892641;
    color: #fff;
  }

  .pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
  }

  .pagination-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .pagination-link {
    margin: 0 5px;
    text-decoration: none;
    color: #333;
  }

  .pagination-link.active {
    color: #892641;
    font-weight: bold;
  }

  .view-options {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    margin-bottom: 10px;
  }

  .view-options-label {
    margin-right: 10px;
  }

  .view-options-select {
    margin-right: 10px;
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
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin Supervisor</h6>
              <span>Web Designer</span>
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
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Beranda</span>
        </a>
      </li><!-- End Beranda Sidebar -->

      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-bar-chart"></i><span></span>Kelola Data</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="kelolaKategori.html">
            <i class="bi bi-circle"></i><span>Kelola Kategori</span>
          </a>
        </li>
        <li>
          <a href="inputBarangBaru.html">
            <i class="bi bi-circle"></i><span>Input Barang Baru</span>
          </a>
        </li>
        <li>
          <a href="inputStok.html">
            <i class="bi bi-circle"></i><span>Input Stok</span>
          </a>
        </li>
        <li>
          <a href="kelolaUser.html">
            <i class="bi bi-circle"></i><span>Kelola User</span>
          </a>
        </li>
      </ul>
    </li><!-- End Kelola Data Sidebar -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="kelolaPermintaan.html">
          <i class="bi bi-journal-text"></i><span>Kelola Permintaan</span>
        </a>
      </li><!-- End Kelola Permintaan Data Sidebar -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="laporanUser.html">
              <i class="bi bi-circle"></i><span>Laporan Permintaan User</span>
            </a>
          </li>
          <li>
            <a href="laporanMutasi.html">
              <i class="bi bi-circle"></i><span>Laporan Mutasi Barang Persediaan</span>
            </a>
          </li>
          <li>
            <a href="laporanBuku.html">
              <i class="bi bi-circle"></i><span>Laporan Buku Persediaan</span>
            </a>
          </li>
          <li>
            <a href="laporanPersediaan.html">
              <i class="bi bi-circle"></i><span>Laporan Persediaan Masuk</span>
            </a>
          </li>
        </ul>
      </li><!-- End Laporan Sidebar -->



      <li class="nav-item">
        <a class="nav-link collapsed" href="profil.html">
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
    <br>
    </div><!-- End Page Title -->

    <div class="dropdown">
        <?php
        // Menghubungkan ke database
        require 'koneksi.php';
        $conn = db_connect();

        // Ambil data dari tabel tb_kategori
        $sql = "SELECT nama_kategori FROM tb_kategori";
        $result = mysqli_query($conn, $sql);

        $kategoriArray = array(); // Membuat array untuk menyimpan nama kategori unik

        if (mysqli_num_rows($result) > 0) {
            // Membuat tombol dropdown untuk setiap baris data yang belum ada di array
            while ($row = mysqli_fetch_assoc($result)) {
                $namaKategori = $row["nama_kategori"];
                if (!in_array($namaKategori, $kategoriArray)) {
                    $kategoriArray[] = $namaKategori;
                    $dropdownContentId = strtolower(str_replace(" ", "", $namaKategori));

                    // Query untuk mendapatkan subkategori berdasarkan kategori
                    $querySubkategori = "SELECT nama_sub_kategori FROM tb_kategori WHERE nama_kategori = '$namaKategori'";
                    $resultSubkategori = mysqli_query($conn, $querySubkategori);

                    echo '<button class="dropdown-btn" data="' . $dropdownContentId . '">' . $namaKategori . '</button>';
                    echo '<div class="dropdown-content" id="' . $dropdownContentId . '">';
                    echo '    <div class="subcategories">';
                    while ($rowSubkategori = mysqli_fetch_assoc($resultSubkategori)) {
                        $namaSubkategori = $rowSubkategori["nama_sub_kategori"];
                        echo '        <a href="#">' . $namaSubkategori . '</a>';
                    }
                    echo '    </div>';
                    echo '</div>';
                }
            }
        } else {
            echo "Tidak ada data kategori.";
        }

        // Memutus koneksi dari database
        db_disconnect($conn);
        ?>
        <!-- Start Search Bar -->
        <div class="search-bar">
        <form class="search-form" method="POST" action="#">
            <input type="text" name="query" placeholder="Cari barang">
        </form>
        <i class="bi bi-search"></i>
        </div>
        </div>
        <!-- End Search Bar -->
    </div>





    <br><br>

    <div class="product-container">
    <div class="view-options">
      <label for="view-options-select" class="view-options-label">Show</label>
      <select id="view-options-select" class="view-options-select">
        <option value="12">12</option>
        <option value="24">24</option>
        <option value="48">48</option>
        <option value="96">96</option>
      </select>
    </div>

    <?php
    require_once 'koneksi.php';
    $con = db_connect();

    // Mendapatkan jumlah produk yang akan ditampilkan
    $limit = isset($_GET['limit']) ? intval($_GET['limit']) : 12;

    // Query untuk mengambil data barang dari tabel tb_barang
    $query = "SELECT * FROM tb_barang LIMIT $limit";
    $result = mysqli_query($con, $query);

    // Menghitung jumlah card yang sudah ditampilkan
    $count = 0;

    echo '<div class="product-grid">';

    while ($row = mysqli_fetch_assoc($result)) {
      echo '<div class="product-card">';
      echo '<div class="product-image">';
      echo '<img src="' . $row['gambar'] . '" alt="' . $row['nama'] . '">';
      echo '</div>';
      echo '<div class="product-title">' . $row['nama'] . '</div>';
      echo '<a href="#" class="product-button">Tambahkan</a>';
      echo '</div>';

      $count++;

      // Membuat baris baru setelah 6 kolom terpenuhi
      if ($count % 6 === 0) {
        echo '</div>';
        echo '<div class="product-grid">';
      }
    }

    echo '</div>';

    // Menampilkan opsi "Next Page"
    echo '<div class="pagination">';
    echo '<div class="pagination-wrapper">';
    echo '<a href="#" class="pagination-link">1</a>';
    echo '<a href="#" class="pagination-link">2</a>';
    echo '<a href="#" class="pagination-link">3</a>';
    echo '<a href="#" class="pagination-link">4</a>';
    echo '<a href="#" class="pagination-link">5</a>';
    echo '<a href="#" class="pagination-link active">All</a>';
    echo '</div>';
    echo '</div>';

    // Menutup koneksi
    db_disconnect($con);
    ?>
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
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    $(document).ready(function () {
    $('#example').DataTable();
    });

        // Tampilkan dropdown content saat tombol dropdown di klik
        var dropdownButtons = document.querySelectorAll('.dropdown-btn');
        dropdownButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                var dropdownContentId = button.getAttribute('data');
                var dropdownContent = document.getElementById(dropdownContentId);
                dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
            });
        });

        // Sembunyikan dropdown content saat klik di luar dropdown
        window.addEventListener('click', function (event) {
            if (!event.target.matches('.dropdown-btn')) {
                var dropdowns = document.getElementsByClassName('dropdown-content');
                for (var i = 0; i < dropdowns.length; i++) {
                    var dropdown = dropdowns[i];
                    if (dropdown.style.display === 'block') {
                        dropdown.style.display = 'none';
                    }
                }
            }
        });

  </script>

</body>

</html>


