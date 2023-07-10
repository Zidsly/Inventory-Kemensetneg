<?php
require_once 'koneksi.php';
$con = db_connect();

$username = mysqli_real_escape_string($con, $_POST["username"]);
$nama = mysqli_real_escape_string($con, $_POST["nama_lengkap"]);
$email = mysqli_real_escape_string($con, $_POST["email"]);
$nip = mysqli_real_escape_string($con, $_POST["nip"]);
$password = mysqli_real_escape_string($con, $_POST["password"]);
$tipeAkun = mysqli_real_escape_string($con, $_POST["tipe_akun"]);

// Melakukan validasi terhadap data
if (empty($username)) {
    header("Location: kelolaUser.php?error=username tidak boleh kosong!");
    die();
}
if (empty($nama)) {
    header("Location: kelolaUser.php?error=nama tidak boleh kosong!");
    die();
}
if (empty($email)) {
    header("Location: kelolaUser.php?error=email tidak boleh kosong!");
    die();
}
if (empty($nip)) {
    header("Location: kelolaUser.php?error=nip tidak boleh kosong!");
    die();
}
if (empty($password)) {
    header("Location: kelolaUser.php?error=password tidak boleh kosong!");
    die();
}
if (empty($tipeAkun)) {
    header("Location: kelolaUser.php?error=tipeAkun tidak boleh kosong!");
    die();
}

// Mendapatkan ID pengguna baru
$result = mysqli_query($con, "SELECT MAX(id_user) AS max_id FROM tb_user");
$row = mysqli_fetch_assoc($result);
$last_id = $row['max_id'];

// Mengatur ID pengguna baru
if ($last_id >= 100) {
    $user_id = $last_id + 1;
} else {
    $user_id = 100;
}

// Membuat dan menjalankan query
$sql = "INSERT INTO tb_user (id_user, username, nama_lengkap, email, nip, password, tipe_akun) VALUES ('$user_id', '$username', '$nama', '$email', '$nip', '$password', '$tipeAkun')";
mysqli_query($con, $sql);
// Menutup koneksi
db_disconnect($con);
header("Location: buatAkun.php?sukses=Data Saved Successfully!");
?>
