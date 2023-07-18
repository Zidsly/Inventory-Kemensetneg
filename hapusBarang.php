<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'koneksi.php';
    $koneksi = db_connect();

    $idBarang = mysqli_real_escape_string($koneksi, $_POST['idBarang']);

    // Hapus data barang berdasarkan id_barang
    $query = "DELETE FROM tb_barang WHERE id_barang = '$idBarang'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Redirect ke halaman indexUser.php atau halaman lain yang sesuai
        header("Location: indexUser.php");
        exit();
    } else {
        // Penanganan kesalahan saat menghapus data barang
        echo "Terjadi kesalahan saat menghapus barang.";
    }

    db_disconnect($koneksi);
}
?>
