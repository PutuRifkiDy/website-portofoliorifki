<?php
include "../koneksi.php";

// Periksa apakah ID dikirim melalui GET dan valid
if (isset($_GET['id_user']) && is_numeric($_GET['id_user'])) {
    $id_user = $_GET['id_user'];

    // Query dengan placeholder
    $sql = "DELETE FROM users WHERE id_user = ?";
    $stmt = $conn->prepare($sql);

    // Bind parameter (i = integer)
    $stmt->bind_param("i", $id_user);

    // Eksekusi query
    if ($stmt->execute()) {
        // Jika berhasil, redirect ke halaman user
        header("Location: user.php");
        exit();
    } else {
        echo "Gagal menghapus data: " . $stmt->error;
    }
} else {
    echo "ID tidak valid.";
}
?>
