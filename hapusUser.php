<?php
require_once 'koneksi.php';
$con = db_connect();

// Mendapatkan username dari permintaan POST
$username = mysqli_real_escape_string($con, $_POST["username"]);

// Menghapus pengguna berdasarkan username
$sql = "DELETE FROM tb_user WHERE username = '$username'";
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