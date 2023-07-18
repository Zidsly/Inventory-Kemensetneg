<?php
session_start();
require_once 'koneksi.php';
$con = db_connect();

$username = $_POST['username'];
$idUser = $_POST['id_user'];
$nama = $_POST['nama'];
$jumlahMinta = $_POST['jumlah_minta'][$idBarang];

// Retrieve the id_barang from tb_barang based on the nama
$sql_barang = "SELECT id_barang, stok_minimal FROM tb_barang WHERE nama = '$nama'";
$query_barang = mysqli_query($con, $sql_barang);
$hasil_barang = mysqli_fetch_object($query_barang);

$idBarang = $hasil_barang->id_barang;

// Retrieve the jumlah_stok_akhir from tb_cek_stok based on the id_barang
$sql_cek_stok = "SELECT jumlah_stok_akhir FROM tb_cek_stok WHERE id_barang = '$idBarang'";
$query_cek_stok = mysqli_query($con, $sql_cek_stok);
$hasil_cek_stok = mysqli_fetch_object($query_cek_stok);

// Check if jumlah_stok_akhir is greater than stok_minimal
if ($hasil_cek_stok->jumlah_stok_akhir > $hasil_barang->stok_minimal) {
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = array();
    }

    $cartItem = array(
        "username" => $username,
        "id_user" => $idUser,
        "id_barang" => $idBarang,
        "nama" => $nama,
        "jumlah_minta" => $jumlahMinta
    );

    // Menambahkan item ke dalam array cart
    $_SESSION["cart"][] = $cartItem;

    header("Location: permintaanBarang.php");
    exit();
} else {
    echo 'Stok sudah mencapai jumlah minimal';
    header("Location: indexUser.php");
    exit();
}
?>
