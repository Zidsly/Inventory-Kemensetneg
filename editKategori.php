<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'koneksi.php';
    $koneksi = db_connect();

    $editKategori = mysqli_real_escape_string($koneksi, $_POST['editKategori']);
    $editSubkategori = mysqli_real_escape_string($koneksi, $_POST['editSubkategori']);
    $originalKodeKategori = mysqli_real_escape_string($koneksi, $_POST['originalKodeKategori']);
    $originalKodeSubkategori = mysqli_real_escape_string($koneksi, $_POST['originalKodeSubkategori']);

    // Update data kategori berdasarkan kode kategori dan kode subkategori
    $query = "UPDATE tb_kategori SET nama_kategori = '$editKategori', nama_sub_kategori = '$editSubkategori' WHERE kode_kategori = '$originalKodeKategori' AND kode_sub_kategori = '$originalKodeSubkategori'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Redirect ke halaman yang sesuai
        header("Location: kelolaKategori.php");
        exit();
    } else {
        // Penanganan kesalahan saat update data kategori
        echo "Terjadi kesalahan saat menyimpan perubahan.";
    }

    db_disconnect($koneksi);
}
?>
