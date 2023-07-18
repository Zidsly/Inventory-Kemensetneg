<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'koneksi.php';
    $koneksi = db_connect();

    $editNama = mysqli_real_escape_string($koneksi, $_POST['editNama']);
    $editKodeBarang = mysqli_real_escape_string($koneksi, $_POST['editKodeBarang']);
    $editDeskripsi = mysqli_real_escape_string($koneksi, $_POST['editDeskripsi']);
    $editStokMinimal = mysqli_real_escape_string($koneksi, $_POST['editStokMinimal']);
    $originalNama = mysqli_real_escape_string($koneksi, $_POST['originalNama']);
    $originalKodeBarang = mysqli_real_escape_string($koneksi, $_POST['originalKodeBarang']);
    $idBarang = mysqli_real_escape_string($koneksi, $_POST['idBarang']);

    // Update data barang berdasarkan kode barang
    $query = "UPDATE tb_barang SET nama = '$editNama', kode_barang = '$editKodeBarang', deskripsi = '$editDeskripsi', stok_minimal = '$editStokMinimal' WHERE id_barang = '$idBarang'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Redirect ke halaman indexUser.php atau halaman lain yang sesuai
        header("Location: inputBarangBaru.php");
        exit();
    } else {
        // Penanganan kesalahan saat update data barang
        echo "Terjadi kesalahan saat menyimpan perubahan.";
    }

    db_disconnect($koneksi);
}
?>
