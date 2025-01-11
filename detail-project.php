<?php 
    include "koneksi.php";  
    if(!isset($_GET["id_project"]) ){
        header("Location: index.php");
        exit;
    } else {
        $id_project = $_GET["id_project"];
        $sql = "SELECT project.*, kategori.nama AS nama_kategori
        FROM project
        JOIN kategori ON project.id_kategori = kategori.id_kategori
        WHERE id_project = $id_project";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        // Perbaiki jalur file
        $photo_path = $row["photo_path"];
        $adjusted_path = str_replace("../assets/uploads", "assets/uploads", $photo_path);
    }
    include "components/index.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Project</title>
    <link rel="stylesheet" href="css/index.css" />
</head>
<body>
    <?php navbar(); ?>
       <div class="container-detail-project">
            <div class="heading-detail-project">
                <h4>Project Overview and Details</h4>
                <h1>Detail Project</h1>
            </div>
            <div class="wrapper-detail-project">
                <div class="container-img">
                    <img src="<?php echo htmlspecialchars($adjusted_path);?>" alt="">   
                </div>
                <div class="container-deskripsi">
                    <div class="heading">
                        <h1>
                            <?php echo $row["nama_kegiatan"];?>
                        </h1>
                        <div class="heading-2">
                            <h4>
                                <img src="assets/icon/icon-category.png" alt="">
                                <?php echo $row["nama_kategori"];?>
                            </h4>
                            <h4>
                                <img src="assets/icon/calendar-icon.png" alt="">
                                <?php echo $row["tahun"];?>
                            </h4>
                        </div>
                    </div>
                    <p>
                        <?php echo $row["deskripsi"];?>
                    </p>
                    <a href="<?php echo $row["link_project"]; ?>">
                        Lihat Project Saya
                    </a>
                </div>
            </div>
       </div>
    <?php footer(); ?>
</body>
</html>