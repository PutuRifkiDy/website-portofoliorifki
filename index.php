<?php
    include "components/index.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css" />
    <title>Landing Page</title>
    <!-- animate onscroll -->
    <link rel="icon" href="assets/icon/logo-ti.png.png" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
</head>
<body>
    <?php navbar(); ?>
        <?php homePage(); ?>
        <?php aboutMe(); ?>
        <?php services(); ?>
        <?php ourMileStones(); ?>
        <?php ourProject(); ?>
        <?php testimoni(); ?>
        <?php contactMe(); ?>
    <?php footer(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>