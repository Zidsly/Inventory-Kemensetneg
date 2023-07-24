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
$namaLengkap = $_SESSION['nama_lengkap'];
?>

<br>

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
  .notification-scroll {
  max-height: 300px; /* Ubah sesuai kebutuhan */
  overflow-y: auto;
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

</style>




<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo2.png" alt="">
        <span class="htsimpan">SMART<br>
          <tb class="tbsmart">Sistem Manajemen dan Pelayanan Permintaan Barang Persediaan Terpadu</tb></span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">

      <ul class="d-flex align-items-center">


      <?php
      require_once 'koneksi.php';
      require_once 'notif_functions.php';

      // Create a database connection
      $con = db_connect();

      // Mengambil notifikasi dari fungsi-fungsi
      $barangHampirHabis = getBarangHampirHabis($con);
      $barangStokMinimal = getBarangStokMinimal($con);

      // Menghitung jumlah notifikasi
      $totalNotifikasi = count($barangHampirHabis) + count($barangStokMinimal);
      ?>

      <li class="nav-item dropdown">
        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-bell"></i>
          <span class="badge bg-primary badge-number"><?php echo $totalNotifikasi; ?></span>
        </a><!-- End Notification Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
          <li class="dropdown-header">
            Notifikasi Terbaru
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Lihat Semua</span></a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <?php
          $counter = 1;
          foreach ($barangHampirHabis as $notif) {
              echo '<li class="notification-item">';
              echo '<i class="bi bi-exclamation-circle text-warning"></i>';
              echo '<div>';
              echo '<h4>Peringatan</h4>';
              echo "<p>$notif</p>";
              echo '</div>';
              echo '</li>';
              echo '<li><hr class="dropdown-divider"></li>';
              $counter++;
          }

          foreach ($barangStokMinimal as $notif) {
              echo '<li class="notification-item">';
              echo '<i class="bi bi-x-circle text-danger"></i>';
              echo '<div>';
              echo '<h4>Stok sudah mencapai batas minimal</h4>';
              echo "<p>$notif</p>";
              echo '</div>';
              echo '</li>';
              echo '<li><hr class="dropdown-divider"></li>';
              $counter++;
          }
          ?>


          <li>
            <hr class="dropdown-divider">
          </li>
          <li class="dropdown-footer">
            <a href="#">Lihat semua notifikasi</a>
          </li>
        </ul><!-- End Notification Dropdown Items -->
      </li><!-- End Notification Nav -->


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $namaLengkap; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile notification-scroll">
            <li class="dropdown-header">
              <h6> <?php echo $username; ?></h6>
              <span><?php echo $idUser; ?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="profil.php">
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
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Keluar</span>
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
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Kelola Permintaan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="kelolaPermintaan.php">
              <i class="bi bi-circle"></i><span>Cek Permintaan</span>
            </a>
          </li>
          <li>
          <li>
            <a href="kelolaPermintaan3.php">
              <i class="bi bi-circle"></i><span>Permintaan Selesai</span>
            </a>
          </li>
          <li>
            <a href="kelolaPermintaan2.php">
              <i class="bi bi-circle"></i><span>Cek Stok Barang</span>
            </a>
          </li>
        </ul>
      </li>

  <!-- End Kelola Permintaan Data Sidebar -->

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
    </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

            <!-- Riwayat Pengambilan Hari Ini -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="?tgl_minta=hari_ini">Hari ini</a></li>
                    <li><a class="dropdown-item" href="?tgl_minta=bulan_ini">Bulan ini</a></li>
                    <li><a class="dropdown-item" href="?tgl_minta=tahun_ini">Tahun ini</a></li>
                  </ul>
                </div>
                <div class="card-body pb-0">
                  <h5 class="card-title">Data Permintaan <span>| Hari ini</span></h5>
                  <table id="example2" class="table table-striped" style="width:100%">
                    <thead>
                      <tr>
                        <th>Id Transaksi</th>
                        <th>Pemesan</th>
                        <th>Tanggal</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      // Koneksi ke database
                      require_once 'koneksi.php';
                      $con = db_connect();

                      // Mengambil nilai parameter tgl_minta dari URL
                      $tglMinta = isset($_GET['tgl_minta']) ? $_GET['tgl_minta'] : 'hari_ini';

                      // Mengecek jika tgl_minta tidak ada atau bernilai 'hari_ini', maka default ke hari ini
                      if (!$tglMinta || $tglMinta == 'hari_ini') {
                        $tglMinta = 'hari_ini';
                        $tglFilter = "DATE(tb_order.tgl_minta) = CURDATE()";
                      } else if ($tglMinta == 'bulan_ini') {
                        $tglFilter = "MONTH(tb_order.tgl_minta) = MONTH(CURDATE())";
                      } else if ($tglMinta == 'tahun_ini') {
                        $tglFilter = "YEAR(tb_order.tgl_minta) = YEAR(CURDATE())";
                      }

                      // Query untuk mendapatkan data dari tabel
                      $query = "SELECT tb_order.id_transaksi, tb_user.nama_lengkap, GROUP_CONCAT(tb_barang.nama SEPARATOR '<br>') AS nama, tb_order.tgl_minta, GROUP_CONCAT(tb_order_detail.jumlah_minta SEPARATOR '<br>') AS jumlah_minta, tb_order.status
                                FROM tb_order
                                JOIN tb_user ON tb_order.id_user = tb_user.id_user
                                JOIN tb_order_detail ON tb_order.id_transaksi = tb_order_detail.id_transaksi
                                JOIN tb_barang ON tb_order_detail.id_barang = tb_barang.id_barang
                                WHERE tb_order.status IN ( 'menunggu' ,'Siap Diambil', 'Selesai') AND $tglFilter
                                GROUP BY tb_order.id_transaksi
                                ORDER BY tb_order.id_transaksi DESC";

                      $result = mysqli_query($con, $query);

                      // Iterasi dan tampilkan data dalam tabel
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id_transaksi'] . "</td>";
                        echo "<td>" . $row['nama_lengkap'] . "</td>";
                        echo "<td>" . $row['tgl_minta'] . "</td>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td>" . $row['jumlah_minta'] . "</td>";
                        echo "<td>";
                        if ($row['status'] == 'Siap Diambil') {
                          echo "<span class='badge bg-success p-2 ms-2' style='border-radius: 5; width: 90px; color: white;'>" . $row['status'] . "</span>";
                        } else if ($row['status'] == 'Menunggu') {
                          echo "<span class='badge bg-warning p-2 ms-2' style='border-radius: 5; width: 90px; color: white;'>" . $row['status'] . "</span>";
                        } else if ($row['status'] == 'Selesai') {
                          echo "<span class='badge bg-info p-2 ms-2' style='border-radius: 5; width: 90px; color: white;'>" . $row['status'] . "</span>";
                        }
                        echo "</td>";
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
            <!-- End Riwayat Pengambilan -->


      </div>
    </section>

  </main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
      <strong>  SMART - </strong> <span>Sistem Manajemen dan Pelayanan Permintaan Barang Persediaan Terpadu</span>
    </div>
    <div class="credits">
      Made by <a>Tim Efektif</a>
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
    // Fungsi untuk melakukan refresh halaman setiap 1 menit
    function autoRefresh() {
      window.location.reload();
    }

    // Mengatur interval untuk melakukan refresh setiap 1 menit (60000 milidetik)
    setInterval(autoRefresh, 60000);

    $(document).ready(function () {
    $('#example').DataTable();
    });
  </script>

</body>

</html>


