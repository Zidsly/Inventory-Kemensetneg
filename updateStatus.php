<?php
// Koneksi ke database
require_once 'koneksi.php';
$con = db_connect();

// Periksa apakah id_transaksi telah dikirim melalui permintaan POST
if (isset($_POST['id_transaksi'])) {
  $idTransaksi = $_POST['id_transaksi'];

  // Mendapatkan tanggal saat ini
  $tglSiap = date('Y-m-d');

  // Query untuk mengubah status dan tgl_siap menjadi 'Ready' pada tb_order berdasarkan id_transaksi
  $query = "UPDATE tb_order SET status = 'Siap Diambil', tgl_siap = '$tglSiap' WHERE id_transaksi = '$idTransaksi'";
  $result = mysqli_query($con, $query);

  if ($result) {
    // Status berhasil diubah
    header("Location: kelolaPermintaan.php"); // Redirect ke halaman kelolaPermintaan.php
    exit();
  } else {
    // Gagal mengubah status
    echo "error";
  }
}

// Tutup koneksi ke database
db_disconnect($con);
?>
