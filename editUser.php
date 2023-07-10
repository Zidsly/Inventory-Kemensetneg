<?php
require_once 'koneksi.php';
$con = db_connect();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['editUsername'];
    $nama = $_POST['editNamaLengkap'];
    $email = $_POST['editEmail'];
    $nip = $_POST['editNIP'];
    $password = $_POST['editPassword'];
    $tipeAkun = $_POST['editTipeAkun'];

    // Update data pengguna di database
    $query = "UPDATE tb_user SET username = '$username', nama_lengkap = '$nama', email = '$email', nip = '$nip', password = '$password', tipe_akun = '$tipeAkun' WHERE username = '$username'";
    $result = mysqli_query($con, $query);

    if ($result) {
        header("Location: kelolaUser.php?pesan=Data pengguna berhasil diperbarui");
        exit(); // Pastikan untuk keluar dari skrip setelah mengarahkan pengguna ke halaman lain
    } else {
        echo "Terjadi kesalahan saat memperbarui data pengguna: " . mysqli_error($con);
    }
} else {
    echo "Metode permintaan tidak valid.";
}

// Menutup koneksi
db_disconnect($con);
?>

