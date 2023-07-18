<?php
// Fungsi untuk mendapatkan notifikasi barang hampir habis
function getBarangHampirHabis($con) {
    $query = "SELECT tb_barang.nama, tb_barang.stok_minimal, tb_cek_stok.jumlah_stok_akhir 
              FROM tb_barang
              INNER JOIN tb_cek_stok ON tb_barang.id_barang = tb_cek_stok.id_barang";
    $result = mysqli_query($con, $query);

    $notifications = array();

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $nama = $row['nama'];
            $stok_minimal = $row['stok_minimal'];
            $jumlah_stok_akhir = $row['jumlah_stok_akhir'];

            if ($jumlah_stok_akhir >= ($stok_minimal + 1) && $jumlah_stok_akhir <= ($stok_minimal + 3)) {
                $notifications[] = "Stok barang $nama hampir habis";
            }
        }
    }

    return $notifications;
}

// Fungsi untuk mendapatkan notifikasi barang stok minimal
function getBarangStokMinimal($con) {
    $query = "SELECT tb_barang.nama, tb_barang.stok_minimal, tb_cek_stok.jumlah_stok_akhir
              FROM tb_barang
              INNER JOIN tb_cek_stok ON tb_barang.id_barang = tb_cek_stok.id_barang";
    $result = mysqli_query($con, $query);

    $notifications = array();

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $nama = $row['nama'];
            $stok_minimal = $row['stok_minimal'];
            $jumlah_stok_akhir = $row['jumlah_stok_akhir'];

            if ($jumlah_stok_akhir <= $stok_minimal) {
                $notifications[] = "Stok Barang $nama sudah mencapai jumlah stok minimal";
            }
        }
    }

    return $notifications;
}
?>
