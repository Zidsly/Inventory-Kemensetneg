<?php
require_once 'koneksi.php';
$con = db_connect();

$namaKategori = mysqli_real_escape_string($con, $_POST["nama_kategori"]);
$kodeKategori = mysqli_real_escape_string($con, $_POST["kode_kategori"]);
$subKategori= mysqli_real_escape_string($con, $_POST["nama_sub_kategori"]);
$kodeSubKategori = mysqli_real_escape_string($con, $_POST["kode_sub_kategori"]);


// Melakukan validasi terhadap data
if (empty($namaKategori)) {
    header("Location: kelolaKategori.php?error=Nama Kategori tidak boleh kosong!");
    die();
}
if (empty($kodeKategori)) {
    header("Location: kelolaKategori.php?error=Kode Kategori tidak boleh kosong!");
    die();
}
if (empty($subKategori)) {
    header("Location: kelolaKategori.php?error=Sub Kategori tidak boleh kosong!");
    die();
}
if (empty($kodeSubKategori)) {
    header("Location: kelolaKategori.php?error=Kode Sub Kategori tidak boleh kosong!");
    die();
}


// Mendapatkan ID pengguna baru
$result = mysqli_query($con, "SELECT MAX(id_kategori) AS max_id FROM tb_kategori");
$row = mysqli_fetch_assoc($result);
$last_id = $row['max_id'];

// Mengatur ID pengguna baru
if ($last_id >= 100) {
    $kategori_id = $last_id + 1;
} else {
    $kategori_id = 5000;
}

// Membuat dan menjalankan query
$sql = "INSERT INTO tb_kategori (id_kategori, nama_kategori, kode_kategori, nama_sub_kategori, kode_sub_kategori) VALUES ('$kategori_id', '$namaKategori', '$kodeKategori', '$subKategori', '$kodeSubKategori')";
mysqli_query($con, $sql);
// Menutup koneksi
db_disconnect($con);
header("Location: kelolaKategori.php?sukses=Data Saved Successfully!");
?>
