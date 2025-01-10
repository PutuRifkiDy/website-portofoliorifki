<?php
include "../koneksi.php";

// Periksa apakah ID dikirim melalui GET dan valid
if (isset($_GET['id_kategori']) && is_numeric($_GET['id_kategori'])) {
    $id_kategori = $_GET['id_kategori'];

    // Query dengan placeholder
    $sql = "DELETE FROM kategori WHERE id_kategori = ?";
    $stmt = $conn->prepare($sql);

    // Bind parameter (i = integer)
    $stmt->bind_param("i", $id_kategori);

    // Eksekusi query
    if ($stmt->execute()) {
        // Jika berhasil, redirect ke halaman kategori
        header("Location: category.php");
        exit();
    } else {
        echo "Gagal menghapus data: " . $stmt->error;
    }
} else {
    echo "ID tidak valid.";
}
?>
