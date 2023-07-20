<?php
require_once 'koneksi.php';
$conn = db_connect();
session_start();

// Cek apakah formulir disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mendapatkan nilai input dari formulir
    $id_user = $_SESSION['id_user'];
    $currentPassword = $_POST['password'];
    $newPassword = $_POST['newpassword'];
    $confirmPassword = $_POST['renewpassword'];
  
    // Validasi input
    if ($newPassword !== $confirmPassword) {
        echo "Password baru tidak cocok dengan konfirmasi password.";
        exit;
    }

    // Mengecek password lama pengguna
    $query = "SELECT password FROM tb_user WHERE id_user = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id_user);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $hashedPassword = $row['password'];

            // Debugging output
            echo "Input Current Password: '$currentPassword'<br>";
            echo "Hashed Password (from Database): '$hashedPassword'<br>";

            // Memeriksa kecocokan password lama
            if (password_verify($currentPassword, $hashedPassword)) {
                // Mengubah password baru
                $hashedNewPassword = password_hash($newPassword, PASSWORD_DEFAULT);

                // Memperbarui password di database
                $updateQuery = "UPDATE tb_user SET password = ? WHERE id_user = ?";
                $updateStmt = mysqli_prepare($conn, $updateQuery);

                if ($updateStmt) {
                    mysqli_stmt_bind_param($updateStmt, "si", $hashedNewPassword, $id_user);
                    $updateResult = mysqli_stmt_execute($updateStmt);

                    if ($updateResult) {
                        echo "Password berhasil diubah.";
                    } else {
                        echo "Terjadi kesalahan saat mengubah password.";
                    }
                } else {
                    echo "Terjadi kesalahan saat memperbarui password.";
                }
            } else {
                echo "Password lama tidak valid.";
            }
        } else {
            echo "Password lama tidak ditemukan.";
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Terjadi kesalahan saat memeriksa password lama.";
    }
}

// Menutup koneksi
db_disconnect($conn);
?>
