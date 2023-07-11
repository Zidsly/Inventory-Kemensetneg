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

  <title>STATUS PERMINTAAN - SMART</title>
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
</style>




<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="indexUser.php" class="logo d-flex align-items-center">
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
              <h6><?php echo $username; ?></h6>
              <span><?php echo $idUser; ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profilUser.php">
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
  <a class="nav-link " href="indexUser.php">
    <i class="bi bi-grid"></i>
    <span>Beranda</span>
  </a>
</li><!-- End Dashboard Nav -->

<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span></span>Kelola Permintaan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="permintaanBarang.php">
              <i class="bi"></i><span>Buat Permintaan</span>
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
    <i class="bi bi-bar-chart"></i>
    <span>Laporan</span>
  </a>
</li><!-- End Tables Nav -->

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

      <!-- Card Data permintaan -->
      <section class="section">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Permintaan</h5>

                <!--Tabel Data Kategori-->
                <table id="example" class="table table-striped" style="width:100%">
                  <thead>
                    <tr>
                      <th>Id Transaksi</th>
                      <th>Pemesan</th>
                      <th>Tanggal</th>
                      <th>Nama Barang</th>
                      <th>Jumlah</th>
                      <th>Status</th>
                      <th>Ready</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    // Koneksi ke database
                    require_once 'koneksi.php';
                    $con = db_connect();

                    $query = "SELECT tb_order.id_transaksi, tb_user.nama_lengkap, GROUP_CONCAT(tb_barang.nama SEPARATOR '<br>') AS nama, tb_order.tgl_minta, GROUP_CONCAT(tb_order_detail.jumlah_minta SEPARATOR '<br>') AS jumlah_minta, tb_order.status
                    FROM tb_order
                    JOIN tb_user ON tb_order.id_user = tb_user.id_user
                    JOIN tb_order_detail ON tb_order.id_transaksi = tb_order_detail.id_transaksi
                    JOIN tb_barang ON tb_order_detail.id_barang = tb_barang.id_barang
                    WHERE tb_user.username = '$username'
                    GROUP BY tb_order.id_transaksi";

                    $result = mysqli_query($con, $query);

                    // Iterasi dan tampilkan data dalam tabel
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";
                      echo "<td>" . $row['id_transaksi'] . "</td>";
                      echo "<td>" . $row['nama_lengkap'] . "</td>";
                      echo "<td>" . $row['tgl_minta'] . "</td>";
                      echo "<td>" . $row['nama'] . "</td>";
                      echo "<td>" . $row['jumlah_minta'] . "</td>";
                      echo "<td>" . $row['status'] . "</td>";
                      echo "<td>";
                      echo "<button type='button' class='btn btn-warning btn-ready' data-id='" . $row['id_transaksi'] . "'><i class='bi bi-check-circle'></i></button>";
                      echo "</td>";
                      echo "</tr>";
                    }
                    // Tutup koneksi ke database
                    db_disconnect($con);
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>

  </main>
  
  <!-- End #main -->

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
    $('#example2').DataTable();
    $('#example3').DataTable();
    });

    document.addEventListener('DOMContentLoaded', function() {
    var readyButtons = document.querySelectorAll('.btn-ready');
    var selesaiButtons = document.querySelectorAll('.btn-selesai');

    readyButtons.forEach(function(button) {
      button.addEventListener('click', function() {
        var idTransaksi = this.getAttribute('data-id');

        // Kirim permintaan AJAX untuk mengubah status menjadi 'Selesai'
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'updateStatus.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
          if (xhr.status === 200) {
            // Status berhasil diubah, lakukan tindakan lain jika diperlukan
            alert('Status berhasil diubah menjadi Ready');
            location.reload(); // Melakukan refresh halaman
            // Refresh halaman atau lakukan tindakan lainnya
          } else {
            // Gagal mengubah status, tampilkan pesan error atau lakukan tindakan lain jika diperlukan
            alert('Terjadi kesalahan saat mengubah status');
          }
        };
        xhr.send('id_transaksi=' + encodeURIComponent(idTransaksi));
      });
    });

    selesaiButtons.forEach(function(button) {
      button.addEventListener('click', function() {
        var idTransaksi = this.getAttribute('data-id');

        // Kirim permintaan AJAX untuk mengubah status menjadi 'Selesai'
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'updateStatus2.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
          if (xhr.status === 200) {
            // Status berhasil diubah, lakukan tindakan lain jika diperlukan
            alert('Status berhasil diubah menjadi Selesai');
            location.reload(); // Melakukan refresh halaman
            // Refresh halaman atau lakukan tindakan lainnya
          } else {
            // Gagal mengubah status, tampilkan pesan error atau lakukan tindakan lain jika diperlukan
            alert('Terjadi kesalahan saat mengubah status');
          }
        };
        xhr.send('id_transaksi=' + encodeURIComponent(idTransaksi));
      });
    });

  });

  

  </script>

</body>

</html>

