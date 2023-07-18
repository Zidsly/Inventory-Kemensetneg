<?php
require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Mendapatkan nilai input dari form
  $id_user = $_POST['idUser'];
  $id_barang = $_POST['namaBarang'];
  $tgl_pembelian = $_POST['inputDate'];
  $jumlah_input = $_POST['inputNumber'];

  // Melakukan koneksi ke database
  $con = db_connect();

  // Memeriksa keberadaan id_barang dalam tabel tb_barang
  $queryCheckBarang = "SELECT id_barang FROM tb_barang WHERE id_barang = '$id_barang'";
  $resultCheckBarang = mysqli_query($con, $queryCheckBarang);

  if (mysqli_num_rows($resultCheckBarang) > 0) {
    // id_barang valid, melanjutkan proses INSERT
    // Memasukkan data ke tabel tb_input_stok
    $queryInsert = "INSERT INTO tb_input_stok (id_user, id_barang, tgl_pembelian, jumlah_input) VALUES ('$id_user', '$id_barang', '$tgl_pembelian', '$jumlah_input')";
    $resultInsert = mysqli_query($con, $queryInsert);

    if ($resultInsert) {
      header("Location: inputStok.php?sukses=Data Saved Successfully!");
    } else {
      echo "Terjadi kesalahan saat menambahkan data: " . mysqli_error($con);
    }
  } else {
    echo "id_barang tidak valid.";
  }

  // Menutup koneksi database
  db_disconnect($con);
}
?>
