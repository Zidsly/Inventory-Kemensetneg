<?php
require_once 'koneksi.php';
$con = db_connect();

$namaKategori = mysqli_real_escape_string($con, $_POST['namaKategori']);

$query = "SELECT * FROM tb_kategori WHERE nama_kategori = '$namaKategori'";
$result = mysqli_query($con, $query);

$response = array();
if ($result && mysqli_num_rows($result) > 0) {
  $response["success"] = true;
  $response["data"] = array();

  while ($row = mysqli_fetch_assoc($result)) {
    $data = array(
      "nama_sub_kategori" => $row['nama_sub_kategori']
    );
    array_push($response["data"], $data);
  }
} else {
  $response["success"] = false;
}

echo json_encode($response);

db_disconnect($con);
?>
