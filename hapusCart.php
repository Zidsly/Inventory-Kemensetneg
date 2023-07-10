<?php
session_start();

if (isset($_POST["hapus_cart"])) {
  // Menyimpan isi array "cart" di variabel sementara
  $isiCart = $_SESSION["cart"];

  // Mengosongkan isi cart dengan menghapus semua elemen dalam array
  $_SESSION["cart"] = array();

  // Redirect ke halaman permintaanBarang.php setelah mengosongkan cart
  header("Location: permintaanBarang.php");
  exit();
}
?>
