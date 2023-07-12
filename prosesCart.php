<?php
session_start();
require_once 'koneksi.php';
$con = db_connect();

// Periksa apakah tombol Pesan ditekan
if (isset($_POST['pesan'])) {
    // Mendapatkan id_user dari session
    $id_user = $_SESSION['id_user'];

    // Mendapatkan tanggal saat ini
    $tglMinta = date('Y-m-d');

    // Memasukkan data ke dalam tabel tb_order
    $queryOrder = "INSERT INTO tb_order (id_user, tgl_minta) VALUES ('$id_user', '$tglMinta')";
    $resultOrder = mysqli_query($con, $queryOrder);

    if ($resultOrder) {
        $idOrder = mysqli_insert_id($con);

        // Memproses setiap item dalam cart
        if (!empty($_POST['jumlah_minta'])) {
            $jumlahMinta = $_POST['jumlah_minta'];

            foreach ($jumlahMinta as $idBarang => $inputJumlahMinta) {
                // Memasukkan data ke dalam tabel tb_order_detail
                $queryOrderDetail = "INSERT INTO tb_order_detail (id_transaksi, id_barang, jumlah_minta) VALUES ('$idOrder', '$idBarang', '$inputJumlahMinta')";
                $resultOrderDetail = mysqli_query($con, $queryOrderDetail);

                if (!$resultOrderDetail) {
                    echo "Terjadi kesalahan saat memasukkan data order detail: " . mysqli_error($con);
                    exit;
                }
            }
        }

        // Mengosongkan cart setelah proses selesai
        unset($_SESSION['cart']);

        // Menutup koneksi database
        db_disconnect($con);

        // Redirect ke halaman sukses atau halaman lain yang diinginkan
        header("Location: permintaanBarang.php");
        exit;
    } else {
        echo "Terjadi kesalahan saat memasukkan data order: " . mysqli_error($con);
        exit;
    }
} else {
    // Jika tombol Pesan tidak ditekan, redirect ke halaman lain yang diinginkan
    header("Location: hapusCart.php");
    exit;
}
