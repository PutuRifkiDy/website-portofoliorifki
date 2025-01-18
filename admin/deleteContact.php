<?php
include "../koneksi.php";

// Periksa apakah ID dikirim melalui GET dan valid
if (isset($_GET['id_kontak']) && is_numeric($_GET['id_kontak'])) {
    $id_kontak = $_GET['id_kontak'];

    // Query dengan placeholder
    $sql = "DELETE FROM kontak WHERE id_kontak = ?";
    $stmt = $conn->prepare($sql);

    // Bind parameter (i = integer)
    $stmt->bind_param("i", $id_kontak);

    // Eksekusi query
    if ($stmt->execute()) {
        // Jika berhasil, redirect ke halaman kontak
        header("Location: contact.php");
        exit();
    } else {
        echo "Gagal menghapus data: " . $stmt->error;
    }
} else {
    echo "ID tidak valid.";
}
?>
