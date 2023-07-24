<?php
require_once 'koneksi.php';
$conn = db_connect();
session_start();

// Initialize the $message variable
$message = '';

// Cek apakah formulir disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mendapatkan nilai input dari formulir
    $id_user = $_SESSION['id_user'];
    $currentPassword = $_POST['password'];
    $newPassword = $_POST['newpassword'];
    $confirmPassword = $_POST['renewpassword'];

    // Validasi input
    if ($newPassword !== $confirmPassword) {
        $message = "Password baru tidak cocok dengan konfirmasi password.";
    } else {
        // Mengecek password lama pengguna
        $query = "SELECT password FROM tb_user WHERE id_user = ?";
        $stmt = mysqli_prepare($conn, $query);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "i", $id_user);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $dbPassword = $row['password'];

                // Memeriksa kecocokan password lama
                if ($currentPassword === $dbPassword) {
                    // Memperbarui password di database
                    $updateQuery = "UPDATE tb_user SET password = ? WHERE id_user = ?";
                    $updateStmt = mysqli_prepare($conn, $updateQuery);

                    if ($updateStmt) {
                        mysqli_stmt_bind_param($updateStmt, "si", $newPassword, $id_user);
                        $updateResult = mysqli_stmt_execute($updateStmt);

                        if ($updateResult) {
                            $message = "Password berhasil diubah.";
                        } else {
                            $message = "Terjadi kesalahan saat mengubah password.";
                        }
                    } else {
                        $message = "Terjadi kesalahan saat memperbarui password.";
                    }
                } else {
                    $message = "Password lama tidak valid.";
                }
            } else {
                $message = "Password lama tidak ditemukan.";
            }

            // Menutup koneksi
            mysqli_stmt_close($stmt);
        } else {
            $message = "Terjadi kesalahan saat memeriksa password lama.";
        }
    }
}

// Menutup koneksi
db_disconnect($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Password</title>
  <!-- Script untuk menampilkan pop-up -->
  <script>
    // Fungsi untuk menampilkan pop-up
    function showPopup(message) {
      alert(message);
      window.location.href = 'profilUser.php'; // Alihkan kembali ke halaman profilUser.php setelah menampilkan pop-up
    }
  </script>
</head>
<body>
  <!-- Menampilkan pesan pop-up jika variabel $message berisi pesan -->
  <?php if ($message): ?>
    <script>
      showPopup('<?php echo $message; ?>');
    </script>
  <?php endif; ?>
</body>
</html>
