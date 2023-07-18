<?php
require_once 'koneksi.php';
$con = db_connect();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kodeBarang = $_POST['kode_barang'];
    $namaSubKategori = $_POST['namaSubKategori'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $tglMasuk = date('Y-m-d');
    $stok_minimal = isset($_POST['stok_minimal']) ? $_POST['stok_minimal'] : null;
    $idKategori = null;

    // Mendapatkan id_kategori berdasarkan nama_sub_kategori
    $queryIdKategori = "SELECT id_kategori FROM tb_kategori WHERE nama_sub_kategori = '$namaSubKategori'";
    $resultIdKategori = mysqli_query($con, $queryIdKategori);

    if ($resultIdKategori) {
        if (mysqli_num_rows($resultIdKategori) > 0) {
            $rowIdKategori = mysqli_fetch_assoc($resultIdKategori);
            $idKategori = $rowIdKategori['id_kategori'];

            // Mendapatkan nama_sub_kategori berdasarkan nama_sub_kategori dan id_kategori
            $queryNamaSubKategori = "SELECT nama_sub_kategori FROM tb_kategori WHERE nama_sub_kategori = '$namaSubKategori' AND id_kategori = '$idKategori'";
            $resultNamaSubKategori = mysqli_query($con, $queryNamaSubKategori);

            if ($resultNamaSubKategori) {
                if (mysqli_num_rows($resultNamaSubKategori) > 0) {
                    $rowNamaSubKategori = mysqli_fetch_assoc($resultNamaSubKategori);
                    $namaSubKategori = $rowNamaSubKategori['nama_sub_kategori'];
                } else {
                    echo "Nama sub kategori tidak ditemukan.";
                    exit();
                }
            } else {
                echo "Terjadi kesalahan saat mendapatkan nama sub kategori: " . mysqli_error($con);
                exit();
            }
        } else {
            echo "Kategori tidak ditemukan.";
            exit();
        }
    } else {
        echo "Terjadi kesalahan saat mendapatkan id kategori: " . mysqli_error($con);
        exit();
    }


    // Upload gambar
    $gambar = null; // Inisialisasi variabel gambar
    if ($_FILES['gambar']['error'] == 0) {
        $gambarName = $_FILES['gambar']['name'];
        $gambarTmp = $_FILES['gambar']['tmp_name'];
        $gambarPath = 'assets/img/' . $gambarName;

        // Pindahkan file gambar ke direktori tujuan
        move_uploaded_file($gambarTmp, $gambarPath);

        $gambar = $gambarPath;
    }

    // Simpan data barang ke dalam tabel tb_barang
    $query = "INSERT INTO tb_barang (kode_barang, id_kategori, nama_sub_kategori, nama, deskripsi, gambar, tgl_masuk, stok_minimal)
              VALUES ('$kodeBarang', '$idKategori', '$namaSubKategori', '$nama', '$deskripsi', '$gambar', '$tglMasuk', '$stok_minimal')";
    $result = mysqli_query($con, $query);

    if ($result) {
        header("Location: inputBarangBaru.php?pesan=Data barang berhasil ditambahkan");
        exit();
    } else {
        echo "Terjadi kesalahan saat menambahkan data barang: " . mysqli_error($con);
    }

} else {
    echo "Metode permintaan tidak valid.";
}

// Menutup koneksi
db_disconnect($con);
?>
