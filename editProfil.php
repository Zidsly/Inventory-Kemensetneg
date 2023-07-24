<?php
require_once 'koneksi.php';
$con = db_connect();
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_SESSION['username'];
    $nama = mysqli_real_escape_string($con, $_POST["nama"]);
    $nip = mysqli_real_escape_string($con, $_POST["nip"]);

    $time = date('Y-m-d');

    // Mendapatkan id_kategori berdasarkan nama_sub_kategori
    $query = "SELECT id_user FROM tb_user WHERE username = '$username'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Upload gambar
        $gambar = null; // Inisialisasi variabel gambar
        if ($_FILES['gambar']['error'] == 0) {
            $gambarName = $_FILES['gambar']['name'];
            $gambarTmp = $_FILES['gambar']['tmp_name'];
            $gambarPath = 'assets/img/fotoprofil/' . $username . $time . $gambarName;

            // Pindahkan file gambar ke direktori tujuan
            move_uploaded_file($gambarTmp, $gambarPath);

            $gambar = $gambarPath;
        }

        // Simpan data barang ke dalam tabel tb_barang
        $query = "UPDATE tb_user
                  SET nama_lengkap = '$nama', nip = '$nip', foto_user = '$gambar'
                  WHERE username = '$username'";
        $result = mysqli_query($con, $query);

        if ($result) {
            header("Location: profilUser.php?pesan=Data barang berhasil ditambahkan");
            exit();
        } else {
            echo "Terjadi kesalahan saat menambahkan data barang: " . mysqli_error($con);
        }
    } else {
        echo "Data sub kategori tidak ditemukan.";
    }
} else {
    echo "Metode permintaan tidak valid.";
}

// Menutup koneksi
db_disconnect($con);
