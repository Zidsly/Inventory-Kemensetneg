<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'koneksi.php';
    $koneksi = db_connect();

    $idKategori = mysqli_real_escape_string($koneksi, $_POST['idKategori']);
    $editKategori = mysqli_real_escape_string($koneksi, $_POST['editKategori']);
    $editSubkategori = mysqli_real_escape_string($koneksi, $_POST['editSubkategori']);

    // Update data kategori berdasarkan id_kategori
    $query = "UPDATE tb_kategori SET nama_kategori = '$editKategori', nama_sub_kategori = '$editSubkategori' WHERE id_kategori = '$idKategori'";
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
