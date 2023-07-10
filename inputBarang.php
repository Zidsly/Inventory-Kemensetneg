<?php
require_once 'koneksi.php';
$con = db_connect();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kodeBarang = $_POST['kode_barang'];
    $namaSubKategori = $_POST['namaSubKategori'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    
    $tglMasuk = date('Y-m-d');

    // Mendapatkan id_kategori berdasarkan nama_sub_kategori
    $query = "SELECT id_kategori FROM tb_kategori WHERE nama_sub_kategori = '$namaSubKategori'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $idKategori = $row['id_kategori'];

        // Mendapatkan nama_kategori berdasarkan id_kategori
        $query = "SELECT nama_kategori FROM tb_kategori WHERE id_kategori = '$idKategori'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        $namaKategori = $row['nama_kategori'];

        // Upload gambar
        $gambar = null; // Inisialisasi variabel gambar
        if ($_FILES['gambar']['error'] == 0) {
            $gambarName = $_FILES['gambar']['name'];
            $gambarTmp = $_FILES['gambar']['tmp_name'];
            $gambarPath = 'assets/img/' . $gambarName;
            
            // Pindahkan file gambar ke direktori tujuan
            move_uploaded_file($gambarTmp, $gambarPath);
            
            $gambar = $gambarPath;
        } 

        // Simpan data barang ke dalam tabel tb_barang
        $query = "INSERT INTO tb_barang (kode_barang, id_kategori, nama_kategori, nama, deskripsi, gambar, tgl_masuk)
                  VALUES ('$kodeBarang', '$idKategori', '$namaKategori', '$nama', '$deskripsi', '$gambar', '$tglMasuk')";
        $result = mysqli_query($con, $query);

        if ($result) {
            header("Location: inputBarangBaru.php?pesan=Data barang berhasil ditambahkan");
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
?>
