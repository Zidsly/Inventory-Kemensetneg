<?php
require_once 'koneksi.php';
$con = db_connect();

// Mendapatkan nilai "nama_sub_kategori" dari permintaan POST
$nama_sub_kategori = mysqli_real_escape_string($con, $_POST["nama_sub_kategori"]);

// Menghapus sub kategori berdasarkan nama_sub_kategori
$sql = "DELETE FROM tb_kategori WHERE nama_sub_kategori = '$nama_sub_kategori'";
$result = mysqli_query($con, $sql);

$response = array();
if ($result) {
  $response["success"] = true;
} else {
  $response["success"] = false;
}

echo json_encode($response);

db_disconnect($con);
?>
