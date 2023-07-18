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
$namaLengkap = $_SESSION['nama_lengkap'];
$tipe_akun = $_SESSION['tipe_akun'];

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
    font-size: 24px;
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
  height: 110px;
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
.container-2 {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.dropdown-container {
    display: flex;
    width: auto;
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
    justify-content: space-evenly;
    align-items: center;
    height: 48px;
    margin-top: 12px;
  }

  .search-bar form {
    margin: 0;
    height: 100%;
    width: 90%;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
  }

  .search-bar input {
    height: 100%;
    width: 85%;
    background: #fff;
    border: 1px solid #892641;
    border-radius: 36px;
    box-sizing: border-box;
    font-size: 16px;
    color: #892641;
    padding-left: 16px;
  }

  .search-bar input::placeholder {
    opacity: 100;
    color: #892641;
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
  .dropdown-menu {
    min-width: 400px;
    max-width: 400px;
  }

  .product-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .product-list li {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    margin-left: 15px;
  }

  .product-list li img {
    width: 90px;
    height: 90px;
    object-fit: cover;
    border-radius: 7px;
    margin-right: 18px;
  }

  .product-info h4 {
    margin: 0;
    font-size: 18px;
  }

  .product-info p {
    margin: 0;
    font-size: 14px;
    color: #888;
  }

  .product-number {
    font-size: 20px;
    margin-right: 18px;
    color: #892641;
    position: relative;
    top: -10px;
  }

  .delete-button {
    padding: 4px 8px;
    font-size: 12px;
    border: none;
    background-color: #ff0000;
    color: #ffffff;
    cursor: pointer;
    margin-top: 10px;
    margin-right: 5px;
  }

  button.btn-success {
    display: block;
    margin: 0 auto;
    margin-top: 30px;
    margin-bottom: 10px;
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

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $username; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $username; ?></h6>
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

      <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
          <a class="nav-link" href="indexUser.php">
            <i class="bi bi-grid"></i>
            <span>Buat Permintaan</span>
          </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-clipboard-check"></i><span>Kelola Permintaan</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="permintaanBarang.php">
                <i class="bi"></i><span>Keranjang Permintaan</span>
              </a>
            </li>
            <li>
              <a href="statusPermintaan.php">
                <i class="bi"></i><span>Status Permintaan</span>
              </a>
            </li>
          </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="laporan.php">
            <i class="bi bi-journal-text"></i><span>Laporan</span>
          </a>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="profilUser.php">
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

        <div class="search-bar">
    <form id="search-form" class="search-form d-flex align-items-center">
      <input type="text" id="search-input" placeholder="Cari barang disini...">
      <button type="submit" class="btn btn-primary rounded-pill px-4 me-3" style="height: 100%;">Cari</button>
    </form>
  </div>


    </nav>
    <br>
    </div><!-- End Page Title -->


    <div class="container-2">

        <div class="dropdown">
        <?php
        require 'koneksi.php';
        $conn = db_connect();

        $sql = "SELECT nama_kategori FROM tb_kategori";
        $result = mysqli_query($conn, $sql);

        $kategoriArray = array();

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
            $namaKategori = $row["nama_kategori"];
            if (!in_array($namaKategori, $kategoriArray)) {
                $kategoriArray[] = $namaKategori;
                $dropdownContentId = strtolower(str_replace(" ", "", $namaKategori));

                $querySubkategori = "SELECT nama_sub_kategori FROM tb_kategori WHERE nama_kategori = '$namaKategori'";
                $resultSubkategori = mysqli_query($conn, $querySubkategori);

                echo '<button class="dropdown-btn" data="' . $dropdownContentId . '">' . $namaKategori . '</button>';
                echo '<div class="dropdown-content" id="' . $dropdownContentId . '">';
                echo '    <div class="subcategories">';
                while ($rowSubkategori = mysqli_fetch_assoc($resultSubkategori)) {
                $namaSubkategori = $rowSubkategori["nama_sub_kategori"];
                echo '        <a href="indexUser.php?nama_sub_kategori=' . urlencode($namaSubkategori) . '" class="subkategori-link">' . $namaSubkategori . '</a>';
                }
                echo '    </div>';
                echo '</div>';
            }
            }
        } else {
            echo "Tidak ada data kategori.";
        }

        db_disconnect($conn);
        ?>
        </div>

<br>

        <div class="product-container" >
        <div class="view-options">
            <label for="view-options-select" class="view-options-label">Show</label>
            <select id="view-options-select" class="view-options-select" onchange="changeLimit(this.value)">
            <option value="12">12</option>
            <option value="24">24</option>
            <option value="48">48</option>
            <option value="96">96</option>
            </select>
        </div>

        <?php
        require_once 'koneksi.php';
        $con = db_connect();

        $limit = isset($_GET['limit']) ? intval($_GET['limit']) : 18;
        $namaSubkategori = isset($_GET['nama_sub_kategori']) ? $_GET['nama_sub_kategori'] : '';
        $idKategori = isset($_GET['id_kategori']) ? $_GET['id_kategori'] : '';

        if ($namaSubkategori !== '') {
            $query = "SELECT tb_barang.* FROM tb_barang
                JOIN tb_kategori ON tb_barang.nama_sub_kategori = tb_kategori.nama_sub_kategori
                WHERE tb_kategori.nama_sub_kategori = '$namaSubkategori'
                LIMIT $limit";
        } else {
            $query = "SELECT * FROM tb_barang LIMIT $limit";
        }

        $result = mysqli_query($con, $query);

        $count = 0;

        echo '<div id="product-grid" class="product-grid">';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="product-card">';
            echo '<div class="product-image">';
            echo '<img src="' . $row['gambar'] . '" alt="' . $row['nama'] . '">';
            echo '</div>';
            echo '<div class="product-title">' . $row['nama'] . '</div>';
            echo '<form action="tambahCart.php" method="POST">';
            echo '<input type="hidden" name="username" value="' . $_SESSION['username'] . '">';
            echo '<input type="hidden" name="id_user" value="' . $_SESSION['id_user'] . '">';
            echo '<input type="hidden" name="id_barang" value="' . $row['id_barang'] . '">';
            echo '<input type="hidden" name="nama" value="' . $row['nama'] . '">';
            echo '<button type="submit" class="product-button">Tambahkan</button>';
            echo '</form>';
            echo '</div>';

            $count++;

            if ($count % 6 === 0) {
            echo '</div>';
            echo '<div class="product-grid">';
            }
        }

        echo '</div>';
        echo '<br><br><br><br><br>';
        // Menampilkan opsi "Next Page"
        echo '<div class="pagination">';
        echo '<div class="pagination-wrapper">';
        echo '<a href="?limit=12" class="pagination-link">1</a>';
        echo '<a href="?limit=24" class="pagination-link">2</a>';
        echo '<a href="?limit=48" class="pagination-link">3</a>';
        echo '<a href="?limit=72" class="pagination-link">4</a>';
        echo '<a href="?limit=96" class="pagination-link">5</a>';
        echo '<a href="?limit=all" class="pagination-link active">All</a>';
        echo '</div>';
        echo '</div>';

        db_disconnect($con);
        ?>
        </div>

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
      
    $(document).ready(function() {
    $('#search-form').on('submit', function(e) {
      e.preventDefault();
      var keyword = $('#search-input').val();

      $.ajax({
        type: 'GET',
        url: 'search_products.php',
        data: { keyword: keyword },
        success: function(response) {
          $('#product-grid').html(response);
        }
      });
    });
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

        function changeLimit(limit) {
    window.location.href = "?limit=" + limit;
  }


  </script>

</body>

</html>


