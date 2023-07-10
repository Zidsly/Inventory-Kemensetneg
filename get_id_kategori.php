<?php
require_once 'koneksi.php';
$con = db_connect();

$namaKategori = mysqli_real_escape_string($con, $_POST['namaKategori']);
$namaSubKategori = mysqli_real_escape_string($con, $_POST['namaSubKategori']);

$query = "SELECT id_kategori FROM tb_kategori WHERE nama_kategori = '$namaKategori' AND nama_sub_kategori = '$namaSubKategori'";
$result = mysqli_query($con, $query);

$response = array();
if ($result && mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $response["success"] = true;
  $response["idKategori"] = $row['id_kategori'];
} else {
  $response["success"] = false;
}

echo json_encode($response);

db_disconnect($con);
?>
