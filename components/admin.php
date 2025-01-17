<?php

session_start();
if (!isset($_SESSION['id_user'])) {
    header("Location: login.php");
    exit;
}

if ($_SESSION['level'] == 0) {
    // User biasa hanya boleh mengakses halaman tertentu
    $allowed_pages = ['profile.php', 'reviews.php', 'createReview.php', 'updateProfile.php', 'updateReview.php'];
    $current_page = basename($_SERVER['PHP_SELF']);
    if (!in_array($current_page, $allowed_pages)) {
        header("Location: profile.php");
        exit;
    }
}
function iconUser()
{
?>
    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.21" fill-rule="evenodd" clip-rule="evenodd" d="M0 30V37C0 49.7025 10.2975 60 23 60H30H37C49.7025 60 60 49.7025 60 37V30V23C60 10.2975 49.7025 0 37 0H30H23C10.2975 0 0 10.2975 0 23V30Z" fill="#8280FF" />
        <path opacity="0.587821" fill-rule="evenodd" clip-rule="evenodd" d="M20.6667 23.3333C20.6667 26.2789 23.0545 28.6667 26 28.6667C28.9455 28.6667 31.3333 26.2789 31.3333 23.3333C31.3333 20.3878 28.9455 18 26 18C23.0545 18 20.6667 20.3878 20.6667 23.3333ZM34 28.6667C34 30.8758 35.7909 32.6667 38 32.6667C40.2091 32.6667 42 30.8758 42 28.6667C42 26.4575 40.2091 24.6667 38 24.6667C35.7909 24.6667 34 26.4575 34 28.6667Z" fill="#8280FF" />
        <path fill-rule="evenodd" clip-rule="evenodd" d="M25.9778 31.3333C19.6826 31.3333 14.5177 34.5687 14.0009 40.9323C13.9727 41.2789 14.6356 42 14.97 42H36.9956C37.9972 42 38.0128 41.194 37.9972 40.9333C37.6065 34.3909 32.3616 31.3333 25.9778 31.3333ZM45.2746 42L40.1333 42C40.1333 38.9988 39.1417 36.2291 37.4683 34.0008C42.0103 34.0505 45.7189 36.3469 45.998 41.2C46.0092 41.3955 45.998 42 45.2746 42Z" fill="#8280FF" />
    </svg>
<?php
}

function iconCategory()
{
?>
    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.21" fill-rule="evenodd" clip-rule="evenodd" d="M0 30V37C0 49.7025 10.2975 60 23 60H30H37C49.7025 60 60 49.7025 60 37V30V23C60 10.2975 49.7025 0 37 0H30H23C10.2975 0 0 10.2975 0 23V30Z" fill="#FEC53D" />
        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 24.3165L27.9005 31.7646C28.0394 31.8448 28.1851 31.9027 28.3333 31.9395V46.3847L15.9201 39.0385C15.3498 38.701 15 38.0876 15 37.4249V24.3165ZM45 24.1185V37.4249C45 38.0876 44.6502 38.701 44.0799 39.0385L31.6667 46.3847V31.8129C31.6969 31.7978 31.7269 31.7817 31.7566 31.7646L45 24.1185Z" fill="#FEC53D" />
        <path opacity="0.499209" fill-rule="evenodd" clip-rule="evenodd" d="M15.4052 20.7014C15.5628 20.5024 15.7617 20.3343 15.9936 20.2108L29.1186 13.2201C29.6695 12.9266 30.3304 12.9266 30.8814 13.2201L44.0064 20.2108C44.1852 20.306 44.3443 20.4277 44.48 20.5697L30.0899 28.8778C29.9953 28.9325 29.908 28.995 29.8285 29.064C29.749 28.995 29.6618 28.9325 29.5671 28.8778L15.4052 20.7014Z" fill="#FEC53D" />
    </svg>
<?php
}

function iconProject()
{
?>
    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.21" fill-rule="evenodd" clip-rule="evenodd" d="M0 30V37C0 49.7025 10.2975 60 23 60H30H37C49.7025 60 60 49.7025 60 37V30V23C60 10.2975 49.7025 0 37 0H30H23C10.2975 0 0 10.2975 0 23V30Z" fill="#4AD991" />
        <path d="M19.1111 40.8889H42.4444C43.3036 40.8889 44 41.5853 44 42.4444C44 43.3036 43.3036 44 42.4444 44H17.5556C16.6964 44 16 43.3036 16 42.4444V17.5556C16 16.6964 16.6964 16 17.5556 16C18.4147 16 19.1111 16.6964 19.1111 17.5556V40.8889Z" fill="#4AD991" />
        <path opacity="0.5" d="M24.9126 34.175C24.325 34.8018 23.3406 34.8335 22.7139 34.2459C22.0871 33.6584 22.0554 32.674 22.643 32.0472L28.4763 25.825C29.0445 25.2188 29.9888 25.1663 30.6209 25.7056L35.2249 29.6344L41.2235 22.0361C41.7559 21.3618 42.734 21.2467 43.4083 21.7791C44.0826 22.3114 44.1977 23.2896 43.6654 23.9639L36.6654 32.8306C36.1186 33.5231 35.1059 33.6227 34.4347 33.05L29.7306 29.0358L24.9126 34.175Z" fill="#4AD991" />
    </svg>
<?php
}

function iconNewsLetter()
{
?>
    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M0 30V37C0 49.7025 10.2975 60 23 60H30H37C49.7025 60 60 49.7025 60 37V30V23C60 10.2975 49.7025 0 37 0H30H23C10.2975 0 0 10.2975 0 23V30Z" fill="#FF9066" />
        <path opacity="0.78" fill-rule="evenodd" clip-rule="evenodd" d="M28.6312 23.8088C28.6512 23.5483 28.8684 23.3472 29.1297 23.3472H29.5475C29.8044 23.3472 30.0195 23.5418 30.045 23.7974L30.6667 30.0139L35.0814 32.5366C35.2372 32.6256 35.3333 32.7913 35.3333 32.9707V33.3592C35.3333 33.6889 35.0199 33.9284 34.7018 33.8416L28.3987 32.1226C28.1673 32.0595 28.0133 31.841 28.0317 31.6019L28.6312 23.8088Z" fill="#FF9066" />
        <path opacity="0.901274" fill-rule="evenodd" clip-rule="evenodd" d="M22.7218 14.9844C22.4577 14.6696 21.9477 14.7901 21.8524 15.1898L20.2189 22.0379C20.1412 22.3636 20.3993 22.6721 20.7336 22.6531L27.7783 22.2539C28.1892 22.2306 28.3976 21.7486 28.133 21.4333L26.3316 19.2865C27.4965 18.8884 28.7317 18.6805 30 18.6805C36.2592 18.6805 41.3333 23.7546 41.3333 30.0139C41.3333 36.2731 36.2592 41.3472 30 41.3472C23.7408 41.3472 18.6667 36.2731 18.6667 30.0139C18.6667 28.9631 18.809 27.9339 19.0864 26.9448L16.5188 26.2246C16.1808 27.4298 16 28.7007 16 30.0139C16 37.7458 22.268 44.0139 30 44.0139C37.732 44.0139 44 37.7458 44 30.0139C44 22.2819 37.732 16.0139 30 16.0139C28.0551 16.0139 26.2029 16.4104 24.5197 17.1271L22.7218 14.9844Z" fill="#FF9066" />
    </svg>
<?php
}

function sideBar()
{
?>
    <input type="checkbox" id="menu-toggle" />
    <div class="side-bar">
        <div class="side-header">
            <a href="../index.php" style="text-decoration: none; color: black;">
                <h2>R<span>IF</span></h2>
            </a>
        </div>
        <div class="side-content">
            <div class="profile">
                <img src="../assets/icon/logo-ti.png" alt="" class="profile-img">
                <h3>Udayana University</h3>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                        <a href="profile.php">
                            <span class="las la-user" style="color: #85878a">
                            </span>
                            <small>Profile</small>
                        </a>
                    </li>
                    <?php if ($_SESSION['level'] == 1) { ?>
                        <li>
                            <a href="dashboard.php">
                                <span class="las la-chart-bar" style="color: #85878a"></span>
                                <small>Dashboard</small>
                            </a>
                        </li>
                        <li>
                            <a href="category.php">
                                <span class="las la-list" style="color: #85878a">
                                </span>
                                <small>Category</small>
                            </a>
                        </li>
                        <li>
                            <a href="project.php">
                                <span class="las la-briefcase" style="color: #85878a">
                                </span>
                                <small>Project</small>
                            </a>
                        </li>
                        <li>
                            <a href="user.php">
                                <span class="las la-user-plus" style="color: #85878a">
                                </span>
                                <small>User</small>
                            </a>
                        </li>
                        <li>
                            <a href="review_admin.php">
                                <span class="las la-calendar" style="color: #85878a">
                                </span>
                                <small>Reviews</small>
                            </a>
                        </li>
                        <li>
                            <a href="contact.php">
                                <span class="las la-comments" style="color: #85878a">
                                </span>
                                <small>Contacts</small>
                            </a>
                        </li>
                    <?php } else { ?>
                        <li>
                            <a href="reviews.php">
                                <span class="las la-calendar" style="color: #85878a">
                                </span>
                                <small>Review</small>
                            </a>
                        </li>
                    <?php } ?>
                    <!-- <li>
                        <a href="combine_chart.html">
                            <span class="fa-solid fa-chart-simple" style="color: #85878a">
                            </span>
                            <small>Grafik Gabungan</small>
                        </a>
                    </li>
                    <li>
                        <a href="cpu_usage.html">
                            <span class="fa-solid fa-server" style="color: #85878a"> </span>
                            <small>CPU Usage</small>
                        </a>
                    </li>
                    <li>
                        <a href="memory_usage.html">
                            <span class="fa-solid fa-memory" style="color: #85878a"> </span>
                            <small>Memory Usage</small>
                        </a>
                    </li>
                    <li>
                        <a href="storage_usage.html">
                            <span class="fa-solid fa-database" style="color: #85878a">
                            </span>
                            <small>Storage Usage</small>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
<?php
}

function dashboardPage()
{

    include "../koneksi.php";
    $sqlKategori = "SELECT COUNT(*) AS total_rows_kategori FROM kategori";
    $stmtKategori = $conn->prepare($sqlKategori);
    $stmtKategori->execute();
    $resultKategori = $stmtKategori->get_result();
    $rowKategori = $resultKategori->fetch_assoc();

    $sqlProject = "SELECT COUNT(*) AS total_rows_project FROM project";
    $stmtProject = $conn->prepare($sqlProject);
    $stmtProject->execute();
    $resultProject = $stmtProject->get_result();
    $rowProject = $resultProject->fetch_assoc();

    $sqlProjectDashboard = "SELECT project.*, kategori.nama AS nama_kategori
     FROM project
     JOIN kategori ON project.id_kategori = kategori.id_kategori";
    $stmtProjectDashboard = $conn->prepare($sqlProjectDashboard);
    $stmtProjectDashboard->execute();
    $resultProjectDashboard = $stmtProjectDashboard->get_result();

    $sqlUserCount = "SELECT COUNT(*) AS total_rows_user FROM users";
    $stmtUserCount = $conn->prepare($sqlUserCount);
    $stmtUserCount->execute();
    $resultUserCount = $stmtUserCount->get_result();
    $rowUser = $resultUserCount->fetch_assoc();

    $sqlReviewsCount = "SELECT COUNT(*) AS total_rows_reviews FROM reviews";
    $stmtReviewsCount = $conn->prepare($sqlReviewsCount);
    $stmtReviewsCount->execute();
    $resultReviews = $stmtReviewsCount->get_result();
    $rowReviews = $resultReviews->fetch_assoc();


    $user_id = $_SESSION['id_user'];
    $sqlUser = "SELECT * FROM users WHERE id_user = ?";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bind_param("i", $user_id);
    $stmtUser->execute();
    $user = $stmtUser->get_result()->fetch_assoc();

?>
    <?php sideBar(); ?>
    <div class="main-content">
        <header>
            <div class="header-content">
                <label for="menu-toggle"><span class="las la-bars"></span></label>
                <div style="display: flex; flex-direction: row; gap: 10px;">
                    <div style="display: flex; flex-direction:flex; justify-content: center; align-items: center; gap: 10px; ">
                        <img src="../assets/icon/icon-user.png" alt="" width="20px" height="20px">
                        <p style="display:flex; justify-content: center; align-items: center; text-align: center; padding-right: 10px; color: #000000"><?php echo $user['nama']; ?></p>
                    </div>
                    <a href="../index.php">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-home.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                    <a href="#" onclick="confirmLogout(event)">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-leave.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                </div>
            </div>
        </header>
        <div class="container-dashboard">
            <p>Indicator</p>
            <div class="card-container">
                <div class="card-indicator">
                    <div class="text">
                        <h1>Total Category</h1>
                        <p><?php echo $rowKategori['total_rows_kategori']; ?></p>
                    </div>
                    <div class="icon-category">
                        <?php iconCategory(); ?>
                    </div>
                </div>
                <div class="card-indicator">
                    <div class="text">
                        <h1>Total Project</h1>
                        <p><?php echo $rowProject['total_rows_project']; ?></p>
                    </div>
                    <div class="icon">
                        <?php iconProject(); ?>
                    </div>
                </div>
                <div class="card-indicator">
                    <div class="text">
                        <h1>Total NewsLetter</h1>
                        <p><?php echo $rowReviews['total_rows_reviews']; ?></p>
                    </div>
                    <div class="icon">
                        <?php iconNewsLetter(); ?>
                    </div>
                </div>
                <div class="card-indicator">
                    <div class="text">
                        <h1>Total User</h1>
                        <p><?php echo $rowUser['total_rows_user']; ?></p>
                    </div>
                    <div class="icon">
                        <?php iconUser(); ?>
                    </div>
                </div>
            </div>

            <div class="data-dashboard">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Kegiatan</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Link Project</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($resultProjectDashboard->num_rows  > 0) {
                            $no = 1;
                        ?>
                            <?php while ($rowProjectDashboard = $resultProjectDashboard->fetch_assoc()) {

                            ?>
                                <tr>
                                    <td scope="row"><?php echo $no++; ?></td>
                                    <td><?php echo $rowProjectDashboard['nama_kegiatan']; ?></td>
                                    <td><?php echo $rowProjectDashboard['nama_kategori']; ?></td>
                                    <td><?php echo $rowProjectDashboard['tahun']; ?></td>
                                    <td width="400" style="text-align: justify;"><?php echo $rowProjectDashboard['deskripsi']; ?></td>
                                    <td><a href="<?php echo $rowProjectDashboard['link_project']; ?>" target="_blank">Link</a></td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="6" style="text-align: center;">Data Project Belum Tersedia</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
<?php
}

function categoryPage()
{

    include "../koneksi.php";
    $sql = "SELECT * FROM kategori";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    $user_id = $_SESSION['id_user'];
    $sqlUser = "SELECT * FROM users WHERE id_user = ?";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bind_param("i", $user_id);
    $stmtUser->execute();
    $user = $stmtUser->get_result()->fetch_assoc();

    $user_id = $_SESSION['id_user'];
    $sqlUser = "SELECT * FROM users WHERE id_user = ?";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bind_param("i", $user_id);
    $stmtUser->execute();
    $user = $stmtUser->get_result()->fetch_assoc();
?>
    <?php sideBar(); ?>
    <div class="main-content">
        <header>
            <div class="header-content">
                <label for="menu-toggle"><span class="las la-bars"></span></label>
                <div style="display: flex; flex-direction: row; gap: 10px;">
                    <div style="display: flex; flex-direction:flex; justify-content: center; align-items: center; gap: 10px; ">
                        <img src="../assets/icon/icon-user.png" alt="" width="20px" height="20px">
                        <p style="display:flex; justify-content: center; align-items: center; text-align: center; padding-right: 10px; color: #000000"><?php echo $user['nama']; ?></p>
                    </div>
                    <a href="../index.php">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-home.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                    <a href="#" onclick="confirmLogout(event)">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-leave.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                </div>
            </div>
        </header>
        <div class="container-dashboard">
            <p>Data Category Project</p>
            <div class="data-dashboard">
                <a href="createKategory.php">
                    <button type="button" class="btn btn-primary">Tambah Category</button>
                </a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result->num_rows  > 0) {
                            $no = 1;
                        ?>
                            <?php while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td scope="row"><?php echo $no++; ?></td>
                                    <td><?php echo $row['nama']; ?></td>
                                    <td>
                                        <a href="#" onclick="confirmDelete(<?php echo $row['id_kategori']; ?>)" class="btn btn-danger">Hapus</a>
                                        <a href="updateKategory.php?id_kategori=<?php echo $row['id_kategori']; ?>" class="btn btn-success">Update</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="2" style="text-align: center;">Data Kategori Belum Tersedia</td>
                            </tr>
                        <?php } ?>
                        <!-- <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr> -->
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <?php
}

function createKategory()
{
    include "../koneksi.php";

    if (isset($_POST['kategori'])) {
        $nama_kategori = htmlspecialchars($_POST['kategori'], ENT_QUOTES, 'UTF-8');

        $sql = "INSERT INTO kategori (nama) VALUES (?)";

        $stmt = $conn->prepare($sql);

        // Bind parameter (s = string)
        $stmt->bind_param("s", $nama_kategori);

        // Eksekusi query
        if ($stmt->execute()) {
            echo "
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: 'Kategori Berhasil Ditambahkan!'
                    }).then(() => {
                        window.location.href = 'category.php';
                    });
                });
            </script>
        ";
        } else {
    ?>
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Something went wrong!",
                });
            </script>
    <?php
        }
    }


    $user_id = $_SESSION['id_user'];
    $sqlUser = "SELECT * FROM users WHERE id_user = ?";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bind_param("i", $user_id);
    $stmtUser->execute();
    $user = $stmtUser->get_result()->fetch_assoc();

    ?>
    <?php sideBar(); ?>
    <div class="main-content">
        <header>
            <div class="header-content">
                <label for="menu-toggle"><span class="las la-bars"></span></label>
                <div style="display: flex; flex-direction: row; gap: 10px;">
                    <div style="display: flex; flex-direction:flex; justify-content: center; align-items: center; gap: 10px; ">
                        <img src="../assets/icon/icon-user.png" alt="" width="20px" height="20px">
                        <p style="display:flex; justify-content: center; align-items: center; text-align: center; padding-right: 10px; color: #000000"><?php echo $user['nama']; ?></p>
                    </div>
                    <a href="../index.php">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-home.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                    <a href="#" onclick="confirmLogout(event)">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-leave.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                </div>
            </div>
        </header>
        <div class="container-dashboard">
            <div class="container-heading-crud">
                <a href="category.php">
                    <img src="../assets/icon/arrow-left.png" alt="" width="40" height="40">
                </a>
                <p>Tambah Category</p>
            </div>

            <div class="data-dashboard ">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="kategori">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
<?php
}

function updateKategory()
{
    include "../koneksi.php";

    if (isset($_GET['id_kategori']) && is_numeric($_GET['id_kategori'])) {
        $id_kategori = $_GET['id_kategori'];

        $sql = "SELECT * FROM kategori WHERE id_kategori = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id_kategori);
        $stmt->execute();

        $result = $stmt->get_result();

        // Cek apakah data ditemukan
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "Data tidak ditemukan.";
            exit();
        }
    } else {
        echo "ID tidak valid.";
        exit();
    }

    if (isset($_POST["kategori"])) {
        $kategori_baru = $_POST["kategori"];

        $sql = "UPDATE kategori SET nama = ? WHERE id_kategori = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $kategori_baru, $id_kategori);

        if ($stmt->execute()) {
            // Redirect ke halaman kategori setelah berhasil update
            echo "
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: 'Kategori Berhasil Diupdate!'
                    }).then(() => {
                        window.location.href = 'category.php';
                    });
                });
            </script>
        ";
        } else {
            echo "Gagal memperbarui data: " . $stmt->error;
        }
    }

    $user_id = $_SESSION['id_user'];
    $sqlUser = "SELECT * FROM users WHERE id_user = ?";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bind_param("i", $user_id);
    $stmtUser->execute();
    $user = $stmtUser->get_result()->fetch_assoc();


?>
    <?php sideBar(); ?>
    <div class="main-content">
        <header>
            <div class="header-content">
                <label for="menu-toggle"><span class="las la-bars"></span></label>
                <div style="display: flex; flex-direction: row; gap: 10px;">
                    <div style="display: flex; flex-direction:flex; justify-content: center; align-items: center; gap: 10px; ">
                        <img src="../assets/icon/icon-user.png" alt="" width="20px" height="20px">
                        <p style="display:flex; justify-content: center; align-items: center; text-align: center; padding-right: 10px; color: #000000"><?php echo $user['nama']; ?></p>
                    </div>
                    <a href="../index.php">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-home.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                    <a href="#" onclick="confirmLogout(event)">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-leave.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                </div>
            </div>
        </header>
        <div class="container-dashboard">
            <div class="container-heading-crud">
                <a href="category.php">
                    <img src="../assets/icon/arrow-left.png" alt="" width="40" height="40">
                </a>
                <p>Update Category</p>
            </div>

            <div class="data-dashboard ">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="kategori" value="<?php echo htmlspecialchars($row['nama']); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
<?php
}

function projectPage()
{
    include "../koneksi.php";

    $sql = "SELECT project.*, kategori.nama AS nama_kategori
     FROM project
     JOIN kategori ON project.id_kategori = kategori.id_kategori";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    $user_id = $_SESSION['id_user'];
    $sqlUser = "SELECT * FROM users WHERE id_user = ?";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bind_param("i", $user_id);
    $stmtUser->execute();
    $user = $stmtUser->get_result()->fetch_assoc();
?>
    <?php sideBar(); ?>
    <div class="main-content">
        <header>
            <div class="header-content">
                <label for="menu-toggle"><span class="las la-bars"></span></label>
                <div style="display: flex; flex-direction: row; gap: 10px;">
                    <div style="display: flex; flex-direction:flex; justify-content: center; align-items: center; gap: 10px; ">
                        <img src="../assets/icon/icon-user.png" alt="" width="20px" height="20px">
                        <p style="display:flex; justify-content: center; align-items: center; text-align: center; padding-right: 10px; color: #000000"><?php echo $user['nama']; ?></p>
                    </div>
                    <a href="../index.php">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-home.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                    <a href="#" onclick="confirmLogout(event)">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-leave.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                </div>
            </div>
        </header>
        <div class="container-dashboard">
            <p>Data Project</p>
            <div class="data-dashboard">
                <a href="createProject.php">
                    <button type="button" class="btn btn-primary">Tambah Project</button>
                </a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Nama Kegiatan</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Link Project</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result->num_rows  > 0) {
                            $no = 1;
                        ?>
                            <?php while ($row = $result->fetch_assoc()) {

                            ?>
                                <tr>
                                    <td scope="row"><?php echo $no++; ?></td>
                                    <td><img src="<?php echo $row['photo_path']; ?>" alt="Foto" width="100"></td>
                                    <td><?php echo $row['nama_kegiatan']; ?></td>
                                    <td><?php echo $row['nama_kategori']; ?></td>
                                    <td><?php echo $row['tahun']; ?></td>
                                    <td width="400" style="text-align: justify;"><?php echo $row['deskripsi']; ?></td>
                                    <td><a href="<?php echo $row['link_project']; ?>" target="_blank">Link</a></td>
                                    <td>
                                        <a href="#" onclick="confirmDelete(<?php echo $row['id_project']; ?>)" class="btn btn-danger">Hapus</a>
                                        <a href="updateProject.php?id_project=<?php echo $row['id_project']; ?>" class="btn btn-success">Update</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="6" style="text-align: center;">Data Project Belum Tersedia</td>
                            </tr>
                        <?php } ?>
                        <!-- <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr> -->
                    </tbody>
                </table>
            </div>

        </div>
    </div>
<?php
}

function createProject()
{
    include "../koneksi.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_kategori = $_POST['id_kategori'];
        $nama_kegiatan = htmlspecialchars($_POST['nama_kegiatan'], ENT_QUOTES, 'UTF-8');
        $deskripsi = htmlspecialchars($_POST['deskripsi'], ENT_QUOTES, 'UTF-8');
        $tahun = htmlspecialchars($_POST['tahun'], ENT_QUOTES, 'UTF-8');
        $link_project = htmlspecialchars($_POST['link_project'], ENT_QUOTES, 'UTF-8');

        // Proses upload file
        $target_dir = "../assets/uploads/";
        $target_file = $target_dir . basename($_FILES["photo_path"]["name"]);
        if (move_uploaded_file($_FILES["photo_path"]["tmp_name"], $target_file)) {
            // Simpan data ke database
            $sql = "INSERT INTO project (id_kategori, nama_kegiatan, deskripsi, photo_path, link_project, tahun) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("isssss", $id_kategori, $nama_kegiatan, $deskripsi, $target_file, $link_project, $tahun);

            if ($stmt->execute()) {
                echo "
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil!',
                                text: 'Project Berhasil Ditambahkan!'
                            }).then(() => {
                                window.location.href = 'project.php';
                            });
                        });
                    </script>
            ";
            } else {
                echo "Gagal menyimpan data: " . $stmt->error;
            }
        } else {
            echo "Gagal mengupload file.";
        }
    }

    $user_id = $_SESSION['id_user'];
    $sqlUser = "SELECT * FROM users WHERE id_user = ?";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bind_param("i", $user_id);
    $stmtUser->execute();
    $user = $stmtUser->get_result()->fetch_assoc();


?>
    <?php sideBar(); ?>
    <div class="main-content">
        <header>
            <div class="header-content">
                <label for="menu-toggle"><span class="las la-bars"></span></label>
                <div style="display: flex; flex-direction: row; gap: 10px;">
                    <div style="display: flex; flex-direction:flex; justify-content: center; align-items: center; gap: 10px; ">
                        <img src="../assets/icon/icon-user.png" alt="" width="20px" height="20px">
                        <p style="display:flex; justify-content: center; align-items: center; text-align: center; padding-right: 10px; color: #000000"><?php echo $user['nama']; ?></p>
                    </div>
                    <a href="../index.php">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-home.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                    <a href="#" onclick="confirmLogout(event)">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-leave.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                </div>
            </div>
        </header>
        <div class="container-dashboard">
            <div class="container-heading-crud">
                <a href="project.php">
                    <img src="../assets/icon/arrow-left.png" alt="" width="40" height="40">
                </a>
                <p>Tambah Project</p>
            </div>

            <div class="data-dashboard ">
                <form action="" method="POST" enctype="multipart/form-data" id="projectForm">
                    <div class="mb-3">
                        <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="nama_kegiatan">
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select name="id_kategori" id="id_kategori" required class="form-select">
                            <?php
                            $result = $conn->query("SELECT * FROM kategori");
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='{$row['id_kategori']}'>{$row['nama']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="deskripsi">
                    </div>
                    <div class="mb-3">
                        <label for="photo_path" class="form-label">Foto Project</label>
                        <input type="file" class="form-control" id="photo_path" name="photo_path" accept="image/*" required>
                    </div>
                    <div class="mb-3">
                        <label for="link_project" class="form-label">Link Project</label>
                        <input type="text" class="form-control" id="link_project" name="link_project">
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input type="text" class="form-control" id="tahun" name="tahun">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
<?php
}

function updateProject()
{
    include "../koneksi.php";

    if (isset($_GET['id_project']) && is_numeric($_GET['id_project'])) {
        $id_project = $_GET['id_project'];

        $sql = "SELECT * FROM project WHERE id_project = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id_project);
        $stmt->execute();

        $result = $stmt->get_result();

        // Cek apakah data ditemukan
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "Data tidak ditemukan.";
            exit();
        }
    } else {
        echo "ID tidak valid.";
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_project = $_POST['id_project'];
        $nama_kegiatan = htmlspecialchars($_POST['nama_kegiatan'], ENT_QUOTES, 'UTF-8');
        $deskripsi = htmlspecialchars($_POST['deskripsi'], ENT_QUOTES, 'UTF-8');
        $link_project = htmlspecialchars($_POST['link_project'], ENT_QUOTES, 'UTF-8');
        $tahun = htmlspecialchars($_POST['tahun'], ENT_QUOTES, 'UTF-8');

        $target_file = null;
        if (!empty($_FILES["photo_path"]["name"])) {
            $target_dir = "../assets/uploads/";
            $target_file = $target_dir . basename($_FILES["photo_path"]["name"]);
            move_uploaded_file($_FILES["photo_path"]["tmp_name"], $target_file);
        }

        // Update data
        $sql = "UPDATE project SET nama_kegiatan = ?, deskripsi = ?, photo_path = ?, link_project = ?, tahun = ? WHERE id_project = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssi", $nama_kegiatan, $deskripsi, $target_file, $link_project, $tahun, $id_project);

        if ($stmt->execute()) {
            echo "
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: 'Project Berhasil Diupdate!'
                    }).then(() => {
                        window.location.href = 'project.php';
                    });
                });
            </script>
        ";
        } else {
            echo "Gagal memperbarui data: " . $stmt->error;
        }
    }

    $user_id = $_SESSION['id_user'];
    $sqlUser = "SELECT * FROM users WHERE id_user = ?";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bind_param("i", $user_id);
    $stmtUser->execute();
    $user = $stmtUser->get_result()->fetch_assoc();

?>
    <?php sideBar(); ?>
    <div class="main-content">
        <header>
            <div class="header-content">
                <label for="menu-toggle"><span class="las la-bars"></span></label>
                <div style="display: flex; flex-direction: row; gap: 10px;">
                    <div style="display: flex; flex-direction:flex; justify-content: center; align-items: center; gap: 10px; ">
                        <img src="../assets/icon/icon-user.png" alt="" width="20px" height="20px">
                        <p style="display:flex; justify-content: center; align-items: center; text-align: center; padding-right: 10px; color: #000000"><?php echo $user['nama']; ?></p>
                    </div>
                    <a href="../index.php">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-home.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                    <a href="#" onclick="confirmLogout(event)">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-leave.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                </div>
            </div>
        </header>
        <div class="container-dashboard">
            <div class="container-heading-crud">
                <a href="project.php">
                    <img src="../assets/icon/arrow-left.png" alt="" width="40" height="40">
                </a>
                <p>Update Project</p>
            </div>

            <div class="data-dashboard ">
                <form action="" method="POST" enctype="multipart/form-data" id="projectForm">
                    <input type="hidden" name="id_project" value="<?php echo $row['id_project']; ?>">
                    <div class="mb-3">
                        <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="nama_kegiatan" value="<?php echo $row['nama_kegiatan']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select name="id_kategori" id="id_kategori" required class="form-select">
                            <?php
                            $result = $conn->query("SELECT * FROM kategori");
                            while ($rowKategori = $result->fetch_assoc()) {
                                echo "<option value='{$rowKategori['id_kategori']}'>{$rowKategori['nama']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="deskripsi" value="<?php echo $row['deskripsi']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="photo_path" class="form-label">Foto Project</label>
                        <input type="file" class="form-control" id="photo_path" name="photo_path" accept="image/*" value="<?php echo $row['photo_path']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="link_project" class="form-label">Link Project</label>
                        <input type="text" class="form-control" id="link_project" name="link_project" value="<?php echo $row['link_project']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input type="text" class="form-control" id="tahun" name="tahun" value="<?php echo $row['tahun']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
<?php
}

function profilePage()
{
    include "../koneksi.php";


    $user_id = $_SESSION['id_user'];
    $sqlUser = "SELECT * FROM users WHERE id_user = ?";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bind_param("i", $user_id);
    $stmtUser->execute();
    $user = $stmtUser->get_result()->fetch_assoc();


?>
    <?php sideBar(); ?>
    <div class="main-content">
        <header>
            <div class="header-content">
                <label for="menu-toggle"><span class="las la-bars"></span></label>
                <div style="display: flex; flex-direction: row; gap: 10px;">
                    <div style="display: flex; flex-direction:flex; justify-content: center; align-items: center; gap: 10px; ">
                        <img src="../assets/icon/icon-user.png" alt="" width="20px" height="20px">
                        <p style="display:flex; justify-content: center; align-items: center; text-align: center; padding-right: 10px; color: #000000"><?php echo $user['nama']; ?></p>
                    </div>
                    <a href="../index.php">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-home.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                    <a href="#" onclick="confirmLogout(event)">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-leave.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                </div>
            </div>
        </header>
        <div class="container-dashboard">
            <p>Profile</p>

            <div class="data-dashboard ">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="nama" value="<?php echo $user['nama']; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" name="password" value="<?php echo $user['password']; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $user['username']; ?>" readonly>
                    </div>
                    <div class="mb-3 foto-profile">
                        <label for="photo_path" class="form-label">Foto</label>
                        <img src="<?php echo $user['photo_path']; ?>" alt="" width="200" height="200">
                    </div>
                    <a href="updateProfile.php" class="btn btn-primary">
                        Update
                    </a>
                </form>
            </div>

        </div>
    </div>
<?php
}

function updateProfile()
{
    include "../koneksi.php";

    $user_id = $_SESSION['id_user'];
    $sqlUser = "SELECT * FROM users WHERE id_user = ?";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bind_param("i", $user_id);
    $stmtUser->execute();
    $user = $stmtUser->get_result()->fetch_assoc();


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_user = $user['id_user'];
        $nama = htmlspecialchars($_POST['nama'], ENT_QUOTES, 'UTF-8');
        $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
        // $photo_path = $_POST['photo_path'];

        $check_sql = "SELECT * FROM users WHERE username = ? AND id_user != ?";
        $check_stmt = $conn->prepare($check_sql);
        $check_stmt->bind_param("si", $username, $id_user);
        $check_stmt->execute();
        $result_check = $check_stmt->get_result();

        if ($result_check->num_rows > 0) {
            // Username sudah ada, tampilkan alert
            echo "
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Username sudah terdaftar!'
                        });
                    });
                </script>
            ";
        } else {
            $target_file = null;
            if (!empty($_FILES["photo_path"]["name"])) {
                $target_dir = "../assets/uploads/";
                $target_file = $target_dir . basename($_FILES["photo_path"]["name"]);
                move_uploaded_file($_FILES["photo_path"]["tmp_name"], $target_file);
            }

            // Update data
            $sql = "UPDATE users SET username = ?, photo_path = ?, nama = ? WHERE id_user = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssi", $username, $target_file, $nama, $id_user);

            if ($stmt->execute()) {
                echo "
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: 'Profile Berhasil Diupdate!'
                        }).then(() => {
                            window.location.href = 'profile.php';
                        });
                    });
                </script>
            ";
            } else {
                echo "Gagal memperbarui data: " . $stmt->error;
            }
        }
    }

?>
    <?php sideBar(); ?>
    <div class="main-content">
        <header>
            <div class="header-content">
                <label for="menu-toggle"><span class="las la-bars"></span></label>
                <div style="display: flex; flex-direction: row; gap: 10px;">
                    <div style="display: flex; flex-direction:flex; justify-content: center; align-items: center; gap: 10px; ">
                        <img src="../assets/icon/icon-user.png" alt="" width="20px" height="20px">
                        <p style="display:flex; justify-content: center; align-items: center; text-align: center; padding-right: 10px; color: #000000"><?php echo $user['nama']; ?></p>
                    </div>
                    <a href="../index.php">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-home.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                    <a href="#" onclick="confirmLogout(event)">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-leave.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                </div>
            </div>
        </header>
        <div class="container-dashboard">
            <div class="container-heading-crud">
                <a href="profile.php">
                    <img src="../assets/icon/arrow-left.png" alt="" width="40" height="40">
                </a>
                <p>Update Profile</p>
            </div>

            <div class="data-dashboard ">
                <form action="" method="POST" enctype="multipart/form-data" id="projectForm">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="nama" value="<?php echo $user['nama']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $user['username']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="photo_path" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="photo_path" name="photo_path" accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
<?php
}

function userPage()
{
    include "../koneksi.php";

    $user_id = $_SESSION['id_user'];
    $sqlUser = "SELECT * FROM users WHERE id_user = ?";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bind_param("i", $user_id);
    $stmtUser->execute();
    $user = $stmtUser->get_result()->fetch_assoc();

    $sql = "SELECT * FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
?>
    <?php sideBar(); ?>
    <div class="main-content">
        <header>
            <div class="header-content">
                <label for="menu-toggle"><span class="las la-bars"></span></label>
                <div style="display: flex; flex-direction: row; gap: 10px;">
                    <div style="display: flex; flex-direction:flex; justify-content: center; align-items: center; gap: 10px; ">
                        <img src="../assets/icon/icon-user.png" alt="" width="20px" height="20px">
                        <p style="display:flex; justify-content: center; align-items: center; text-align: center; padding-right: 10px; color: #000000"><?php echo $user['nama']; ?></p>
                    </div>
                    <a href="../index.php">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-home.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                    <a href="#" onclick="confirmLogout(event)">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-leave.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                </div>
            </div>
        </header>
        <div class="container-dashboard">
            <p>Data User</p>
            <div class="data-dashboard">
                <a href="createUser.php">
                    <button type="button" class="btn btn-primary">Tambah User</button>
                </a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Username</th>
                            <th scope="col">Level</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result->num_rows  > 0) {
                            $no = 1;
                        ?>
                            <?php while ($row = $result->fetch_assoc()) {

                            ?>
                                <tr>
                                    <td scope="row"><?php echo $no++; ?></td>
                                    <td><img src="<?php echo $row['photo_path']; ?>" alt="Foto" width="80"></td>
                                    <td><?php echo $row['nama']; ?></td>
                                    <td><?php echo $row['username']; ?></td>
                                    <td>
                                        <?php
                                        if ($row['level'] === 1) {
                                            echo 'Admin';
                                        } else if ($row['level'] === 0) {
                                            echo 'Pengunjung';
                                        }
                                        ?>
                                    </td>
                                    <?php
                                    if ($row['username'] === 'Admin Rifki') {
                                    ?>
                                        <td style="display: none;">
                                            <a href="#" onclick="confirmDelete(<?php echo $row['id_user']; ?>)" class="btn btn-danger">Hapus</a>
                                            <a href="updateUser.php?id_user=<?php echo $row['id_user']; ?>" class="btn btn-success">Update</a>
                                        </td>
                                    <?php
                                    } else {
                                    ?>
                                        <td>
                                            <a href="#" onclick="confirmDelete(<?php echo $row['id_user']; ?>)" class="btn btn-danger">Hapus</a>
                                            <a href="updateUser.php?id_user=<?php echo $row['id_user']; ?>" class="btn btn-success">Update</a>
                                        </td>
                                    <?php

                                    }
                                    ?>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="6" style="text-align: center;">Data Project Belum Tersedia</td>
                            </tr>
                        <?php } ?>
                        <!-- <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr> -->
                    </tbody>
                </table>
            </div>

        </div>
    </div>
<?php
}

function createUser()
{
    include "../koneksi.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = htmlspecialchars($_POST['nama'], ENT_QUOTES, 'UTF-8');
        $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
        $level = $_POST['level'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        // Cek apakah username sudah ada
        $check_sql = "SELECT * FROM users WHERE username = ?";
        $check_stmt = $conn->prepare($check_sql);
        $check_stmt->bind_param("s", $username);
        $check_stmt->execute();
        $result = $check_stmt->get_result();

        if ($result->num_rows > 0) {
            // Username sudah ada, tampilkan alert
            echo "
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Username sudah terdaftar!'
                        });
                    });
                </script>
            ";
        } else {
            // // Username belum ada, lakukan proses INSERT
            // $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
            // $stmt = $conn->prepare($sql);
            // $stmt->bind_param("ss", $username, $password);

            // Proses upload file
            $target_dir = "../assets/uploads/";
            $target_file = $target_dir . basename($_FILES["photo_path"]["name"]);
            if (move_uploaded_file($_FILES["photo_path"]["tmp_name"], $target_file)) {
                // Simpan data ke database
                $sql = "INSERT INTO users (username, password, photo_path, level, nama) VALUES (?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssss", $username, $password, $target_file, $level, $nama);

                if ($stmt->execute()) {
                    echo "
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil!',
                                    text: 'User Berhasil Ditambahkan!'
                                }).then(() => {
                                    window.location.href = 'user.php';
                                });
                            });
                        </script>
                    ";
                } else {
                    echo "Gagal menyimpan data: " . $stmt->error;
                }
            } else {
                echo "Gagal mengupload file.";
            }
        }
    }

    $user_id = $_SESSION['id_user'];
    $sqlUser = "SELECT * FROM users WHERE id_user = ?";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bind_param("i", $user_id);
    $stmtUser->execute();
    $user = $stmtUser->get_result()->fetch_assoc();


?>
    <?php sideBar(); ?>
    <div class="main-content">
        <header>
            <div class="header-content">
                <label for="menu-toggle"><span class="las la-bars"></span></label>
                <div style="display: flex; flex-direction: row; gap: 10px;">
                    <div style="display: flex; flex-direction:flex; justify-content: center; align-items: center; gap: 10px; ">
                        <img src="../assets/icon/icon-user.png" alt="" width="20px" height="20px">
                        <p style="display:flex; justify-content: center; align-items: center; text-align: center; padding-right: 10px; color: #000000"><?php echo $user['nama']; ?></p>
                    </div>
                    <a href="../index.php">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-home.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                    <a href="#" onclick="confirmLogout(event)">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-leave.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                </div>
            </div>
        </header>
        <div class="container-dashboard">
            <div class="container-heading-crud">
                <a href="project.php">
                    <img src="../assets/icon/arrow-left.png" alt="" width="40" height="40">
                </a>
                <p>Tambah User</p>
            </div>

            <div class="data-dashboard ">
                <form action="" method="POST" enctype="multipart/form-data" id="projectForm">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="photo_path" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="photo_path" name="photo_path" accept="image/*" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="level">
                            <option value="1">Admin</option>
                            <option value="0" selected>Pengunjung</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
<?php
}

function updateUser()
{
    include "../koneksi.php";

    if(isset($_GET['id_user'])){
        $id_user = $_GET['id_user'];

        $sqlUser = 'SELECT * FROM users WHERE id_user = ?';
        $stmtUser = $conn->prepare($sqlUser);
        $stmtUser->bind_param('i', $id_user);
        $stmtUser->execute();
        $userForUpdate = $stmtUser->get_result()->fetch_assoc();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = htmlspecialchars($_POST['nama'], ENT_QUOTES, 'UTF-8');
            $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
            $level = $_POST['level'];
    
            // Cek apakah username sudah ada
            $check_sql = "SELECT * FROM users WHERE username = ? AND id_user != $id_user";
            $check_stmt = $conn->prepare($check_sql);
            $check_stmt->bind_param("s", $username);
            $check_stmt->execute();
            $result = $check_stmt->get_result();
    
            if ($result->num_rows > 0) {
                // Username sudah ada, tampilkan alert
                echo "
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Username sudah terdaftar!'
                            });
                        });
                    </script>
                ";
            } else {
                // // Username belum ada, lakukan proses INSERT
                // $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
                // $stmt = $conn->prepare($sql);
                // $stmt->bind_param("ss", $username, $password);
    
                // Proses upload file
                $target_dir = "../assets/uploads/";
                $target_file = $target_dir . basename($_FILES["photo_path"]["name"]);
                if (move_uploaded_file($_FILES["photo_path"]["tmp_name"], $target_file)) {
                    // Simpan data ke database
                    $sql = "UPDATE users SET username = ?, photo_path = ?, level = ?, nama = ? WHERE id_user = $id_user";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("ssss", $username, $target_file, $level, $nama);
    
                    if ($stmt->execute()) {
                        echo "
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Berhasil!',
                                        text: 'User Berhasil Diupdate!'
                                    }).then(() => {
                                        window.location.href = 'user.php';
                                    });
                                });
                            </script>
                        ";
                    } else {
                        echo "Gagal menyimpan data: " . $stmt->error;
                    }
                } else {
                    echo "Gagal mengupload file.";
                }
            }
        }    
    }

    
    $user_id = $_SESSION['id_user'];
    $sqlUser = "SELECT * FROM users WHERE id_user = ?";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bind_param("i", $user_id);
    $stmtUser->execute();
    $user = $stmtUser->get_result()->fetch_assoc();


?>
    <?php sideBar(); ?>
    <div class="main-content">
        <header>
            <div class="header-content">
                <label for="menu-toggle"><span class="las la-bars"></span></label>
                <div style="display: flex; flex-direction: row; gap: 10px;">
                    <div style="display: flex; flex-direction:flex; justify-content: center; align-items: center; gap: 10px; ">
                        <img src="../assets/icon/icon-user.png" alt="" width="20px" height="20px">
                        <p style="display:flex; justify-content: center; align-items: center; text-align: center; padding-right: 10px; color: #000000"><?php echo $user['nama']; ?></p>
                    </div>
                    <a href="../index.php">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-home.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                    <a href="#" onclick="confirmLogout(event)">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-leave.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                </div>
            </div>
        </header>
        <div class="container-dashboard">
            <div class="container-heading-crud">
                <a href="user.php">
                    <img src="../assets/icon/arrow-left.png" alt="" width="40" height="40">
                </a>
                <p>Update User</p>
            </div>

            <div class="data-dashboard ">
                <form action="" method="POST" enctype="multipart/form-data" id="projectForm">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $userForUpdate['username']; ?>" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $userForUpdate['nama'];?>" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" value="<?php echo $userForUpdate['password'];?>" name="password" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="photo_path" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="photo_path" name="photo_path" accept="image/*" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="level">
                            <?php 
                                if($userForUpdate['level'] === 1){
                                    ?>
                                        <option value="1" selected>Admin</option>
                                        <option value="0">Pengunjung</option>
                                        <?php
                                } else {
                                    ?>
                                        <option value="1">Admin</option>
                                        <option value="0" selected>Pengunjung</option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
<?php
}

function reviewPage(){
    include "../koneksi.php";

    $user_id = $_SESSION['id_user'];
    $sqlUser = "SELECT * FROM users WHERE id_user = ?";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bind_param("i", $user_id);
    $stmtUser->execute();
    $user = $stmtUser->get_result()->fetch_assoc();

    $sql = "SELECT * FROM reviews WHERE id_user = ?";
    $stmtUser = $conn->prepare($sql);
    $stmtUser->bind_param("i", $user_id);
    $stmtUser->execute();
    $result = $stmtUser->get_result();
?>
    <?php sideBar(); ?>
    <div class="main-content">
        <header>
            <div class="header-content">
                <label for="menu-toggle"><span class="las la-bars"></span></label>
                <div style="display: flex; flex-direction: row; gap: 10px;">
                    <div style="display: flex; flex-direction:flex; justify-content: center; align-items: center; gap: 10px; ">
                        <img src="../assets/icon/icon-user.png" alt="" width="20px" height="20px">
                        <p style="display:flex; justify-content: center; align-items: center; text-align: center; padding-right: 10px; color: #000000"><?php echo $user['nama']; ?></p>
                    </div>
                    <a href="../index.php">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-home.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                    <a href="#" onclick="confirmLogout(event)">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-leave.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                </div>
            </div>
        </header>
        <div class="container-dashboard">
            <p>Data Review Anda</p>
            <div class="data-dashboard">
                <a href="createReview.php">
                    <button type="button" class="btn btn-primary">Tambah Review</button>
                </a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Review</th>
                            <th scope="col">Created</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result->num_rows  > 0) {
                            $no = 1;
                        ?>
                            <?php while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td scope="row"><?php echo $no++; ?></td>
                                    <td width="800" style="text-align: justify;"><?php echo $row['review_text']; ?></td>
                                    <td><?php echo date('Y-F-l',strtotime($row['created_at'])); ?></td>
                                    <td>
                                        <a href="#" onclick="confirmDelete(<?php echo $row['id_reviews']; ?>)" class="btn btn-danger">Hapus</a>
                                        <a href="updateReview.php?id_reviews=<?php echo $row['id_reviews']; ?>" class="btn btn-success">Update</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="2" style="text-align: center;">Data Review Belum Tersedia</td>
                            </tr>
                        <?php } ?>
                        <!-- <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr> -->
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <?php
}

function createReviewPage(){
    $id_user = $_SESSION['id_user'];

    include "../koneksi.php";

    if (isset($_POST['review_text'])) {
        $review_user = htmlspecialchars($_POST['review_text'], ENT_QUOTES, 'UTF-8');

        $sql = "INSERT INTO reviews (id_user, review_text) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $id_user, $review_user);

        // Eksekusi query
        if ($stmt->execute()) {
            echo "
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: 'Review Berhasil Ditambahkan!'
                    }).then(() => {
                        window.location.href = 'reviews.php';
                    });
                });
            </script>
        ";
        } else {
            ?>
                    <script>
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Something went wrong!",
                        });
                    </script>
            <?php
        }
    }


    $user_id = $_SESSION['id_user'];
    $sqlUser = "SELECT * FROM users WHERE id_user = ?";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bind_param("i", $user_id);
    $stmtUser->execute();
    $user = $stmtUser->get_result()->fetch_assoc();

    ?>
    <?php sideBar(); ?>
    <div class="main-content">
        <header>
            <div class="header-content">
                <label for="menu-toggle"><span class="las la-bars"></span></label>
                <div style="display: flex; flex-direction: row; gap: 10px;">
                    <div style="display: flex; flex-direction:flex; justify-content: center; align-items: center; gap: 10px; ">
                        <img src="../assets/icon/icon-user.png" alt="" width="20px" height="20px">
                        <p style="display:flex; justify-content: center; align-items: center; text-align: center; padding-right: 10px; color: #000000"><?php echo $user['nama']; ?></p>
                    </div>
                    <a href="../index.php">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-home.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                    <a href="#" onclick="confirmLogout(event)">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-leave.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                </div>
            </div>
        </header>
        <div class="container-dashboard">
            <div class="container-heading-crud">
                <p>Beri Review Anda</p>
            </div>

            <div class="data-dashboard ">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="review_text" class="form-label">Review</label>
                        <textarea type="text" class="form-control" id="exampleInputEmail1" name="review_text" style="resize: none; height: 200px;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
<?php
}

function updateReview(){
    $id_user = $_SESSION['id_user'];

    include "../koneksi.php";

    if (isset($_GET['id_reviews']) && is_numeric($_GET['id_reviews'])) {
        $id_reviews = $_GET['id_reviews'];

        $sqlSelectReview = "SELECT * FROM reviews WHERE id_reviews = ?";

        $stmtReview = $conn->prepare($sqlSelectReview);

        
        $stmtReview->bind_param("i", $id_reviews);

        $stmtReview->execute();
        $resultReview = $stmtReview->get_result();
       
        if ($resultReview->num_rows > 0) {
            $rowReview = $resultReview->fetch_assoc();
        } else {
            echo "Data tidak ditemukan.";
            exit();
        }

        if(isset($_POST["review_text"])){
            $review_text = htmlspecialchars($_POST["review_text"], ENT_QUOTES, 'UTF-8');

            $sqlInsertReview = "UPDATE reviews SET review_text = ? WHERE id_reviews = ?";
            $stmtInsertReview = $conn->prepare($sqlInsertReview);
            $stmtInsertReview->bind_param("si", $review_text, $id_reviews);
            
            if($stmtInsertReview->execute()) {
                echo "
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil!',
                                text: 'Review Berhasil Diupdate!'
                            }).then(() => {
                                window.location.href = 'reviews.php';
                            });
                        });
                    </script>
                ";
            } else {
                echo "Gagal di update";
            }
        }

    }


    $user_id = $_SESSION['id_user'];
    $sqlUser = "SELECT * FROM users WHERE id_user = ?";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bind_param("i", $user_id);
    $stmtUser->execute();
    $user = $stmtUser->get_result()->fetch_assoc();

    ?>
    <?php sideBar(); ?>
    <div class="main-content">
        <header>
            <div class="header-content">
                <label for="menu-toggle"><span class="las la-bars"></span></label>
                <div style="display: flex; flex-direction: row; gap: 10px;">
                    <div style="display: flex; flex-direction:flex; justify-content: center; align-items: center; gap: 10px; ">
                        <img src="../assets/icon/icon-user.png" alt="" width="20px" height="20px">
                        <p style="display:flex; justify-content: center; align-items: center; text-align: center; padding-right: 10px; color: #000000"><?php echo $user['nama']; ?></p>
                    </div>
                    <a href="../index.php">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-home.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                    <a href="#" onclick="confirmLogout(event)">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-leave.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                </div>
            </div>
        </header>
        <div class="container-dashboard">
            <div class="container-heading-crud">
                <a href="reviews.php">
                    <img src="../assets/icon/arrow-left.png" alt="" width="40" height="40">
                </a>
                <p>Update Review</p>
            </div>

            <div class="data-dashboard ">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="review_text" class="form-label">Review</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="review_text" style="resize: none; text-align:start;" value="<?php echo $rowReview['review_text']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
<?php
}


function reviewAdminPage(){
    include "../koneksi.php";

    $user_id = $_SESSION['id_user'];
    $sqlUser = "SELECT * FROM users WHERE id_user = ?";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bind_param("i", $user_id);
    $stmtUser->execute();
    $user = $stmtUser->get_result()->fetch_assoc();

    $sql = "SELECT reviews.*, users.nama AS nama_user
    FROM reviews
    JOIN users ON reviews.id_user = users.id_user";
    $stmtUser = $conn->prepare($sql);
    $stmtUser->execute();
    $result = $stmtUser->get_result();
?>
    <?php sideBar(); ?>
    <div class="main-content">
        <header>
            <div class="header-content">
                <label for="menu-toggle"><span class="las la-bars"></span></label>
                <div style="display: flex; flex-direction: row; gap: 10px;">
                    <div style="display: flex; flex-direction:flex; justify-content: center; align-items: center; gap: 10px; ">
                        <img src="../assets/icon/icon-user.png" alt="" width="20px" height="20px">
                        <p style="display:flex; justify-content: center; align-items: center; text-align: center; padding-right: 10px; color: #000000"><?php echo $user['nama']; ?></p>
                    </div>
                    <a href="../index.php">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-home.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                    <a href="#" onclick="confirmLogout(event)">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-leave.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                </div>
            </div>
        </header>
        <div class="container-dashboard">
            <p>Data Review Pengunjung</p>
            <div class="data-dashboard">
                <a href="createReviewAdmin.php">
                    <button type="button" class="btn btn-primary">Tambah Review</button>
                </a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Review</th>
                            <th scope="col">Created</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result->num_rows  > 0) {
                            $no = 1;
                        ?>
                            <?php while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td scope="row"><?php echo $no++; ?></td>
                                    <td scope="row"><?php echo $row['nama_user']; ?></td>
                                    <td width="600" style="text-align: justify;"><?php echo $row['review_text']; ?></td>
                                    <td><?php echo date('Y-F-l',strtotime($row['created_at'])); ?></td>
                                    <td>
                                        <a href="#" onclick="confirmDelete(<?php echo $row['id_reviews']; ?>)" class="btn btn-danger">Hapus</a>
                                        <a href="updateReviewAdmin.php?id_reviews=<?php echo $row['id_reviews']; ?>" class="btn btn-success">Update</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="2" style="text-align: center;">Data Review Belum Tersedia</td>
                            </tr>
                        <?php } ?>
                        <!-- <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr> -->
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <?php
}

function createReviewAdminPage(){
    $id_user = $_SESSION['id_user'];

    include "../koneksi.php";

    if (isset($_POST['review_text'])) {
        $review_user = htmlspecialchars($_POST['review_text'], ENT_QUOTES, 'UTF-8');

        $sql = "INSERT INTO reviews (id_user, review_text) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $id_user, $review_user);

        // Eksekusi query
        if ($stmt->execute()) {
            echo "
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: 'Review Berhasil Ditambahkan!'
                    }).then(() => {
                        window.location.href = 'review_admin.php';
                    });
                });
            </script>
        ";
        } else {
            ?>
                    <script>
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Something went wrong!",
                        });
                    </script>
            <?php
        }
    }


    $user_id = $_SESSION['id_user'];
    $sqlUser = "SELECT * FROM users WHERE id_user = ?";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bind_param("i", $user_id);
    $stmtUser->execute();
    $user = $stmtUser->get_result()->fetch_assoc();

    ?>
    <?php sideBar(); ?>
    <div class="main-content">
        <header>
            <div class="header-content">
                <label for="menu-toggle"><span class="las la-bars"></span></label>
                <div style="display: flex; flex-direction: row; gap: 10px;">
                    <div style="display: flex; flex-direction:flex; justify-content: center; align-items: center; gap: 10px; ">
                        <img src="../assets/icon/icon-user.png" alt="" width="20px" height="20px">
                        <p style="display:flex; justify-content: center; align-items: center; text-align: center; padding-right: 10px; color: #000000"><?php echo $user['nama']; ?></p>
                    </div>
                    <a href="../index.php">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-home.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                    <a href="#" onclick="confirmLogout(event)">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-leave.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                </div>
            </div>
        </header>
        <div class="container-dashboard">
            <div class="container-heading-crud">
                <a href="review_admin.php">
                    <img src="../assets/icon/arrow-left.png" alt="" width="40" height="40">
                </a>
                <p>Beri Review Anda</p>
            </div>

            <div class="data-dashboard ">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="review_text" class="form-label">Review</label>
                        <textarea type="text" class="form-control" id="exampleInputEmail1" name="review_text" style="resize: none; height: 200px;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
<?php
}

function updateReviewAdmin(){
    $id_user = $_SESSION['id_user'];

    include "../koneksi.php";

    if (isset($_GET['id_reviews']) && is_numeric($_GET['id_reviews'])) {
        $id_reviews = $_GET['id_reviews'];

        $sqlSelectReview = "SELECT * FROM reviews WHERE id_reviews = ?";

        $stmtReview = $conn->prepare($sqlSelectReview);

        
        $stmtReview->bind_param("i", $id_reviews);

        $stmtReview->execute();
        $resultReview = $stmtReview->get_result();
       
        if ($resultReview->num_rows > 0) {
            $rowReview = $resultReview->fetch_assoc();
        } else {
            echo "Data tidak ditemukan.";
            exit();
        }

        if(isset($_POST["review_text"])){
            $review_text = htmlspecialchars($_POST["review_text"], ENT_QUOTES, 'UTF-8');

            $sqlInsertReview = "UPDATE reviews SET review_text = ? WHERE id_reviews = ?";
            $stmtInsertReview = $conn->prepare($sqlInsertReview);
            $stmtInsertReview->bind_param("si", $review_text, $id_reviews);
            
            if($stmtInsertReview->execute()) {
                echo "
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil!',
                                text: 'Review Berhasil Diupdate!'
                            }).then(() => {
                                window.location.href = 'review_admin.php';
                            });
                        });
                    </script>
                ";
            } else {
                echo "Gagal di update";
            }
        }

    }


    $user_id = $_SESSION['id_user'];
    $sqlUser = "SELECT * FROM users WHERE id_user = ?";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bind_param("i", $user_id);
    $stmtUser->execute();
    $user = $stmtUser->get_result()->fetch_assoc();

    ?>
    <?php sideBar(); ?>
    <div class="main-content">
        <header>
            <div class="header-content">
                <label for="menu-toggle"><span class="las la-bars"></span></label>
                <div style="display: flex; flex-direction: row; gap: 10px;">
                    <div style="display: flex; flex-direction:flex; justify-content: center; align-items: center; gap: 10px; ">
                        <img src="../assets/icon/icon-user.png" alt="" width="20px" height="20px">
                        <p style="display:flex; justify-content: center; align-items: center; text-align: center; padding-right: 10px; color: #000000"><?php echo $user['nama']; ?></p>
                    </div>
                    <a href="../index.php">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-home.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                    <a href="#" onclick="confirmLogout(event)">
                        <div style="display: flex; flex-direction: row; gap: 10px; justify-content: center; align-items: center; ">
                            <img src="../assets/icon/icon-leave.png" alt="" width="30px" height="30px">
                        </div>
                    </a>
                </div>
            </div>
        </header>
        <div class="container-dashboard">
            <div class="container-heading-crud">
                <a href="review_admin.php">
                    <img src="../assets/icon/arrow-left.png" alt="" width="40" height="40">
                </a>
                <p>Update Review</p>
            </div>

            <div class="data-dashboard ">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="review_text" class="form-label">Review</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="review_text" style="resize: none; text-align:start;" value="<?php echo $rowReview['review_text']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
<?php
}
?>