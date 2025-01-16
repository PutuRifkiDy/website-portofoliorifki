<?php
include "../koneksi.php";

// Periksa apakah ID dikirim melalui GET dan valid
if (isset($_GET['id_reviews']) && is_numeric($_GET['id_reviews'])) {
    $id_reviews = $_GET['id_reviews'];

    // Query dengan placeholder
    $sql = "DELETE FROM reviews WHERE id_reviews = ?";
    $stmt = $conn->prepare($sql);

    // Bind parameter (i = integer)
    $stmt->bind_param("i", $id_reviews);

    // Eksekusi query
    if ($stmt->execute()) {
        // Jika berhasil, redirect ke halaman reviews
        header("Location: review_admin.php");
        exit();
    } else {
        echo "Gagal menghapus data: " . $stmt->error;
    }
} else {
    echo "ID tidak valid.";
}
?>
