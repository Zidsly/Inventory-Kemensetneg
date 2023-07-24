<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login - SMART</title>
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

  <!-- Template Main CSS File -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
</head>

<style>
  .main-container {
    height: 100vh;
    display: flex;
    flex-direction: row;
    justify-content: center;
  }

  .left-container {
    display: flex;
    width: 40%;
    align-items: center;
    justify-content: center;
    background-image:
      linear-gradient(to bottom right, rgba(200, 38, 65, 0.52), rgba(0, 0, 0, 0.73)),
      url("assets/img/login.png");
    background-size: cover;
  }

  .text-container {
    position: fixed;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin: 64px;
  }

  .text-container h5 {
    color: #fff;
    font-weight: 400;
  }

  .text-container h2 {
    color: #fff;
    font-weight: 600;
  }

  .right-container {
    display: flex;
    background-color: #892641;
    width: 60%;
    padding: 1rem;
    align-items: center;
    justify-content: center;
  }

  .card-title {
    font-weight: 800;
    padding: 0;
  }

  .card-header {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    height: 128px;
    background-color: #fff;
  }

  .logo {
    width: 68px;
  }

  .card {
    display: flex;
    border-radius: 36px;
    align-items: center;
    justify-content: center;
    padding: 16px 0;
  }

  .card-body {
    width: 95%;
  }

  .card-bottom {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
  }
</style>

<body>
  <main>
    <div class="main-container">
      <div class="left-container">
        <div class="text-container">
          <h5>Selamat Datang di Website SMART</h5>
          <h2>Sistem Manajemen dan Pelayanan Permintaan Barang Persediaan Terpadu</h2>
        </div>
      </div>

      <div class="right-container">
        <div class="card mb-3">
          <div class="card-body">
            <div class="pb-2 card-header">
              <img class="logo" src="assets/img/logo2.png" alt="">
              <h5 class="card-title text-center pb-0 fs-4">Login</h5>
            </div>

            <?php
            if (isset($_GET['pesan'])) {
              if ($_GET['pesan'] == "belum_login") {
                echo "<p style='color: #f00'>Anda harus login untuk mengakses halaman admin</p>";
              }
              if ($_GET['pesan'] == "gagal") {
                echo "<p style='color: #f00'>Login gagal! username dan password salah!</p>";
              }
            }
            ?>


            <form class="row g-3 needs-validation" action="prosesLogin.php" method="post" novalidate>
              <div class="col-12">
                <input type="text" name="username" class="form-control" placeholder="Username" id="yourUsername" required>
                <div class="invalid-feedback">Please enter your username.</div>
              </div>

              <div class="col-12">
                <input type="password" name="password" class="form-control" placeholder="Password" id="yourPassword" required>
                <div class="invalid-feedback">Please enter your password!</div>
              </div>

              <div class="col-12 card-bottom">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                  <label class="form-check-label" for="rememberMe">Ingat akun</label>
                </div>
                <button class="btn btn-primary" type="submit">Login</button>
              </div>
            </form>
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
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>