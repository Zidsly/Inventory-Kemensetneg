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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  

  <!-- Template Main CSS File -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
  .product-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
  }

  .product-card {
    text-align: center;
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

  .header {
    background-color: #892641;
  }
  
  .tbsmart{
    font-size: 12px;
    margin-bottom: 0;
    font-weight: 600;
    color: #ffffff;
  }
  
  .pengumuman {
    font-size: 40px;
    font-weight: 700;
    color: #fff;
    font-family: "Nunito", sans-serif;
    text-align: center;
    margin: 0;
    padding: 0;
  }
  
  .c-item {
    height: 240px;
    margin-bottom: 20px;
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

  /*** Category ***/
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

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">
    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
      <i class="bi bi-basket3"></i>
      <span class="badge bg-primary badge-number">4</span>
    </a><!-- End Cart Icon -->
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
      <form>
        <ul class="product-list">
          <li>
            <span class="product-number">1</span>
            <img src="assets/img/spidol.jpg" alt="Product 1">
            <div class="product-info">
              <h6>Spidol</h6>
              <div class="col-sm-4">
              <input type="number" class="form-control" id="spidolCount" name="spidolCount" value="2">
              </div>
              <button class="delete-button" onclick="deleteProduct('spidol')">Delete</button>
            </div>
          </li>
          <li>
            <span class="product-number">2</span>
            <img src="assets/img/hvs.png" alt="Product 2">
            <div class="product-info">
              <h6>Kertas HVS</h6>
              <div class="col-sm-4">
              <input type="number" class="form-control" id="hvsCount" name="hvsCount" value="5">
              </div>
              <button class="delete-button" onclick="deleteProduct('hvs')">Delete</button>
            </div>
          </li>
          <li>
            <span class="product-number">3</span>
            <img src="assets/img/b100.png" alt="Product 3">
            <div class="product-info">
              <h6>Mouse Logitech B100</h6>
              <div class="col-sm-4">
              <input type="number" class="form-control" id="mouseCount" name="mouseCount" value="3">
              </div>
              <button class="delete-button" onclick="deleteProduct('mouse')">Delete</button>
            </div>
          </li>
        </ul>
        <button type="button" class="btn btn-success" onclick="submitForm()">Pesan</button>
      </form>
    </ul><!-- End Cart Dropdown Items -->
  </li>
        

        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number"></span>
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
            <span class="d-none d-md-block dropdown-toggle ps-2">User</span>
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
  <style>
    .sidebar {
      background-color: #892641;
      top: 10%;
    }
  </style>

  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Beranda</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span></span>Permintaan Barang</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="buatPermintaan.html">
              <i class="bi"></i><span>Buat Permintaan</span>
            </a>
          </li>
          <li>
            <a href="statusPermintaan.html">
              <i class="bi"></i><span>Status Permintaan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="laporan.html">
          <i class="bi bi-bar-chart"></i>
          <span>Laporan</span>
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="profil.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Beranda</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Beranda</li>
        </ol>


        <!--Image dahsboard-->

        <div id="hero-carousel" class="carousel" data-bs-ride="carousel">
          <div class="carousel-inner opacity-75 c-item">
            <img src="assets/img/gudang6.jpg" class="d-block w-100 c-img" alt="Slide 3">
            <div class="carousel-caption">
              <p class="pengumuman">Harap Mengambil Barang yang Sudah Dipesan</p>
            </div>
          </div>
        </div>

        <!--End Image Dashboard-->

        <style>
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

    </nav>
    </div><!-- End Page Title -->

    <style>
      .dropdown {
        display: inline-block;
        display: flex;
        justify-content: space-around;
        align-items: center;
        height: 40px;
      }
      
      .dropdown-btn {
        display: inline-block;
        height: 40px;
        font-size: 14px;
        font-weight: 600;
        background-color: #892641;
        border: 1px solid #892641;
        color: #fff;
        transition: 0.2s;
        cursor: pointer;
        outline: none;
        padding: 8px 16px;
        border-radius: 24px;
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
        max-height: 200px; /* Atur ketinggian maksimum jika perlu */
        overflow-y: auto; /* Aktifkan pengguliran jika perlu */
      }
      
      .subcategories a {
        display: block;
        padding: 5px;
        text-decoration: none;
        color: #333;
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

      .search-bar {
        position: relative;
      }

      .search-bar input {
        height: 40px;
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

      .search-bar:hover input{
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

      .search-bar i{
          position: absolute;
          top: 50%;
          right: 5px;
          transform: translate(-50%,-50%);
          font-size: 20px;
          color: #fff;
          transition: .2s;
      }

      .search-bar:hover i{
          color: #892641;
          z-index: 3;
      }
      </style>
    

      <body>
        <div class="dropdown">
          <button class="dropdown-btn" data="cat1">Bahan Konsumsi</button>
            <div class="dropdown-content" id="cat1">
              <div class="subcategories">
                <a href="productcard1.html">Alat Tulis</a>                     
                <a href="#">Subkategori 1.2</a>
                <a href="#">Subkategori 1.3</a>
                <a href="#">Subkategori 1.4</a>
                <a href="#">Subkategori 1.5</a>
                <a href="#">Subkategori 1.6</a>
                <a href="#">Subkategori 1.7</a>
                <a href="#">Subkategori 1.8</a>
                <a href="#">Subkategori 1.9</a>
                <a href="#">Subkategori 1.10</a>
                <a href="#">Subkategori 1.11</a>
                <a href="#">Subkategori 1.12</a>
                <a href="#">Subkategori 1.13</a>
                <a href="#">Subkategori 1.14</a>
                <a href="#">Subkategori 1.15</a>
                <a href="#">Subkategori 1.16</a>
                <a href="#">Subkategori 1.17</a>
                <a href="#">Subkategori 1.18</a>
                <a href="#">Subkategori 1.19</a>
                <a href="#">Subkategori 1.20</a>
                <a href="#">Subkategori 1.21</a>
                <a href="#">Subkategori 1.22</a>
                <a href="#">Subkategori 1.23</a>
                <a href="#">Subkategori 1.24</a>
                <a href="#">Subkategori 1.25</a>
                <a href="#">Subkategori 1.26</a>
                <a href="#">Subkategori 1.27</a>
                <a href="#">Subkategori 1.28</a>
                <a href="#">Subkategori 1.29</a>
                <a href="#">Subkategori 1.30</a>
                <a href="#">Subkategori 1.31</a>
                <a href="#">Subkategori 1.32</a>
              </div>
            </div>
          <button class="dropdown-btn" data="cat2">Bahan Pemeliharaan</button>
            <div class="dropdown-content" id="cat2">
              <div class="subcategories">
                <a href="productcard1.html">Alat Tulis</a>                     
                <a href="#">Subkategori 2.2</a>
                <a href="#">Subkategori 2.3</a>
                <a href="#">Subkategori 2.4</a>
                <a href="#">Subkategori 2.5</a>
                <a href="#">Subkategori 2.6</a>
                <a href="#">Subkategori 2.7</a>
                <a href="#">Subkategori 2.8</a>
                <a href="#">Subkategori 2.9</a>
                <a href="#">Subkategori 2.10</a>
                <a href="#">Subkategori 2.11</a>
                <a href="#">Subkategori 2.12</a>
                <a href="#">Subkategori 2.13</a>
                <a href="#">Subkategori 2.14</a>
                <a href="#">Subkategori 2.15</a>
                <a href="#">Subkategori 2.16</a>
                <a href="#">Subkategori 2.17</a>
                <a href="#">Subkategori 2.18</a>
                <a href="#">Subkategori 2.19</a>
                <a href="#">Subkategori 2.20</a>
                <a href="#">Subkategori 2.21</a>
                <a href="#">Subkategori 2.22</a>
                <a href="#">Subkategori 2.23</a>
                <a href="#">Subkategori 2.24</a>
                <a href="#">Subkategori 2.25</a>
                <a href="#">Subkategori 2.26</a>
                <a href="#">Subkategori 2.27</a>
                <a href="#">Subkategori 2.28</a>
                <a href="#">Subkategori 2.29</a>
                <a href="#">Subkategori 2.30</a>
                <a href="#">Subkategori 2.31</a>
                <a href="#">Subkategori 2.32</a>
              </div>
            </div>
          <button class="dropdown-btn" data="cat3">Suku Cadang</button>
            <div class="dropdown-content" id="cat3">
              <div class="subcategories">
                <a href="productcard1.html">Alat Tulis</a>                     
                <a href="#">Subkategori 3.2</a>
                <a href="#">Subkategori 3.3</a>
                <a href="#">Subkategori 3.4</a>
                <a href="#">Subkategori 3.5</a>
                <a href="#">Subkategori 3.6</a>
                <a href="#">Subkategori 3.7</a>
                <a href="#">Subkategori 3.8</a>
                <a href="#">Subkategori 3.9</a>
                <a href="#">Subkategori 3.10</a>
                <a href="#">Subkategori 3.11</a>
                <a href="#">Subkategori 3.12</a>
                <a href="#">Subkategori 3.13</a>
                <a href="#">Subkategori 3.14</a>
                <a href="#">Subkategori 3.15</a>
                <a href="#">Subkategori 3.16</a>
                <a href="#">Subkategori 3.17</a>
                <a href="#">Subkategori 3.18</a>
                <a href="#">Subkategori 3.19</a>
                <a href="#">Subkategori 3.20</a>
                <a href="#">Subkategori 3.21</a>
                <a href="#">Subkategori 3.22</a>
                <a href="#">Subkategori 3.23</a>
                <a href="#">Subkategori 3.24</a>
                <a href="#">Subkategori 3.25</a>
                <a href="#">Subkategori 3.26</a>
                <a href="#">Subkategori 3.27</a>
                <a href="#">Subkategori 3.28</a>
                <a href="#">Subkategori 3.29</a>
                <a href="#">Subkategori 3.30</a>
                <a href="#">Subkategori 3.31</a>
                <a href="#">Subkategori 3.32</a>
              </div>
            </div>
          <button class="dropdown-btn" data="cat4">Bahan Baku</button>
            <div class="dropdown-content" id="cat4">
              <div class="subcategories">
                <a href="productcard1.html">Alat Tulis</a>                     
                <a href="#">Subkategori 4.2</a>
                <a href="#">Subkategori 4.3</a>
                <a href="#">Subkategori 4.4</a>
                <a href="#">Subkategori 4.5</a>
                <a href="#">Subkategori 4.6</a>
                <a href="#">Subkategori 4.7</a>
                <a href="#">Subkategori 4.8</a>
                <a href="#">Subkategori 4.9</a>
                <a href="#">Subkategori 4.10</a>
                <a href="#">Subkategori 4.11</a>
                <a href="#">Subkategori 4.12</a>
                <a href="#">Subkategori 4.13</a>
                <a href="#">Subkategori 4.14</a>
                <a href="#">Subkategori 4.15</a>
                <a href="#">Subkategori 4.16</a>
                <a href="#">Subkategori 4.17</a>
                <a href="#">Subkategori 4.18</a>
                <a href="#">Subkategori 4.19</a>
                <a href="#">Subkategori 4.20</a>
                <a href="#">Subkategori 4.21</a>
                <a href="#">Subkategori 4.22</a>
                <a href="#">Subkategori 4.23</a>
                <a href="#">Subkategori 4.24</a>
                <a href="#">Subkategori 4.25</a>
                <a href="#">Subkategori 4.26</a>
                <a href="#">Subkategori 4.27</a>
                <a href="#">Subkategori 4.28</a>
                <a href="#">Subkategori 4.29</a>
                <a href="#">Subkategori 4.30</a>
                <a href="#">Subkategori 4.31</a>
                <a href="#">Subkategori 4.32</a>
              </div>
            </div>
          <button class="dropdown-btn" data="cat5">Persediaan Penjagaan</button>
            <div class="dropdown-content" id="cat5">
              <div class="subcategories">
                <a href="productcard1.html">Alat Tulis</a>                     
                <a href="#">Subkategori 5.2</a>
                <a href="#">Subkategori 5.3</a>
                <a href="#">Subkategori 5.4</a>
                <a href="#">Subkategori 5.5</a>
                <a href="#">Subkategori 5.6</a>
                <a href="#">Subkategori 5.7</a>
                <a href="#">Subkategori 5.8</a>
                <a href="#">Subkategori 5.9</a>
                <a href="#">Subkategori 5.10</a>
                <a href="#">Subkategori 5.11</a>
                <a href="#">Subkategori 5.12</a>
                <a href="#">Subkategori 5.13</a>
                <a href="#">Subkategori 5.14</a>
                <a href="#">Subkategori 5.15</a>
                <a href="#">Subkategori 5.16</a>
                <a href="#">Subkategori 5.17</a>
                <a href="#">Subkategori 5.18</a>
                <a href="#">Subkategori 5.19</a>
                <a href="#">Subkategori 5.20</a>
                <a href="#">Subkategori 5.21</a>
                <a href="#">Subkategori 5.22</a>
                <a href="#">Subkategori 5.23</a>
                <a href="#">Subkategori 5.24</a>
                <a href="#">Subkategori 5.25</a>
                <a href="#">Subkategori 5.26</a>
                <a href="#">Subkategori 5.27</a>
                <a href="#">Subkategori 5.28</a>
                <a href="#">Subkategori 5.29</a>
                <a href="#">Subkategori 5.30</a>
                <a href="#">Subkategori 5.31</a>
                <a href="#">Subkategori 5.32</a>
              </div>
            </div>
          <button class="dropdown-btn" data="cat6">Persediaan Lainnya</button>
            <div class="dropdown-content" id="cat6">
              <div class="subcategories">
                <a href="productcard1.html">Alat Tulis</a>                     
                <a href="#">Subkategori 6.2</a>
                <a href="#">Subkategori 6.3</a>
                <a href="#">Subkategori 6.4</a>
                <a href="#">Subkategori 6.5</a>
                <a href="#">Subkategori 6.6</a>
                <a href="#">Subkategori 6.7</a>
                <a href="#">Subkategori 6.8</a>
                <a href="#">Subkategori 6.9</a>
                <a href="#">Subkategori 6.10</a>
                <a href="#">Subkategori 6.11</a>
                <a href="#">Subkategori 6.12</a>
                <a href="#">Subkategori 6.13</a>
                <a href="#">Subkategori 6.14</a>
                <a href="#">Subkategori 6.15</a>
                <a href="#">Subkategori 6.16</a>
                <a href="#">Subkategori 6.17</a>
                <a href="#">Subkategori 6.18</a>
                <a href="#">Subkategori 6.19</a>
                <a href="#">Subkategori 6.20</a>
                <a href="#">Subkategori 6.21</a>
                <a href="#">Subkategori 6.22</a>
                <a href="#">Subkategori 6.23</a>
                <a href="#">Subkategori 6.24</a>
                <a href="#">Subkategori 6.25</a>
                <a href="#">Subkategori 6.26</a>
                <a href="#">Subkategori 6.27</a>
                <a href="#">Subkategori 6.28</a>
                <a href="#">Subkategori 6.29</a>
                <a href="#">Subkategori 6.30</a>
                <a href="#">Subkategori 6.31</a>
                <a href="#">Subkategori 6.32</a>
              </div>
            </div>

            <!-- Start Search Bar -->
            <div class="search-bar">
              <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Cari barang">
              </form>
              <i class="bi bi-search"></i>
            </div>
            <!-- End Search Bar -->
        </div>
      
        <div class="product-grid">
          <!-- Kartu Produk 1-5 -->
          <div class="product-card">
            <div class="product-image">
              <img src="assets\img\gambar1.jpg" alt="Ballpoint Balliner Merah">
            </div>
            <div class="product-title">Ballpoint Balliner Merah</div>
            <a href="#" class="product-button">Tambahkan</a>
          </div>
          <div class="product-card">
            <div class="product-image">
              <img src="assets\img\gambar2.jpg" alt="Buku Agenda Bintang Obor">
            </div>
            <div class="product-title">Buku Agenda Bintang Obor</div>
            <a href="#" class="product-button">Tambahkan</a>
          </div>
        
          <div class="product-card">
            <div class="product-image">
              <img src="assets\img\gambar3.jpg" alt="Product 3">
            </div>
            <div class="product-title">Stabillo Boss</div>
            <a href="#" class="product-button">Tambahkan</a>
          </div>
        
          <div class="product-card">
            <div class="product-image">
              <img src="assets\img\gambar4.jpg" alt="Product 4">
            </div>
            <div class="product-title">Gunting Kenko</div>
            <a href="#" class="product-button">Tambahkan</a>
          </div>
        
          <div class="product-card">
            <div class="product-image">
              <img src="assets\img\gambar5.jpg" alt="Product 5">
            </div>
            <div class="product-title">Flashdisk 8GB</div>
            <a href="#" class="product-button">Tambahkan</a>
          </div>
        </div>
        </div>
        
      </body>
        
        <script>
          /* var button = document.querySelectorAll('.dropdown-btn');
          var dropdownContent = document.querySelectorAll('.dropdown-content');
        
          dropdownBtn.addEventListener('click', function () {
            dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
          });
        
          window.addEventListener('click', function (event) {
            if (!event.target.matches('.dropdown-btn')) {
              dropdownContent.style.display = 'none';
            }
          }); */

          const dropdownBtn = document.querySelectorAll('.dropdown-btn');

          dropdownBtn.forEach(button => {
            button.addEventListener('click', () => {
              document.querySelectorAll('.dropdown-content').forEach(function(el) {
                el.style.display = 'none';
              });

              const targetId = button.getAttribute('data');
              const targetDiv = document.getElementById(targetId);

              targetDiv.style.display = 'block';
            });
          });

          window.addEventListener('click', function (event) {
            if (!event.target.matches('.dropdown-btn')) {
              document.querySelectorAll('.dropdown-content').forEach(function(el) {
                el.style.display = 'none';
              });
            }
          });
        </script>

  

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      <strong>SMART</strong> <span>Sistem Informasi Manajemen Pengelolaan</span>
    </div>
    <div class="credits">
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<script>
  function deleteProduct(productName) {
    var productElement = document.querySelector(`[data-product="${productName}"]`);
    if (productElement) {
      productElement.remove();
    }
  }

  function submitForm() {
    var productList = document.querySelectorAll(".product-list li");
    var formData = [];
    productList.forEach(function (product) {
      var productNumber = product.querySelector(".product-number").textContent;
      var productName = product.querySelector("h4").textContent;
      var productStatus = product.querySelector("input.form-control");
      var count = parseInt(productStatus.value);
      formData.push({
        number: productNumber,
        name: productName,
        status: count
      });
    });
    console.log(formData);
    // Lakukan pengiriman data form sesuai kebutuhan, misalnya menggunakan AJAX atau mengirimkan form biasa
  }
</script>

</body>

</html>


