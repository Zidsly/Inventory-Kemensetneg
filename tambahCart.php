<?php
session_start();
require_once 'koneksi.php';
$con = db_connect();

$username = $_POST['username'];
$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$jumlahMinta = $_POST['jumlah_minta'][$idBarang];

$sql = "SELECT * FROM tb_barang WHERE nama = '$nama'";
$query = mysqli_query($con, $sql);
$hasil = mysqli_fetch_object($query);

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}

$cartItem = array(
    "username" => $username,
    "id_user" => $id_user,
    "id_barang" => $hasil->id_barang, // Mengambil id_barang dari hasil query
    "nama" => $nama,
    "jumlah_minta" => $jumlahMinta
);

// Menambahkan item ke dalam array cart
$_SESSION["cart"][] = $cartItem;

header("Location: permintaanBarang.php");
