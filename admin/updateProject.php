<?php 
    include "../components/admin.php";
    include "../koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Project - Page</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link
      rel="stylesheet"
      href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
    />  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php updateProject(); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        function confirmLogout(event) {
            // SweetAlert konfirmasi
            event.preventDefault();
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda akan keluar dari akun ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, keluar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Arahkan ke URL untuk penghapusan jika dikonfirmasi
                    window.location.href = '../logout.php';
                }
            });
        }
    </script>
    <script>
        document.getElementById("projectForm").addEventListener("submit", function (event) {
            event.preventDefault(); // Mencegah pengiriman form sebelum validasi

            const fileInput = document.getElementById("photo_path");
            const file = fileInput.files[0];
            
            // Validasi apakah file diunggah
            if (!file) {
                Swal.fire({
                    icon: "error",
                    title: "Gagal",
                    text: "Harap unggah foto project!",
                });
                return;
            }

            // Validasi format file
            const validExtensions = ["image/jpeg", "image/png", "image/gif"];
            if (!validExtensions.includes(file.type)) {
                Swal.fire({
                    icon: "error",
                    title: "Format Tidak Valid",
                    text: "Harap unggah file dengan format .jpg, .jpeg, .png, atau .gif.",
                });
                return;
            }

            // Validasi ukuran file (maksimal 2MB)
            const maxSize = 2 * 1024 * 1024; // 2MB
            if (file.size > maxSize) {
                Swal.fire({
                    icon: "error",
                    title: "Ukuran File Terlalu Besar",
                    text: "Ukuran file maksimal adalah 2MB.",
                });
                return;
            }

            // Jika validasi berhasil
            Swal.fire({
                icon: "success",
                title: "Berhasil!",
                text: "Foto project valid, form akan dikirim.",
            }).then(() => {
                // Submit form jika validasi berhasil
                document.getElementById("projectForm").submit();
            });
        });
    </script>
</body>
</html>