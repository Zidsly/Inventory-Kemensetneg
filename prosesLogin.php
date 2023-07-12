<?php
session_start();

require_once 'koneksi.php';

$koneksi = db_connect();

$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);

$query = "SELECT * FROM tb_user WHERE username = '$username'";
$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
    $data = mysqli_fetch_assoc($hasil);

    if ($data) {
        // Verifikasi password
        if ($password == $data['password']) {
            $_SESSION['username'] = $username;
            $_SESSION['masuk'] = true;
            $_SESSION['id_user'] = $data['id_user']; // untuk menyimpan id_user pada session
            $_SESSION['nama_lengkap'] = $data['nama_lengkap']; // untuk menyimpan id_user pada session

            // Cek tipe_akun pengguna
            $tipeAkun = $data['tipe_akun'];

            if ($tipeAkun == 'supervisor') {
                $_SESSION['role'] = 'supervisor';
                header("Location: index.php");
                exit();
            } elseif ($tipeAkun == 'admin') {
                $_SESSION['role'] = 'admin';
                header("Location: index.php");
                exit();
            } else {
                $_SESSION['role'] = 'user';
                header("Location: indexUser.php");
                exit();
            }
        }
    }
}

// Jika tidak berhasil login
header("Location: login.php?pesan=gagal");
exit();
?>
