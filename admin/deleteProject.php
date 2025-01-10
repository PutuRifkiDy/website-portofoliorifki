<?php
include "../koneksi.php";

// Periksa apakah ID dikirim melalui GET dan valid
if (isset($_GET['id_project']) && is_numeric($_GET['id_project'])) {
    $id_project = $_GET['id_project'];

    // Query dengan placeholder
    $sql = "DELETE FROM project WHERE id_project = ?";
    $stmt = $conn->prepare($sql);

    // Bind parameter (i = integer)
    $stmt->bind_param("i", $id_project);

    // Eksekusi query
    if ($stmt->execute()) {
        // Jika berhasil, redirect ke halaman project
        header("Location: project.php");
        exit();
    } else {
        echo "Gagal menghapus data: " . $stmt->error;
    }
} else {
    echo "ID tidak valid.";
}
?>
