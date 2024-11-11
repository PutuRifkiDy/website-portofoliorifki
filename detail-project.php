<?php 
    if( !isset($_GET["kategori"]) ||
       !isset($_GET["nama_kegiatan"]) ||
       !isset($_GET["deskripsi_kegiatan"]) ||
       !isset($_GET["kapan_dikerjakan"]) ||
       !isset($_GET["gambar"]) ||
       !isset($_GET['project_source']) ){
            header("Location: index.php");
            exit;
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
                    <img src="assets/<?php echo $_GET["gambar"];?>" alt="">   
                </div>
                <div class="container-deskripsi">
                    <div class="heading">
                        <h1>
                            <?php echo $_GET["nama_kegiatan"];?>
                        </h1>
                        <div class="heading-2">
                            <h4>
                                <img src="assets/icon/icon-category.png" alt="">
                                <?php echo $_GET["kategori"];?>
                            </h4>
                            <h4>
                                <img src="assets/icon/calendar-icon.png" alt="">
                                <?php echo $_GET["kapan_dikerjakan"];?>
                            </h4>
                        </div>
                    </div>
                    <p>
                        <?php echo $_GET["deskripsi_kegiatan"];?>
                    </p>
                    <a href="<?php echo $_GET['project_source']; ?>">
                        Lihat Project Saya
                    </a>
                </div>
            </div>
       </div>
    <?php footer(); ?>
</body>
</html>