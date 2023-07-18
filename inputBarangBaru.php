<?php
session_start();

// Periksa apakah pengguna masuk atau memiliki peran yang sesuai
if (!isset($_SESSION['masuk']) || ($_SESSION['masuk'] !== true) || ($_SESSION['role'] !== 'supervisor')) {
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

  <title>INPUT BARANG BARU - SMART</title>
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
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 70vh;
}
.content {
  text-align: center;
}
.editFormPopup-container {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 9999;
}

.editFormPopup-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    width: 600px;
}

.close {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
}

</style>



<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
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

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $username; ?></h6>
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
      <h1>Input Barang Baru</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Kelola Data</a></li>
          <li class="breadcrumb-item active">Input Barang Baru</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->


    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Input Jenis Barang Baru</h5>
              <!-- Input Data Barang -->

              <form id="inputBarangForm" action="InputBarang.php" method="POST" enctype="multipart/form-data">
                <div class="row mb-3">
                    <label for="kodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="number" id="kodeBarang" name="kode_barang" required>
                    </div>
                </div>



                <div class="row mb-3">
                    <label for="namaSubKategori" class="col-sm-2 col-form-label">Nama Sub Kategori</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="namaSubKategori" name="namaSubKategori" onchange="setKategori()">
                            <option value="">Pilih Sub Kategori</option>
                            <?php
                            require_once 'koneksi.php';
                            $con = db_connect();

                            $query = "SELECT id_kategori, nama_kategori, nama_sub_kategori FROM tb_kategori";
                            $result = mysqli_query($con, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row['nama_sub_kategori'] . "' data-id-kategori='" . $row['id_kategori'] . "' data-nama-kategori='" . $row['nama_kategori'] . "'>" . $row['nama_sub_kategori'] . "</option>";
                            }

                            db_disconnect($con);
                            ?>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Barang </label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="nama" id="nama" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" style="height: 100px" name="deskripsi" id="deskripsi"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="gambar" class="col-sm-2 col-form-label">File Upload</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" name="gambar" id="gambar" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Jumlah Stok Minimal</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="stok_minimal" name="stok_minimal" min="0">
                    </div>
                </div>

                <input type="hidden" id="idKategori" name="idKategori">

                <div class="row mb-3">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Input</button>
                    </div>
                </div>
            </form>


              <!-- End Input Barang -->

            </div>
          </div>
        </div>
      </div>
    </section>


    <form action="editBarang.php" method="post">

<!--Pop up untuk edit Data Barang-->
<div class="editFormPopup-container">
    <div class="editFormPopup-content">
        <span class="close" onclick="closeEditFormPopup()">&times;</span>
        <h4>Edit Kategori</h4>
        <div class="form-group">
            <label for="editNama">Nama</label>
            <input type="text" class="form-control" id="editNama" name="editNama" placeholder="Masukkan nama">
            <input type="hidden" id="originalNama" name="originalNama">
        </div>
        <br>
        <div class="form-group">
            <label for="editKodeBarang">Kode Barang</label>
            <input type="text" class="form-control" id="editKodeBarang" name="editKodeBarang" placeholder="Masukkan kode barang">
            <input type="hidden" id="originalKodeBarang" name="originalKodeBarang">
        </div>
        <br>
        <div class="form-group">
            <label for="editDeskripsi">Deskripsi</label>
            <input type="text" class="form-control" id="editDeskripsi" name="editDeskripsi" placeholder="Masukkan Deskripsi">
            <input type="hidden" id="originalDeskripsi" name="originalDeskripsi">
        </div>
        <br>
        <div class="form-group">
            <label for="editStokMinimal">Stok Minimal</label>
            <input type="text" class="form-control" id="editStokMinimal" name="editStokMinimal" placeholder="Masukkan Stok Minimal">
            <input type="hidden" id="originalStokMinimal" name="originalStokMinimal">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</div>

</form>

<!-- Tabel Data Barang -->
<section class="section">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tabel Data Barang</h5>

                <!--Tabel Data Kategori-->
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kode</th>
                            <th>Deskripsi</th>
                            <th>Stok Minimal</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once 'koneksi.php';
                        $con = db_connect();

                        // Mendapatkan data pengguna dari database
                        $query = "SELECT id_barang, nama, kode_barang, deskripsi, stok_minimal FROM tb_barang";
                        $result = mysqli_query($con, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                            $idBarang = $row['id_barang'];
                            $nama = $row['nama'];
                            $kodeBarang = $row['kode_barang'];
                            $deskripsi = $row['deskripsi'];
                            $stokMinimal = $row['stok_minimal'];

                            echo "<tr>";
                            echo "<td>$nama</td>";
                            echo "<td>$kodeBarang</td>";
                            echo "<td>$deskripsi</td>";
                            echo "<td>$stokMinimal</td>";
                            echo "<td><button type='button' class='btn btn-primary' onclick='editFormPopup(\"$nama\", \"$kodeBarang\", \"$deskripsi\", \"$stokMinimal\")'>Edit</button></td>";
                            echo "<td><button type='button' class='btn btn-danger' onclick='hapusBarang(\"$idBarang\")'>Hapus</button></td>";
                            echo "</tr>";
                        }

                        db_disconnect($con);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script>
    $(document).ready(function () {
    $('#example').DataTable();
    });

                // Menggunakan JavaScript untuk menampilkan nilai yang dipilih saat opsi berubah
                document.getElementById("namaKategori").addEventListener("change", function() {
                var selectedValue = this.value;
                console.log("Nilai Nama Kategori yang Dipilih:", selectedValue);
            });

    function getKategori() {
      var dropdown = document.getElementById("namaSubKategori");
      var selectedOption = dropdown.options[dropdown.selectedIndex];
      var idKategori = selectedOption.value;
      var namaKategori = selectedOption.getAttribute("data-nama-kategori");

      document.getElementById("idKategori").value = idKategori;
      document.getElementById("namaKategori").value = namaKategori;
    }

    function editFormPopup(nama, kodeBarang, deskripsi, stokMinimal) {
            document.getElementById("editNama").value = nama;
            document.getElementById("editKodeBarang").value = kodeBarang;
            document.getElementById("editDeskripsi").value = deskripsi;
            document.getElementById("editStokMinimal").value = stokMinimal;

            document.getElementById("originalNama").value = nama;
            document.getElementById("originalKodeBarang").value = kodeBarang;
            document.getElementById("originalDeskripsi").value = deskripsi;
            document.getElementById("originalStokMinimal").value = stokMinimal;

            var popup = document.querySelector('.editFormPopup-container');
            popup.style.display = 'block';
        }

    function closeEditFormPopup() {
        var popup = document.querySelector('.editFormPopup-container');
        popup.style.display = 'none';
    }

    function hapusBarang(idBarang) {
        if (confirm("Apakah Anda yakin ingin menghapus barang ini?")) {
            // Kirim permintaan hapus ke deleteBarang.php
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'deleteBarang.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Redirect ke halaman indexUser.php atau halaman lain yang sesuai
                    window.location.href = 'indexUser.php';
                } else {
                    // Penanganan kesalahan saat menghapus barang
                    alert('Terjadi kesalahan saat menghapus barang.');
                }
            };
            xhr.send('idBarang=' + idBarang);
        }
    }

  </script>




</body>

</html>


