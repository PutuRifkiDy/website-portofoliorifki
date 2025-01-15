<?php
function iconNavbar()
{
?>
    <svg width="300" height="46" viewBox="0 0 300 46" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="0.245728" width="46" height="46" rx="23" fill="#0077FF" />

        <!-- Teks Rifki.Dev di dalam lingkaran -->
        <text x="23" y="30" font-family="Arial" font-size="20" font-weight="bold" fill="white" text-anchor="middle">RD</text>

        <!-- Teks Rifs di luar lingkaran -->
        <text x="60" y="30" font-family="Arial" font-size="20" font-weight="bold" fill="#0077FF">Rifki.Dev</text>
    </svg>
<?php
}

function iconFooter()
{
?>
    <svg width="300" height="46" viewBox="0 0 300 46" fill="none" xmlns="http://www.w3.org/2000/svg">
        <!-- Lingkaran oranye -->
        <rect x="0.245728" width="46" height="46" rx="23" fill="white" />

        <!-- Teks Rifki.Dev di dalam lingkaran -->
        <text x="23" y="30" font-family="Arial" font-size="20" font-weight="bold" fill="#0077FF" text-anchor="middle">RD</text>

        <!-- Teks Rifs di luar lingkaran -->
        <text x="60" y="30" font-family="Arial" font-size="20" font-weight="bold" fill="white">Rifki.Dev</text>
    </svg>
<?php
}

function navbar()
{
    include "koneksi.php";
    session_start();
    $user_id = $_SESSION['id_user'];
    $sqlUser = "SELECT * FROM users WHERE id_user = ?";
    $stmtUser = $conn->prepare($sqlUser);
    $stmtUser->bind_param("i", $user_id);
    $stmtUser->execute();
    $user = $stmtUser->get_result()->fetch_assoc();
?>
    <div class="container-navbar">
        <div class="wrapper-navbar">
            <a href="index.php">
                <div class="icon-navbar">
                    <?php iconNavbar(); ?>
                </div>
            </a>

            <!-- Icon menu untuk tampilan mobile -->

            <div class="menu-icon">
                ☰
            </div>
            <div class="navbar-route">

                <div class="link-nav">
                    <a href="index.php#home">
                        Home
                    </a>
                    <a href="index.php#aboutMe">
                        About Me
                    </a>
                    <a href="index.php#ourProject">
                        Project
                    </a>
                    <a href="index.php#services">
                        Services
                    </a>
                    <a href="index.php#contactMe">
                        Contact Me
                    </a>
                </div>

                <?php if (!isset($_SESSION['level'])) { ?>
                    <a href="login.php" style="text-decoration: none;">
                        <button type="button">
                            Login
                        </button>
                    </a>
                <?php } else { ?>
                    <button class="after-login">
                        <?php echo $user['nama']; ?> 
                        <img src="assets/icon/drop-down.png" alt="" width="15" height="15">
                    </button>
                    <ul class="dropdown">
                        <li>
                            <a href="admin/dashboard.php">
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="admin/reviews.php">
                                Reviews
                            </a>
                        </li>
                    </ul>
                <?php } ?>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </div>
<?php
}

function iconDownloadCV()
{
?>
    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_304_31)">
            <path d="M10.6309 1.125C10.4011 1.12506 10.1807 1.21638 10.0181 1.3789C9.85563 1.54142 9.7643 1.76183 9.76425 1.99167V11.8788L6.44987 8.56438C6.36938 8.4839 6.27383 8.42007 6.16867 8.37652C6.06351 8.33297 5.9508 8.31055 5.83698 8.31057C5.60711 8.31059 5.38667 8.40192 5.22414 8.56448C5.06161 8.72703 4.97031 8.9475 4.97034 9.17737C4.97036 9.40723 5.06169 9.62768 5.22425 9.79021L10.018 14.5833C10.1806 14.7458 10.401 14.8371 10.6309 14.8371C10.8608 14.8371 11.0812 14.7458 11.2438 14.5833L16.0376 9.78938C16.2002 9.62684 16.2915 9.4064 16.2915 9.17653C16.2915 8.94667 16.2002 8.7262 16.0377 8.56364C15.8752 8.40109 15.6547 8.30975 15.4248 8.30973C15.1949 8.30972 14.9745 8.40101 14.8119 8.56354L11.4976 11.8788V1.99167C11.4975 1.76183 11.4062 1.54142 11.2437 1.3789C11.0812 1.21638 10.8607 1.12506 10.6309 1.125Z" fill="#0077FF" />
            <path d="M2.12173 12.5845C1.89188 12.5845 1.67144 12.6758 1.50891 12.8382C1.34637 13.0008 1.25507 13.2213 1.25507 13.4511V16.3069C1.25611 17.2529 1.63238 18.1599 2.3013 18.8288C2.97023 19.4978 3.87719 19.874 4.82319 19.875H16.437C17.383 19.874 18.29 19.4978 18.9588 18.8288C19.6277 18.1599 20.0041 17.2529 20.0051 16.3069V13.4511C20.0051 13.3373 19.9826 13.2246 19.9391 13.1195C19.8955 13.0143 19.8317 12.9188 19.7512 12.8382C19.6707 12.7578 19.5752 12.694 19.4701 12.6505C19.365 12.6069 19.2522 12.5845 19.1384 12.5845C19.0246 12.5845 18.9118 12.6069 18.8067 12.6505C18.7016 12.694 18.6061 12.7578 18.5256 12.8382C18.4451 12.9188 18.3813 13.0143 18.3377 13.1195C18.2942 13.2246 18.2717 13.3373 18.2717 13.4511V16.3069C18.2712 16.7934 18.0777 17.2598 17.7337 17.6037C17.3897 17.9477 16.9234 18.1411 16.437 18.1417H4.82319C4.33674 18.1411 3.87038 17.9477 3.52641 17.6037C3.18243 17.2598 2.98895 16.7934 2.9884 16.3069V13.4511C2.98842 13.3373 2.96603 13.2246 2.92249 13.1195C2.87894 13.0143 2.8151 12.9187 2.73462 12.8382C2.65413 12.7577 2.55859 12.6939 2.45342 12.6504C2.34827 12.6068 2.23555 12.5845 2.12173 12.5845Z" fill="#0077FF" />
        </g>
        <defs>
            <clipPath id="clip0_304_31">
                <rect width="20" height="20" fill="white" transform="translate(0.630066 0.5)" />
            </clipPath>
        </defs>
    </svg>
<?php
}

function homePage()
{
?>
    <div class="container-homePage" id="home">
        <div class="wrapper-homePage">

            <div class="deskripsi-homePage" data-aos="fade-left" data-aos-duration="1000">
                <p class="judul">
                    Welcome to my Portofolio
                </p>

                <div class="deskripsi">
                    <h1>
                        Hi I’m
                    </h1>
                    <span>Putu Rifki</span>
                    <h1>
                        Web Developer
                    </h1>
                </div>

                <p>
                    Collaborating with highly skilled individuals, our agency delivers top-quality services.
                </p>

                <div class="button-homePage">
                    <a href="index.php#contactMe">
                        <button class="hire">
                            Hire me!
                        </button>
                    </a>
                    <a href="assets/MY-CV.pdf" download>
                        <button class="download-cv">
                            Download CV
                            <?php iconDownloadCV(); ?>
                        </button>
                    </a>
                </div>
            </div>

            <div class="img-homePage">
                <div class="home-img">
                    <img src="assets/Foto_terbaru-removebg-preview.png" alt="Foto Profil">
                </div>

                <!-- Label Teknologi dengan Ikon -->
                <div class="label label-1">
                    <img src="https://cdn.simpleicons.org/nextdotjs/black" alt="NextJS Icon" class="icon-tool">
                    NextJS
                </div>
                <div class="label label-2">
                    <img src="https://cdn.simpleicons.org/tailwindcss/38BDF8" alt="Tailwind CSS Icon" class="icon-tool">
                    Tailwind CSS
                </div>
                <div class="label label-3">
                    <img src="https://cdn.simpleicons.org/react/61DAFB" alt="ReactJS Icon" class="icon-tool">
                    ReactJS
                </div>
                <div class="label label-4">
                    <img src="https://cdn.simpleicons.org/javascript/F7DF1E" alt="JavaScript Icon" class="icon-tool">
                    JavaScript
                </div>
                <div class="label label-5">
                    <img src="https://cdn.simpleicons.org/php/777BB4" alt="GraphQL Icon" class="icon-tool">
                    PHP Native
                </div>
                <div class="label label-6">
                    <img src="https://cdn.simpleicons.org/figma/F24E1E" alt="Figma Icon" class="icon-tool">
                    Figma
                </div>
                <div class="label label-7">
                    <img src="https://cdn.simpleicons.org/laravel/F24E1E" alt="Laravel Icon" class="icon-tool">
                    Laravel
                </div>
            </div>

        </div>
    </div>
<?php
}

function aboutMe()
{
?>
    <div class="container-aboutMe" id="aboutMe">
        <div class="wrapper-aboutMe">
            <div class="aboutMe-img">
                <img src="assets/Foto_terbaru-removebg-preview.png" alt="">
            </div>
            <div class="aboutMe-contain" data-aos="fade-right" data-aos-duration="1000">
                <div class="aboutMe-contain-deskripsi">
                    <p class="heading">ABOUT ME</p>
                    <h1>
                        <span>2 Year’s Experience</span>
                        on Web Design
                    </h1>
                    <p>
                        Hello there! I'm <span>Putu Rifki</span>. I specialize in web design and development, and I'm deeply passionate and committed to my craft. With <span>2 years</span> of experience as a professional graphic designer
                    </p>
                </div>

                <div class="aboutMe-contain-skill">
                    <div class="aboutMe-category-nav">
                        <button id="btn-main-skills" onclick="menampilkanContentAbout('main-skill')">
                            Main Skills
                        </button>
                        <button id="btn-awards" onclick="menampilkanContentAbout('rewards')">
                            Awards
                        </button>
                        <button id="btn-education" onclick="menampilkanContentAbout('education')">
                            Education
                        </button>
                    </div>
                    <div class="aboutMe-content-nav">
                        <div id="main-skill" data-aos="fade-up" data-aos-duration="1000">
                            <!-- Skill Progress Bars -->
                            <div class="skills">
                                <div class="skill">
                                    <p>
                                        User Experience Design - UI/UX
                                    </p>
                                    <div class="progress-bar">
                                        <div class="progress" style="width: 30%;"></div>
                                    </div>
                                </div>
                                <div class="skill">
                                    <p>
                                        Web & User Interface Design - Development
                                    </p>
                                    <div class="progress-bar">
                                        <div class="progress" style="width: 90%;"></div>
                                    </div>
                                </div>
                                <div class="skill">
                                    <p>
                                        App Design - Animation
                                    </p>
                                    <div class="progress-bar">
                                        <div class="progress" style="width: 70%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="rewards" class="container-rewards" data-aos="fade-up" data-aos-duration="1000">
                            <ul>
                                <li>
                                    <img src="assets/icon/juara-favorit.png" alt="">
                                    <p>Juara Favorit Ide Bisnis</p>
                                </li>
                                <li>
                                    <img src="assets/icon/juara-1-icon.png" alt="">
                                    <p>Juara 1 Guntur Cup Bali</p>
                                </li>
                                <li>
                                    <img src="assets/icon/juara-3-icon.png" alt="">
                                    <p>Juara 3 Porjar Denpasar Barat</p>
                                </li>
                            </ul>
                        </div>
                        <div class="container-education" id="education" data-aos="fade-up" data-aos-duration="1000">
                            <div class="container-img">
                                <img src="assets/icon/udayana-icon.png" class="beda-ukuran" alt="">
                                <img src="assets/icon/logo-ti.png" alt="">
                            </div>
                            <p>
                                I'm studying <span>Information Technology</span> at <span>Udayana University</span>, gaining a strong foundation in computer science, software development, data structures, algorithms, and modern technologies for innovative problem-solving.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}

function iconArrowLeft()
{
?>
    <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.792893 7.29289C0.402369 7.68342 0.402369 8.31658 0.792892 8.7071L7.15685 15.0711C7.54738 15.4616 8.18054 15.4616 8.57107 15.0711C8.96159 14.6805 8.96159 14.0474 8.57107 13.6569L2.91421 8L8.57107 2.34314C8.96159 1.95262 8.96159 1.31946 8.57107 0.928931C8.18054 0.538406 7.54738 0.538406 7.15686 0.92893L0.792893 7.29289ZM26.5 7L14 7L14 9L26.5 9L26.5 7ZM14 7L1.5 7L1.5 9L14 9L14 7Z" fill="#0077FF" />
    </svg>
<?php
}

function iconArrowRight()
{
?>
    <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M26.2071 8.70711C26.5976 8.31658 26.5976 7.68342 26.2071 7.29289L19.8431 0.928932C19.4526 0.538408 18.8195 0.538408 18.4289 0.928932C18.0384 1.31946 18.0384 1.95262 18.4289 2.34315L24.0858 8L18.4289 13.6569C18.0384 14.0474 18.0384 14.6805 18.4289 15.0711C18.8195 15.4616 19.4526 15.4616 19.8431 15.0711L26.2071 8.70711ZM0.5 9H13V7H0.5V9ZM13 9H25.5V7H13V9Z" fill="#0077FF" />
    </svg>
<?php
}

function iconDesignServices()
{
?>
    <svg width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M69.2603 6.31401C66.7205 3.77427 62.5491 3.96089 60.2463 6.71728L49.8451 19.167L56.4075 25.7294L68.8572 15.328C71.6132 13.0251 71.7998 8.8536 69.2603 6.31401Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M73.9028 27.605V60.7532C73.9028 66.1243 69.5491 70.4796 64.1779 70.4796H55.1842C60.5554 70.4796 64.9091 66.1243 64.9091 60.7532V27.605H73.9028Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M13.0084 22.448C14.6244 22.448 15.9345 21.138 15.9345 19.5219C15.9345 17.9057 14.6244 16.5957 13.0084 16.5957C11.3923 16.5957 10.0822 17.9057 10.0822 19.5219C10.0822 21.138 11.3923 22.448 13.0084 22.448Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M23.3431 22.448C24.9591 22.448 26.2693 21.138 26.2693 19.5219C26.2693 17.9057 24.9591 16.5957 23.3431 16.5957C21.727 16.5957 20.4169 17.9057 20.4169 19.5219C20.4169 21.138 21.727 22.448 23.3431 22.448Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M33.6779 22.448C35.2938 22.448 36.604 21.138 36.604 19.5219C36.604 17.9057 35.2938 16.5957 33.6779 16.5957C32.0617 16.5957 30.7516 17.9057 30.7516 19.5219C30.7516 21.138 32.0617 22.448 33.6779 22.448Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M49.8453 19.1667L56.2503 11.5004C55.8996 11.4622 55.5438 11.4409 55.1828 11.4409H10.825C5.45391 11.4409 1.09863 15.7947 1.09863 21.1673V27.6044H37.8528C40.2049 24.7458 40.8173 21.0068 49.8453 19.1667Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M56.4089 25.7281C56.2788 26.3797 56.1131 27.0044 55.9166 27.6034H64.9091V21.1663C64.9091 20.3709 64.8115 19.5986 64.6314 18.8586L56.4089 25.7281Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M70.2859 13.6003C69.9313 14.2398 69.4549 14.8272 68.8571 15.3266L64.63 18.8584C64.81 19.5984 64.9076 20.3706 64.9076 21.166V27.6032H73.9013V21.166C73.9013 18.1091 72.4905 15.3833 70.2859 13.6003Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M55.9151 27.605C53.343 35.448 45.3297 38.6858 38.1957 34.7311C35.821 33.4146 35.3606 30.179 37.272 28.2506C37.4792 28.0415 37.6711 27.8258 37.8528 27.605H1.09863V60.7532C1.09863 66.1243 5.45391 70.4796 10.825 70.4796H55.1828C60.554 70.4796 64.9078 66.1243 64.9078 60.7532V27.605H55.9151Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M49.8459 19.167C40.1205 21.1492 40.1619 25.3352 37.2728 28.2501C35.3615 30.1787 35.8217 33.4141 38.1963 34.7307C45.8752 38.9876 54.574 34.9123 56.4081 25.7294L49.8459 19.167Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M24.914 41.6597H13.8416C11.7654 41.6597 10.0822 43.3429 10.0822 45.4192V56.4916C10.0822 58.5678 11.7654 60.251 13.8416 60.251H24.914C26.9903 60.251 28.6735 58.5678 28.6735 56.4916V45.4192C28.6735 43.3429 26.9903 41.6597 24.914 41.6597Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M53.4018 42.2483H37.5253C35.8654 42.2483 34.5198 43.5939 34.5198 45.2538C34.5198 46.9138 35.8654 48.2594 37.5253 48.2594H53.4019C55.0619 48.2594 56.4075 46.9138 56.4075 45.2538C56.4075 43.5939 55.0618 42.2483 53.4018 42.2483Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M53.4018 53.6514H37.5253C35.8654 53.6514 34.5198 54.997 34.5198 56.6569C34.5198 58.3169 35.8654 59.6625 37.5253 59.6625H53.4019C55.0619 59.6625 56.4075 58.3169 56.4075 56.6569C56.4075 54.9971 55.0618 53.6514 53.4018 53.6514Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
<?php
}

function services()
{
?>
    <div class="container-services" id="services">
        <div class="heading-services" data-aos="fade-up" data-aos-duration="1000">
            <p class="heading">SERVICES</p>
            <h1>Exploring My Design <span>Skills</span></h1>
            <p>
                We transform your ideas into a distinctive web project that both inspires you and captivates your customers
            </p>
        </div>
        <div class="container-button-services" data-aos="fade-up" data-aos-duration="1000">
            <button onclick="geserCard('kiri')">
                <?php iconArrowLeft(); ?>
            </button>
            <button onclick="geserCard('kanan')">
                <?php iconArrowRight(); ?>
            </button>
        </div>
        <div class="wrapper-services">
            <div class="contain-services" data-aos="fade-right" data-aos-duration="1000">
                <div class="card">
                    <div class="icon-services">
                        <?php iconDesignServices(); ?>
                    </div>
                    <div class="deskripsi-services">
                        <h4>
                            Website / App Design UX / UI Design
                        </h4>
                        <p>
                            Creating Engaging Digital Experiences for Websites and Apps through UX/UI Design
                        </p>
                        <a href="https://youtu.be/k7cbBb2Ju5E?feature=shared">
                            <div class="learn-more-services">
                                <p>
                                    Learn more
                                </p>
                                <?php iconArrowRight(); ?>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="icon-services">
                        <?php iconDesignServices(); ?>
                    </div>
                    <div class="deskripsi-services">
                        <h4>
                            Strategic Marketing and Creative Content
                        </h4>
                        <p>
                            Elevating Brands and Engagement through Strategic Marketing and Creative Content
                        </p>
                        <a href="https://youtu.be/k7cbBb2Ju5E?feature=shared">
                            <div class="learn-more-services">
                                <p>
                                    Learn more
                                </p>
                                <?php iconArrowRight(); ?>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card">
                    <div class="icon-services">
                        <?php iconDesignServices(); ?>
                    </div>
                    <div class="deskripsi-services">
                        <h4>
                            Multivendor eCommerce Website Solutions
                        </h4>
                        <p>
                            Unlocking the World of Multivendor eCommerce Websites
                        </p>
                        <a href="https://youtu.be/k7cbBb2Ju5E?feature=shared">
                            <div class="learn-more-services">
                                <p>
                                    Learn more
                                </p>
                                <?php iconArrowRight(); ?>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card" data-aos="fade-right" data-aos-duration="1000">
                    <div class="icon-services">
                        <?php iconDesignServices(); ?>
                    </div>
                    <div class="deskripsi-services">
                        <h4>
                            Multivendor eCommerce Website Solutions
                        </h4>
                        <p>
                            Unlocking the World of Multivendor eCommerce Websites
                        </p>
                        <a href="https://youtu.be/k7cbBb2Ju5E?feature=shared">
                            <div class="learn-more-services">
                                <p>
                                    Learn more
                                </p>
                                <?php iconArrowRight(); ?>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}


function ourMileStones()
{
?>
    <div class="container-mileStones" id="mileStones">
        <div class="wrapper-mileStones">
            <div class="heading-mileStones" data-aos="fade-up" data-aos-duration="1000">
                <p>
                    OUR MILESTONES
                </p>
                <h1>
                    What sets our studio apart for your projects?
                </h1>
            </div>
            <div class="container-card-mileStones" data-aos="fade-right" data-aos-duration="600">
                <div class="card-mileStones" onmouseover="mouseOverMileStones(this)" onmouseout="mouseOutMileStones(this)">
                    <h1>
                        8300+
                    </h1>
                    <p>
                        Figma ipsum component variant main layer. Hand.
                    </p>
                </div>
                <div class="card-mileStones" onmouseover="mouseOverMileStones(this)" onmouseout="mouseOutMileStones(this)">
                    <h1>
                        100%
                    </h1>
                    <p>
                        Figma ipsum component variant main layer. Union.
                    </p>
                </div>
                <div class="card-mileStones" onmouseover="mouseOverMileStones(this)" onmouseout="mouseOutMileStones(this)">
                    <h1>
                        3.5K
                    </h1>
                    <p>
                        Figma ipsum component variant main layer.
                    </p>
                </div>
                <div class="card-mileStones" onmouseover="mouseOverMileStones(this)" onmouseout="mouseOutMileStones(this)">
                    <h1>
                        240+
                    </h1>
                    <p>
                        Figma ipsum component variant main layer.
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php
}

function ourProject()
{
    include "koneksi.php";
    $sql = "SELECT project.*, kategori.nama AS nama_kategori
        FROM project
        JOIN kategori ON project.id_kategori = kategori.id_kategori";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();



?>
    <div class="container-ourProject" id="ourProject">
        <div class="container-ourProject-heading" data-aos="fade-up" data-aos-duration="1000">
            <p>
                OUR PROJECTS
            </p>
            <h1>
                Presenting My Design Portfolio and Case Studies
            </h1>
        </div>
        <div class="container-ourProject-nav" data-aos="fade-up" data-aos-duration="1000">
            <button id="btn-all" onclick="filterCard('all')" class="active">
                All
            </button>
            <button id="btn-uiux" onclick="filterCard('UI/UX Design')">
                UI/UX Design
            </button>
            <button id="btn-web" onclick="filterCard('Web Development')">
                Web Development
            </button>
            <button id="btn-api" onclick="filterCard('API')">
                API
            </button>
        </div>
        <div class="container-card-ourProject" data-aos="fade-right" data-aos-duration="1000">
            <?php while ($row = $result->fetch_assoc()) {
                $photo_path = $row["photo_path"]; // Jalur yang diambil dari database
                $adjusted_path = str_replace("../assets/uploads", "assets/uploads", $photo_path);
            ?>
                <div class="card-ourProject" data-kategori="<?php echo $row["nama_kategori"]; ?>">
                    <div class="container-img-ourProject">
                        <img src="<?php echo htmlspecialchars($adjusted_path); ?>" alt="">
                    </div>
                    <div class="deskripsi-ourProject">
                        <h5>
                            <?php echo $row["nama_kegiatan"]; ?>
                        </h5>
                        <p>
                            <?php echo $row["deskripsi"]; ?>
                        </p>
                    </div>
                    <div class="container-seeMore-ourProject">
                        <div class="wrapper-seeMore-ourProject">
                            <div class="container-seeMore-desc">
                                <h5>
                                    <?php echo $row["nama_kategori"]; ?>
                                </h5>
                                <p><?php echo $row["nama_kegiatan"]; ?></p>
                            </div>

                            <a href="detail-project.php?id_project=<?php echo $row["id_project"]; ?>">
                                See More
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php
}


function iconStar()
{
?>
    <svg width="27" height="25" viewBox="0 0 27 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M11.9259 0.978455C12.5698 -0.326145 14.4301 -0.326158 15.074 0.978455L18.1399 7.19047L24.9952 8.18661C26.4349 8.39582 27.0098 10.1651 25.968 11.1806L21.0074 16.0159L22.1785 22.8437C22.4243 24.2776 20.9193 25.371 19.6316 24.694L13.5 21.4704L7.36836 24.694C6.08065 25.371 4.57561 24.2776 4.82155 22.8437L5.99259 16.0159L1.03199 11.1806C-0.00979716 10.1651 0.565076 8.39582 2.00479 8.18661L8.86017 7.19047L11.9259 0.978455Z" fill="#FFB400" />
    </svg>
<?php
}

function  testiMoni()
{
    $dataReview = [
        [
            "nama" => "Putu Rifki Dirkayuda",
            "pekerjaan" => "Project Manager",
            "review" => "Pengalaman kerja sama yang luar biasa! Tim bekerja dengan sangat profesional dan selalu memberikan solusi tepat waktu. Saya sangat puas dengan hasil yang diberikan.",
            "gambar" => "puturifki.png"
        ],
        [
            "nama" => "Nyoman Tri Darma Wahyudi",
            "pekerjaan" => "Senior Developer",
            "review" => "Tim ini memiliki dedikasi yang tinggi dalam menyelesaikan proyek dengan kualitas terbaik. Mereka benar-benar memperhatikan detail dan kebutuhan klien.",
            "gambar" => "tri-darma.png"
        ],
        [
            "nama" => "Gede Candra Wikananta",
            "pekerjaan" => "UI/UX Designer",
            "review" => "Desain antarmuka yang dihasilkan sangat menarik dan user-friendly. Saya sangat senang bisa bekerja dengan tim yang kreatif dan inovatif ini.",
            "gambar" => "candra.png"
        ],
        [
            "nama" => "Putu Devasya Widyadana",
            "pekerjaan" => "Quality Assurance",
            "review" => "Proses pengujian dilakukan dengan teliti sehingga memastikan produk bebas dari kesalahan. Tim sangat responsif terhadap feedback yang diberikan.",
            "gambar" => "tri-darma.png"
        ],
        [
            "nama" => "Putu Rifki Dirkayuda",
            "pekerjaan" => "Project Manager",
            "review" => "Pengalaman kerja sama yang luar biasa! Tim bekerja dengan sangat profesional dan selalu memberikan solusi tepat waktu. Saya sangat puas dengan hasil yang diberikan.",
            "gambar" => "puturifki.png"
        ],
        [
            "nama" => "Nyoman Tri Darma Wahyudi",
            "pekerjaan" => "Senior Developer",
            "review" => "Tim ini memiliki dedikasi yang tinggi dalam menyelesaikan proyek dengan kualitas terbaik. Mereka benar-benar memperhatikan detail dan kebutuhan klien.",
            "gambar" => "tri-darma.png"
        ],
        [
            "nama" => "Gede Candra Wikananta",
            "pekerjaan" => "UI/UX Designer",
            "review" => "Desain antarmuka yang dihasilkan sangat menarik dan user-friendly. Saya sangat senang bisa bekerja dengan tim yang kreatif dan inovatif ini.",
            "gambar" => "candra.png"
        ],
        [
            "nama" => "Putu Devasya Widyadana",
            "pekerjaan" => "Quality Assurance",
            "review" => "Proses pengujian dilakukan dengan teliti sehingga memastikan produk bebas dari kesalahan. Tim sangat responsif terhadap feedback yang diberikan.",
            "gambar" => "tri-darma.png"
        ]
    ];
    // Belajar menggunakan for
    $banyakData = count($dataReview);
?>
    <div class="testimoni-container" id="testimoni">
        <div class="testimoni-heading" data-aos="fade-up" data-aos-duration="600">
            <p>
                TESTIMONIALS
            </p>
            <h4>
                The Trust From Clients
            </h4>
        </div>
        <div class="testimoni-nav">
            <button onclick="geserCardTestimoni('kiri')">
                <?php iconArrowLeft(); ?>
            </button>
            <button onclick="geserCardTestimoni('kanan')">
                <?php iconArrowRight(); ?>
            </button>
        </div>
        <div class="wrapper-testimoni-card">
            <div class="container-card-testimoni" data-aos="fade-right" data-aos-duration="1000">
                <?php for ($i = 0; $i < $banyakData; $i++) { ?>
                    <div class="card-testimoni">
                        <div class="container-img-testimoni">
                            <img src="assets/<?php echo $dataReview[$i]["gambar"]; ?>" alt="">
                        </div>
                        <div class="star-testimoni">
                            <?php iconStar(); ?>
                            <?php iconStar(); ?>
                            <?php iconStar(); ?>
                            <?php iconStar(); ?>
                            <?php iconStar(); ?>
                        </div>
                        <p>
                            <?php echo $dataReview[$i]["review"]; ?>
                        </p>
                        <div class="identity-container-testimoni">
                            <h4>
                                <?php echo $dataReview[$i]["nama"]; ?>
                            </h4>
                            <p>
                                <?php echo $dataReview[$i]["pekerjaan"]; ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php
}

function iconPesawat()
{
?>
    <svg width="373" height="282" viewBox="0 0 373 282" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M56.8893 268.742C56.6808 269.186 56.2118 269.433 55.7427 269.433C55.5603 269.433 55.3778 269.408 55.2215 269.334C52.9021 268.323 50.6349 267.262 48.4198 266.152C47.7944 265.831 47.5598 265.115 47.8986 264.523C48.2374 263.931 48.9931 263.709 49.6186 264.03C51.7555 265.115 53.9967 266.176 56.2639 267.163C56.8893 267.434 57.176 268.15 56.8893 268.742ZM52.4591 82.2238C52.9021 81.7057 52.7979 80.9409 52.2506 80.5461C51.7034 80.1267 50.8955 80.2254 50.4786 80.7435C48.8889 82.6185 47.3513 84.4936 45.8659 86.3687C45.449 86.8868 45.5532 87.6516 46.1005 88.0463C46.335 88.219 46.5956 88.293 46.8562 88.293C47.2471 88.293 47.6119 88.1203 47.8725 87.8243C49.358 85.9739 50.8955 84.0988 52.4591 82.2485V82.2238ZM43.2078 260.502C41.0969 259.243 39.0382 257.911 37.0837 256.554C36.5103 256.16 35.7285 256.283 35.3116 256.801C34.8946 257.344 35.0249 258.084 35.5722 258.479C37.5788 259.885 39.6897 261.242 41.8527 262.525C42.0611 262.648 42.2957 262.698 42.5302 262.698C42.9472 262.698 43.3641 262.5 43.5987 262.13C43.9635 261.563 43.8072 260.822 43.2078 260.477V260.502ZM34.5298 103.466C33.9565 103.096 33.1486 103.269 32.7838 103.812C31.3765 105.835 30.0214 107.833 28.7184 109.831C28.3535 110.399 28.536 111.139 29.1353 111.484C29.3438 111.608 29.5784 111.657 29.8129 111.657C30.2299 111.657 30.6468 111.46 30.8814 111.09C32.1844 109.116 33.5134 107.118 34.8946 105.119C35.2855 104.576 35.1292 103.812 34.5298 103.466ZM25.956 247.376C25.4609 246.908 24.653 246.883 24.1579 247.376C23.6627 247.845 23.6367 248.61 24.1579 249.079C25.9039 250.781 27.7542 252.434 29.6826 254.013C29.9172 254.21 30.2299 254.309 30.5165 254.309C30.8814 254.309 31.2202 254.161 31.4808 253.89C31.9498 253.396 31.8717 252.631 31.3505 252.187C29.4741 250.658 27.676 249.029 25.9821 247.376H25.956ZM70.0757 59.0817C68.3558 60.8581 66.6879 62.6098 65.0201 64.3615C64.551 64.8549 64.6031 65.6197 65.1243 66.0638C65.3589 66.2612 65.6716 66.3599 65.9582 66.3599C66.297 66.3599 66.6619 66.2118 66.8964 65.9651C68.5382 64.2134 70.206 62.4618 71.8999 60.7101C72.369 60.2166 72.3429 59.4518 71.8217 59.0077C71.3006 58.5636 70.4927 58.5883 70.0236 59.0817H70.0757ZM84.4869 275.848C82.0373 275.354 79.6137 274.787 77.2422 274.195C76.5647 273.997 75.8611 274.417 75.6786 275.033C75.4962 275.675 75.9132 276.341 76.5907 276.489C78.9883 277.106 81.464 277.649 83.9397 278.167C84.0179 278.167 84.1221 278.191 84.2003 278.191C84.7736 278.191 85.3209 277.797 85.4512 277.254C85.6075 276.612 85.1645 275.971 84.4869 275.823V275.848ZM61.8668 69.6166C61.3456 69.1971 60.5377 69.2465 60.0687 69.7399C58.4269 71.5656 56.8111 73.3913 55.2215 75.1924C54.7785 75.7105 54.8566 76.4506 55.3778 76.8947C55.6124 77.0674 55.899 77.1661 56.1857 77.1661C56.5505 77.1661 56.9154 77.0181 57.176 76.722C58.7396 74.921 60.3553 73.1199 61.9971 71.2942C62.4401 70.8008 62.388 70.036 61.8668 69.5919V69.6166ZM92.8522 38.7029C92.3571 38.2341 91.5492 38.2094 91.0541 38.6782C89.2299 40.3559 87.4578 42.0089 85.6857 43.6619C85.1906 44.1307 85.1906 44.8955 85.6857 45.3642C85.9202 45.611 86.259 45.7096 86.5717 45.7096C86.8845 45.7096 87.2233 45.5863 87.4578 45.3642C89.2038 43.7112 90.9759 42.0582 92.8001 40.4052C93.2952 39.9365 93.3213 39.1716 92.8262 38.7029H92.8522ZM70.1278 272.221C67.7303 271.481 65.3849 270.691 63.1177 269.877C62.4662 269.63 61.7365 269.951 61.4759 270.568C61.2153 271.185 61.5541 271.875 62.2056 272.122C64.4989 272.961 66.8964 273.775 69.346 274.515C69.4763 274.565 69.6066 274.565 69.7369 274.565C70.2842 274.565 70.7794 274.244 70.9357 273.726C71.1442 273.084 70.7794 272.418 70.1278 272.221ZM77.0598 55.529C78.7537 53.8266 80.4737 52.1243 82.2458 50.4219C82.7409 49.9532 82.7149 49.1884 82.2458 48.7196C81.7506 48.2508 80.9428 48.2755 80.4476 48.7196C78.6756 50.4466 76.9295 52.149 75.2356 53.8513C74.7665 54.3447 74.7665 55.0849 75.2877 55.5537C75.5223 55.7757 75.835 55.8744 76.1477 55.8744C76.4865 55.8744 76.8253 55.751 77.0598 55.5043V55.529ZM1.27713 191.372C1.98075 191.372 2.52801 190.853 2.55407 190.187C2.55407 187.868 2.68437 185.524 2.86679 183.181C2.91891 182.514 2.39771 181.947 1.69409 181.898C1.01653 181.873 0.391084 182.342 0.338964 183.008C0.130483 185.401 0.0262432 187.819 0.000183105 190.187C0.000183105 190.853 0.547445 191.396 1.25107 191.396L1.27713 191.372ZM3.54435 204.151C3.17951 201.882 2.91891 199.538 2.76255 197.194C2.71043 196.528 2.11105 196.034 1.40743 196.084C0.703805 196.133 0.182604 196.701 0.234724 197.367C0.391084 199.76 0.677745 202.178 1.04259 204.522C1.14683 205.114 1.66803 205.558 2.29347 205.558C2.34559 205.558 2.42377 205.558 2.47589 205.558C3.17951 205.459 3.64859 204.842 3.54435 204.201V204.151ZM2.26741 177.21C2.26741 177.21 2.39771 177.21 2.44983 177.21C3.07527 177.21 3.62253 176.766 3.70071 176.174C4.03949 173.904 4.45646 171.56 4.9516 169.241C5.0819 168.6 4.63888 167.958 3.96131 167.835C3.28375 167.711 2.60619 168.131 2.47589 168.772C1.98075 171.141 1.53773 173.509 1.19895 175.828C1.09471 176.494 1.58985 177.087 2.26741 177.185V177.21ZM5.0819 163.27C5.0819 163.27 5.29038 163.32 5.39462 163.32C5.96794 163.32 6.46308 162.95 6.61944 162.432C7.21882 160.211 7.92245 157.917 8.67819 155.672C8.88667 155.03 8.52183 154.364 7.84427 154.167C7.1667 153.969 6.46308 154.315 6.2546 154.956C5.49886 157.251 4.79524 159.57 4.1698 161.839C3.98737 162.481 4.40434 163.147 5.0819 163.295V163.27ZM38.0479 99.7654C38.4388 99.7654 38.8558 99.5927 39.0903 99.2473C40.4975 97.3476 41.9308 95.4232 43.4163 93.4741C43.8332 92.9313 43.7029 92.1912 43.1296 91.7964C42.5563 91.4017 41.7745 91.525 41.3575 92.0678C39.846 94.0169 38.4127 95.9413 37.0055 97.8904C36.6146 98.4331 36.7449 99.1733 37.3182 99.568C37.5267 99.7161 37.7873 99.7901 38.0479 99.7901V99.7654ZM16.6526 236.545C16.2617 236.003 15.4799 235.855 14.8805 236.225C14.3072 236.595 14.1508 237.335 14.5417 237.902C15.949 239.876 17.4865 241.825 19.0762 243.676C19.3368 243.972 19.7016 244.12 20.0664 244.12C20.3531 244.12 20.6398 244.021 20.8743 243.848C21.4216 243.429 21.4997 242.664 21.0567 242.171C19.4931 240.37 18.0077 238.47 16.6526 236.57V236.545ZM15.0629 136.526C15.2453 136.6 15.4017 136.625 15.5841 136.625C16.0793 136.625 16.5223 136.354 16.7308 135.934C17.7471 133.837 18.8156 131.715 19.9361 129.569C20.2489 128.977 19.9883 128.261 19.3628 127.965C18.7374 127.669 17.9816 127.916 17.6689 128.508C16.5223 130.679 15.4277 132.826 14.4114 134.947C14.1247 135.539 14.4114 136.255 15.0368 136.526H15.0629ZM4.9516 211.035C4.79524 210.393 4.11767 209.974 3.44011 210.147C2.76255 210.295 2.34559 210.936 2.50195 211.578C3.07527 213.922 3.77889 216.265 4.5607 218.51C4.74312 219.004 5.23826 219.325 5.75946 219.325C5.88976 219.325 6.02006 219.325 6.15036 219.275C6.80186 219.078 7.1667 218.387 6.95822 217.77C6.20248 215.574 5.52492 213.305 4.9516 211.035ZM13.0823 140.844C12.4308 140.597 11.7012 140.893 11.4406 141.485C10.4763 143.73 9.56423 145.951 8.70425 148.147C8.46971 148.763 8.80849 149.454 9.45999 149.676C9.59029 149.726 9.74665 149.75 9.90301 149.75C10.4242 149.75 10.9194 149.454 11.1018 148.961C11.9357 146.79 12.8217 144.594 13.786 142.373C14.0466 141.757 13.7338 141.066 13.1084 140.819L13.0823 140.844ZM9.56423 224.308C9.27757 223.691 8.54789 223.42 7.89639 223.691C7.24488 223.963 6.95822 224.654 7.24488 225.27C8.26123 227.466 9.38181 229.637 10.6066 231.759C10.8412 232.154 11.2581 232.376 11.7272 232.376C11.9357 232.376 12.1442 232.327 12.3266 232.228C12.952 231.907 13.1605 231.192 12.8217 230.6C11.649 228.552 10.5545 226.455 9.56423 224.333V224.308ZM26.6075 115.506C26.0081 115.161 25.2263 115.358 24.8615 115.95C23.5846 118.047 22.3597 120.12 21.161 122.167C20.8222 122.759 21.0567 123.475 21.6822 123.796C21.8646 123.894 22.0731 123.944 22.2815 123.944C22.7246 123.944 23.1676 123.722 23.4021 123.327C24.5748 121.279 25.7997 119.231 27.0505 117.159C27.4154 116.592 27.2069 115.851 26.5815 115.531L26.6075 115.506ZM270.843 239.284C268.654 240.444 266.464 241.554 264.275 242.664C263.65 242.985 263.415 243.7 263.754 244.292C263.989 244.687 264.432 244.934 264.875 244.934C265.083 244.934 265.292 244.885 265.474 244.786C267.663 243.676 269.878 242.541 272.093 241.381C272.693 241.06 272.927 240.32 272.589 239.753C272.25 239.185 271.468 238.963 270.869 239.284H270.843ZM244.157 252.089C241.864 253.076 239.597 254.038 237.329 254.975C236.678 255.247 236.391 255.937 236.678 256.554C236.886 256.998 237.355 257.27 237.851 257.27C238.007 257.27 238.189 257.245 238.346 257.171C240.639 256.234 242.932 255.247 245.225 254.26C245.851 253.988 246.138 253.273 245.851 252.681C245.564 252.089 244.809 251.817 244.183 252.089H244.157ZM257.63 245.921C255.389 247.006 253.148 248.042 250.933 249.054C250.307 249.35 250.047 250.066 250.333 250.658C250.542 251.077 251.011 251.324 251.48 251.324C251.662 251.324 251.845 251.274 252.027 251.2C254.268 250.164 256.51 249.128 258.777 248.042C259.402 247.746 259.637 247.031 259.324 246.439C259.011 245.847 258.256 245.6 257.63 245.921ZM202.331 267.36C199.933 268.076 197.536 268.742 195.164 269.384C194.487 269.556 194.096 270.222 194.304 270.864C194.46 271.382 194.982 271.727 195.529 271.727C195.633 271.727 195.763 271.727 195.868 271.678C198.265 271.037 200.663 270.346 203.086 269.63C203.764 269.433 204.129 268.767 203.92 268.125C203.712 267.484 203.008 267.138 202.331 267.336V267.36ZM230.449 257.738C228.13 258.651 225.811 259.515 223.491 260.354C222.84 260.6 222.501 261.291 222.762 261.908C222.944 262.377 223.439 262.673 223.934 262.673C224.091 262.673 224.247 262.648 224.404 262.599C226.723 261.76 229.068 260.872 231.388 259.959C232.039 259.712 232.352 258.997 232.065 258.405C231.805 257.788 231.049 257.492 230.423 257.763L230.449 257.738ZM216.507 262.846C214.136 263.66 211.79 264.425 209.445 265.189C208.794 265.411 208.429 266.078 208.637 266.719C208.82 267.212 209.315 267.533 209.836 267.533C209.966 267.533 210.097 267.533 210.253 267.459C212.624 266.694 214.996 265.93 217.367 265.115C218.019 264.893 218.358 264.202 218.123 263.586C217.888 262.969 217.159 262.648 216.507 262.87V262.846ZM283.794 232.179C281.631 233.412 279.495 234.596 277.358 235.781C276.758 236.101 276.55 236.842 276.888 237.409C277.123 237.804 277.54 238.001 277.983 238.001C278.191 238.001 278.426 237.952 278.608 237.828C280.771 236.644 282.934 235.435 285.097 234.202C285.697 233.856 285.879 233.116 285.54 232.549C285.176 231.981 284.394 231.809 283.794 232.129V232.179ZM308.864 216.709C306.805 218.066 304.747 219.399 302.688 220.731C302.115 221.101 301.958 221.841 302.349 222.409C302.584 222.754 303.001 222.927 303.392 222.927C303.626 222.927 303.887 222.853 304.095 222.729C306.154 221.397 308.239 220.065 310.298 218.683C310.871 218.313 311.001 217.548 310.61 217.005C310.219 216.463 309.411 216.339 308.838 216.709H308.864ZM322.754 208.642C322.337 208.124 321.529 208 320.982 208.395C318.976 209.826 316.969 211.208 314.962 212.589C314.389 212.984 314.259 213.724 314.676 214.267C314.936 214.588 315.301 214.76 315.692 214.76C315.953 214.76 316.213 214.686 316.448 214.538C318.454 213.157 320.487 211.75 322.494 210.319C323.041 209.925 323.171 209.16 322.754 208.642ZM296.46 224.654C294.349 225.961 292.264 227.22 290.153 228.478C289.554 228.823 289.371 229.563 289.762 230.131C289.997 230.501 290.414 230.698 290.831 230.698C291.065 230.698 291.3 230.649 291.508 230.526C293.619 229.267 295.73 227.984 297.841 226.677C298.44 226.307 298.597 225.567 298.206 225.024C297.815 224.481 297.033 224.308 296.46 224.678V224.654ZM114.065 279.376C111.563 279.277 109.088 279.129 106.612 278.932C105.882 278.833 105.309 279.376 105.257 280.017C105.205 280.683 105.726 281.251 106.403 281.3C108.879 281.497 111.407 281.645 113.935 281.744H113.987C114.665 281.744 115.212 281.251 115.264 280.609C115.29 279.943 114.743 279.376 114.065 279.351V279.376ZM126.209 11.9094C126.756 11.4899 126.809 10.7251 126.365 10.207C125.922 9.71358 125.115 9.63956 124.567 10.059C122.639 11.6133 120.737 13.143 118.86 14.6726C118.339 15.1167 118.261 15.8568 118.73 16.375C118.99 16.6463 119.329 16.7944 119.694 16.7944C119.981 16.7944 120.293 16.6957 120.528 16.4983C122.404 14.9687 124.307 13.439 126.235 11.8847L126.209 11.9094ZM113.179 19.3602C111.277 20.9392 109.4 22.5182 107.576 24.0972C107.055 24.5413 107.003 25.3061 107.472 25.7996C107.733 26.0709 108.071 26.1943 108.41 26.1943C108.723 26.1943 109.009 26.0956 109.27 25.8982C111.094 24.3192 112.971 22.7649 114.873 21.1859C115.394 20.7418 115.446 20.0017 114.977 19.4836C114.508 18.9902 113.7 18.9408 113.179 19.3849V19.3602ZM187.945 271.234C185.522 271.826 183.098 272.394 180.701 272.936C180.023 273.084 179.606 273.726 179.763 274.367C179.893 274.91 180.414 275.305 180.987 275.305C181.092 275.305 181.17 275.305 181.274 275.28C183.698 274.737 186.147 274.17 188.597 273.578C189.275 273.405 189.691 272.764 189.509 272.122C189.327 271.481 188.623 271.086 187.972 271.259L187.945 271.234ZM128.971 279.474C127.043 279.524 125.141 279.548 123.264 279.548H121.518C120.867 279.45 120.241 280.066 120.241 280.733C120.241 281.399 120.789 281.941 121.492 281.941H123.264C125.167 281.941 127.095 281.941 129.05 281.867C129.753 281.867 130.301 281.3 130.274 280.634C130.274 279.968 129.701 279.474 128.971 279.474ZM99.2109 278.191C96.7091 277.895 94.2595 277.55 91.8359 277.18C91.1583 277.081 90.4808 277.501 90.3765 278.167C90.2462 278.833 90.7153 279.45 91.4189 279.548C93.8686 279.943 96.3703 280.288 98.8982 280.585C98.9503 280.585 99.0024 280.585 99.0545 280.585C99.68 280.585 100.227 280.14 100.305 279.524C100.384 278.858 99.8885 278.265 99.2109 278.191ZM102.025 28.8835C100.175 30.5119 98.3248 32.1402 96.5267 33.7439C96.0316 34.2126 96.0055 34.9528 96.4746 35.4462C96.7352 35.6929 97.0479 35.8163 97.3867 35.8163C97.6994 35.8163 98.0121 35.7176 98.2467 35.4955C100.045 33.8919 101.869 32.2635 103.719 30.6599C104.24 30.2158 104.267 29.451 103.797 28.9575C103.328 28.4641 102.521 28.4394 101.999 28.8835H102.025ZM158.706 276.933C156.23 277.279 153.755 277.599 151.305 277.895C150.601 277.969 150.106 278.561 150.21 279.228C150.289 279.844 150.836 280.288 151.461 280.288C151.513 280.288 151.566 280.288 151.618 280.288C154.093 280.017 156.569 279.696 159.097 279.326C159.801 279.228 160.27 278.611 160.165 277.969C160.061 277.303 159.436 276.859 158.732 276.958L158.706 276.933ZM173.404 274.441C170.954 274.91 168.505 275.379 166.055 275.774C165.377 275.897 164.908 276.514 165.039 277.155C165.143 277.747 165.69 278.142 166.29 278.142C166.368 278.142 166.446 278.142 166.524 278.142C168.974 277.723 171.449 277.279 173.925 276.785C174.603 276.662 175.046 276.02 174.915 275.354C174.785 274.713 174.108 274.293 173.43 274.417L173.404 274.441ZM137.936 1.1525C137.493 0.634391 136.685 0.560367 136.164 0.979787C134.21 2.48476 132.255 3.98974 130.353 5.49472C129.805 5.91414 129.727 6.67896 130.196 7.19706C130.457 7.49312 130.822 7.64116 131.187 7.64116C131.473 7.64116 131.76 7.54247 131.994 7.36977C133.897 5.86479 135.825 4.38449 137.78 2.87951C138.327 2.46009 138.405 1.69527 137.962 1.20183L137.936 1.1525ZM143.852 278.635C141.35 278.858 138.874 279.03 136.399 279.154C135.695 279.203 135.174 279.77 135.2 280.412C135.252 281.053 135.799 281.547 136.451 281.547H136.529C139.005 281.399 141.532 281.226 144.06 281.004C144.764 280.955 145.259 280.362 145.207 279.696C145.155 279.03 144.529 278.586 143.826 278.611L143.852 278.635Z" fill="white" />
        <path d="M364.937 184.333C368.655 181.4 372.688 177.166 372.038 176.378C371.387 175.589 366.313 178.522 362.595 181.473C362.261 181.748 361.926 182.005 361.61 182.262C360.959 182.152 359.603 181.932 357.874 181.657C357.892 181.657 357.93 181.657 357.948 181.657L358.952 180.869C359.082 180.777 359.082 180.575 358.952 180.447L358.171 179.494C358.06 179.347 357.874 179.31 357.744 179.42L356.74 180.209C356.74 180.209 356.666 180.319 356.647 180.392L355.476 181.308C354.008 181.07 352.409 180.814 350.829 180.557L351.814 179.787C351.944 179.695 351.944 179.494 351.814 179.365L351.034 178.412C350.922 178.266 350.736 178.229 350.606 178.339L349.602 179.127C349.602 179.127 349.528 179.237 349.509 179.31L348.376 180.19C344.361 179.549 340.996 179.036 340.885 179.072C340.606 179.164 339.175 180.374 339.175 180.374C338.822 180.649 338.58 180.905 338.599 180.942C338.636 180.979 339.045 180.704 339.379 180.447L346.759 183.105C346.498 183.343 346.35 183.563 346.405 183.636C346.48 183.728 346.814 183.563 347.149 183.288L347.186 183.252L348.636 183.783C348.394 184.003 348.246 184.223 348.301 184.296C348.376 184.388 348.71 184.223 349.045 183.948L350.365 184.406L351.164 184.975C350.866 185.231 350.662 185.488 350.718 185.561C350.792 185.653 351.127 185.488 351.461 185.213H351.48L353.06 186.313C352.762 186.569 352.558 186.826 352.632 186.899C352.707 186.991 353.041 186.826 353.376 186.551L354.826 187.578C352.353 189.576 351.387 190.382 349.547 191.849C347.688 193.315 345.996 194.855 344.64 196.23C342.446 195.9 338.115 195.185 338.115 195.185L337 195.918L341.703 199.511C341.442 199.859 341.238 200.134 341.126 200.354C340.402 201.014 339.974 201.454 340.03 201.527C340.086 201.6 340.606 201.307 341.387 200.757C341.628 200.684 341.963 200.519 342.39 200.317L344.937 205.688L345.922 204.79C345.922 204.79 346.182 200.171 346.331 198.063C347.93 197.073 349.751 195.9 351.647 194.598C353.952 192.783 354.993 192.014 357.13 190.364L357.818 191.977C357.465 192.27 357.242 192.545 357.316 192.637C357.372 192.71 357.669 192.582 358.004 192.344L358.766 194.122H358.748C358.394 194.415 358.171 194.708 358.246 194.781C358.301 194.855 358.617 194.727 358.933 194.488L359.324 195.368L359.51 196.743C359.156 197.018 358.933 197.311 359.008 197.403C359.064 197.476 359.305 197.384 359.584 197.183L359.788 198.704H359.751C359.398 198.998 359.175 199.291 359.249 199.382C359.305 199.456 359.565 199.346 359.844 199.144L360.848 206.825C360.532 207.1 360.16 207.43 360.179 207.466C360.216 207.503 360.513 207.32 360.867 207.045C360.867 207.045 362.391 205.926 362.521 205.688C362.577 205.597 362.8 202.242 363.06 198.246L364.194 197.366C364.194 197.366 364.342 197.366 364.398 197.329L365.402 196.541C365.532 196.45 365.532 196.248 365.402 196.12L364.621 195.166C364.51 195.02 364.324 194.983 364.194 195.093L363.209 195.863C363.301 194.287 363.394 192.71 363.487 191.225L364.658 190.309C364.658 190.309 364.807 190.309 364.863 190.272L365.867 189.484C365.997 189.392 365.997 189.191 365.867 189.062L365.086 188.109C364.974 187.963 364.789 187.926 364.658 188.036L363.655 188.824C363.655 188.824 363.655 188.861 363.617 188.897C363.729 187.193 363.803 185.854 363.841 185.195C364.157 184.938 364.491 184.681 364.844 184.406L364.937 184.333Z" fill="white" />
    </svg>
<?php
}

function iconLocation()
{
?>
    <svg width="223" height="314" viewBox="0 0 223 314" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M42.1258 247.77C42.1258 241.479 36.9521 236.376 30.572 236.376C24.1918 236.376 19.0182 241.479 19.0182 247.77C19.0182 247.77 18.4962 251.729 23.0666 258.158C25.1199 261.052 30.572 269.643 30.572 269.643C30.572 269.643 36.024 261.052 38.0773 258.158C42.6478 251.729 42.1258 247.77 42.1258 247.77ZM30.572 256.282C25.9203 256.282 22.1502 252.564 22.1502 247.976C22.1502 243.389 25.9203 239.671 30.572 239.671C35.2236 239.671 38.9937 243.389 38.9937 247.976C38.9937 252.564 35.2236 256.282 30.572 256.282Z" fill="white" />
        <path d="M57.3091 29.9416C54.765 28.5182 52.1884 27.0948 49.5791 25.6978C48.8615 25.3024 48.6332 24.5117 49.1224 23.9318C49.6116 23.3519 50.5902 23.1674 51.3077 23.5628C53.9496 24.9598 56.5589 26.3831 59.1029 27.8329C59.8205 28.2282 60.0163 29.0454 59.4944 29.6253C59.2009 29.9943 58.6789 30.1788 58.1897 30.1788C57.8635 30.1788 57.57 30.0997 57.2764 29.9416H57.3091ZM43.4146 19.4244C40.7727 18.0801 38.0982 16.7358 35.3911 15.4179C34.6409 15.0489 33.6625 15.2334 33.2058 15.866C32.7492 16.4723 33.0101 17.263 33.7603 17.632C36.4348 18.95 39.1093 20.2679 41.7186 21.6122C41.9795 21.744 42.2731 21.8231 42.5666 21.8231C43.0885 21.8231 43.6104 21.6122 43.9039 21.2168C44.3605 20.6106 44.1648 19.8198 43.4146 19.4508V19.4244ZM102.319 58.4881C102.743 58.4881 103.167 58.3563 103.493 58.0663C104.081 57.5391 104.048 56.722 103.396 56.2476C101.08 54.5606 98.7315 52.8736 96.3505 51.1867C95.6982 50.7122 94.6871 50.7913 94.1 51.3185C93.5129 51.8457 93.6107 52.6628 94.2631 53.1372C96.644 54.7978 98.9598 56.4848 101.243 58.1718C101.536 58.409 101.928 58.5144 102.319 58.5144V58.4881ZM90.1535 290.761C87.5768 289.443 84.9676 288.072 82.3257 286.649C81.6081 286.254 80.6295 286.412 80.1077 286.992C79.6184 287.572 79.8142 288.362 80.5317 288.784C83.2062 290.234 85.8482 291.631 88.4249 292.949C88.6858 293.081 88.9793 293.133 89.2728 293.133C89.7947 293.133 90.3165 292.922 90.6101 292.527C91.0667 291.921 90.8384 291.13 90.1208 290.761H90.1535ZM27.2697 11.5959C24.5625 10.3307 21.8227 9.09182 19.0504 7.87932C18.2676 7.53665 17.3218 7.77388 16.8978 8.38014C16.4738 9.01274 16.7672 9.77715 17.5174 10.1198C20.2572 11.3323 22.9969 12.5712 25.6714 13.81C25.9324 13.9155 26.1934 13.9682 26.4543 13.9682C27.0088 13.9682 27.5306 13.731 27.8241 13.3356C28.2481 12.7293 27.9872 11.9386 27.237 11.5959H27.2697ZM88.1313 48.5508C88.5879 48.5508 89.0446 48.3927 89.3381 48.0764C89.8926 47.5228 89.7947 46.7321 89.1424 46.284C86.7288 44.6761 84.3152 43.0682 81.8363 41.4867C81.1514 41.0649 80.1403 41.144 79.6185 41.6976C79.064 42.2511 79.1945 43.0682 79.8795 43.4899C82.3257 45.0715 84.7392 46.653 87.1528 48.2609C87.4463 48.4717 87.8051 48.5508 88.1639 48.5508H88.1313ZM67.1591 277.819C66.4742 277.397 65.4631 277.503 64.9412 278.056C64.4194 278.61 64.5498 279.427 65.2348 279.849C67.7788 281.43 70.3229 282.933 72.8017 284.382C73.0953 284.54 73.4214 284.619 73.715 284.619C74.2042 284.619 74.6935 284.435 74.987 284.092C75.5089 283.512 75.3458 282.722 74.6282 282.3C72.1494 280.85 69.638 279.348 67.1265 277.793L67.1591 277.819ZM72.443 38.8508C72.7365 39.0353 73.0626 39.1144 73.3888 39.1144C73.878 39.1144 74.3347 38.9299 74.6609 38.6136C75.1827 38.06 75.0523 37.2429 74.3673 36.8212C71.8885 35.2924 69.3444 33.7899 66.8004 32.2875C66.1154 31.8658 65.1044 31.9975 64.5825 32.5774C64.0606 33.1573 64.2237 33.9481 64.9412 34.3698C67.4853 35.8459 69.9968 37.3484 72.443 38.8772V38.8508ZM52.5472 268.356C51.8622 267.908 50.8837 267.961 50.2966 268.514C49.7422 269.068 49.8074 269.859 50.4923 270.333C52.9385 271.994 55.3848 273.602 57.7657 275.157C58.0593 275.341 58.418 275.447 58.7442 275.447C59.2008 275.447 59.6575 275.288 59.9836 274.972C60.5381 274.419 60.4076 273.602 59.7226 273.18C57.3417 271.625 54.9281 270.043 52.4819 268.383L52.5472 268.356ZM213.344 203.646C214.095 206.123 214.78 208.575 215.399 211C215.562 211.606 216.215 212.028 216.965 212.028C217.063 212.028 217.193 212.028 217.291 212.028C218.139 211.896 218.693 211.21 218.53 210.525C217.911 208.074 217.226 205.57 216.476 203.066C216.28 202.38 215.432 201.959 214.551 202.117C213.703 202.275 213.181 202.987 213.377 203.672L213.344 203.646ZM217.095 218.433C217.617 220.937 218.041 223.441 218.433 225.892C218.53 226.551 219.215 227.026 219.998 227.026C220.063 227.026 220.129 227.026 220.194 227.026C221.074 226.947 221.694 226.314 221.564 225.602C221.205 223.098 220.748 220.594 220.226 218.037C220.096 217.352 219.248 216.851 218.4 216.983C217.519 217.088 216.965 217.747 217.095 218.459V218.433ZM10.7007 4.26817C7.92829 3.10839 5.12335 1.94861 2.28575 0.815181C1.50296 0.498876 0.557117 0.762464 0.165723 1.39507C-0.22567 2.02768 0.100495 2.79209 0.883281 3.10839C3.68827 4.24182 6.49324 5.37524 9.23299 6.53502C9.4613 6.64046 9.72224 6.66682 9.95055 6.66682C10.505 6.66682 11.0595 6.40323 11.353 5.98149C11.7444 5.34888 11.4509 4.58448 10.6681 4.24181L10.7007 4.26817ZM208.322 189.096C209.267 191.521 210.148 193.945 210.996 196.344C211.192 196.898 211.844 197.267 212.529 197.267C212.66 197.267 212.823 197.267 212.953 197.214C213.801 197.029 214.29 196.318 214.062 195.632C213.214 193.207 212.333 190.782 211.355 188.331C211.094 187.646 210.213 187.277 209.365 187.488C208.517 187.698 208.061 188.41 208.322 189.096ZM219.346 233.378C219.574 235.909 219.737 238.439 219.835 240.89C219.835 241.576 220.553 242.129 221.433 242.129H221.466C222.346 242.129 223.031 241.523 222.999 240.811C222.901 238.307 222.738 235.75 222.51 233.167C222.444 232.456 221.662 231.928 220.814 231.981C219.933 232.034 219.281 232.64 219.346 233.352V233.378ZM205.354 181.952C205.582 182.479 206.202 182.822 206.854 182.822C207.017 182.822 207.213 182.822 207.376 182.743C208.191 182.506 208.648 181.768 208.354 181.109C207.343 178.737 206.234 176.338 205.093 173.939C204.766 173.28 203.853 172.938 203.038 173.201C202.222 173.465 201.798 174.203 202.124 174.862C203.266 177.234 204.31 179.606 205.354 181.952ZM172.966 127.601C173.259 127.996 173.781 128.207 174.303 128.207C174.597 128.207 174.89 128.154 175.151 128.022C175.901 127.653 176.13 126.863 175.673 126.256C174.042 124.121 172.346 121.96 170.617 119.825C170.128 119.219 169.15 119.06 168.432 119.456C167.682 119.851 167.486 120.642 167.975 121.222C169.704 123.357 171.368 125.466 172.998 127.601H172.966ZM191.002 154.091C191.263 154.539 191.85 154.803 192.438 154.803C192.666 154.803 192.894 154.75 193.123 154.671C193.905 154.355 194.231 153.59 193.873 152.958C192.503 150.691 191.1 148.424 189.665 146.131C189.274 145.498 188.295 145.261 187.513 145.577C186.73 145.894 186.436 146.684 186.828 147.317C188.263 149.584 189.665 151.824 191.002 154.065V154.091ZM159.202 310.767C156.234 310.767 153.168 310.583 150.037 310.267C149.189 310.187 148.373 310.688 148.275 311.374C148.178 312.085 148.797 312.718 149.645 312.797C152.907 313.113 156.103 313.298 159.202 313.298C160.082 313.298 160.8 312.718 160.8 312.033C160.8 311.321 160.115 310.741 159.234 310.741L159.202 310.767ZM106.331 298.3C103.657 297.166 100.917 295.954 98.177 294.662C97.4269 294.319 96.4484 294.53 96.0244 295.137C95.6003 295.743 95.8613 296.534 96.6114 296.876C99.4164 298.194 102.189 299.407 104.896 300.566C105.124 300.672 105.385 300.698 105.613 300.698C106.168 300.698 106.722 300.435 107.016 300.013C107.407 299.38 107.114 298.616 106.331 298.273V298.3ZM193.318 302.016C190.905 303.519 188.361 304.837 185.653 305.97C184.871 306.286 184.577 307.077 184.968 307.71C185.262 308.158 185.816 308.395 186.371 308.395C186.632 308.395 186.86 308.342 187.089 308.263C189.926 307.077 192.698 305.654 195.243 304.072C195.927 303.65 196.058 302.833 195.536 302.28C194.982 301.726 194.003 301.621 193.318 302.043V302.016ZM200.755 168.562C201.57 168.298 201.961 167.534 201.603 166.875C200.396 164.556 199.156 162.21 197.852 159.89C197.493 159.257 196.547 158.967 195.764 159.257C194.949 159.547 194.623 160.312 194.982 160.944C196.286 163.264 197.526 165.557 198.7 167.877C198.961 168.378 199.548 168.667 200.167 168.667C200.363 168.667 200.592 168.641 200.787 168.562H200.755ZM185.197 139.436C183.696 137.222 182.131 135.007 180.533 132.793C180.109 132.187 179.13 131.976 178.38 132.345C177.63 132.714 177.369 133.479 177.826 134.085C179.424 136.273 180.957 138.46 182.424 140.675C182.718 141.096 183.24 141.333 183.827 141.333C184.088 141.333 184.349 141.281 184.577 141.175C185.36 140.833 185.621 140.042 185.197 139.436ZM215.693 277.081C214.845 276.844 213.964 277.186 213.671 277.872C212.627 280.27 211.453 282.563 210.148 284.751C209.757 285.384 210.083 286.148 210.898 286.465C211.127 286.544 211.355 286.596 211.583 286.596C212.17 286.596 212.725 286.333 213.018 285.885C214.388 283.618 215.595 281.219 216.671 278.741C216.965 278.083 216.541 277.344 215.693 277.107V277.081ZM221.498 247.19C220.553 247.164 219.9 247.717 219.868 248.429C219.77 250.986 219.607 253.49 219.313 255.915C219.248 256.627 219.868 257.233 220.748 257.312C220.781 257.312 220.846 257.312 220.879 257.312C221.694 257.312 222.379 256.811 222.444 256.152C222.738 253.674 222.901 251.091 222.999 248.508C222.999 247.796 222.346 247.216 221.466 247.19H221.498ZM177.271 308.711C174.433 309.423 171.433 309.95 168.367 310.293C167.486 310.398 166.899 311.031 166.997 311.743C167.095 312.375 167.78 312.85 168.563 312.85C168.628 312.85 168.693 312.85 168.791 312.85C172.02 312.481 175.216 311.927 178.217 311.189C179.065 310.978 179.522 310.267 179.261 309.581C179 308.896 178.119 308.527 177.271 308.738V308.711ZM219.998 262.294C219.15 262.188 218.302 262.663 218.172 263.348C217.682 265.852 217.03 268.33 216.313 270.676C216.084 271.361 216.606 272.046 217.454 272.231C217.585 272.231 217.715 272.257 217.845 272.257C218.563 272.257 219.215 271.862 219.378 271.282C220.129 268.857 220.748 266.327 221.27 263.743C221.401 263.032 220.814 262.373 219.965 262.267L219.998 262.294ZM207.832 290.787C207.115 290.392 206.104 290.55 205.647 291.156C203.951 293.239 202.059 295.216 200.07 296.982C199.483 297.509 199.515 298.326 200.167 298.8C200.461 299.011 200.852 299.143 201.244 299.143C201.668 299.143 202.092 299.011 202.418 298.721C204.538 296.85 206.528 294.768 208.322 292.58C208.811 292 208.615 291.183 207.865 290.814L207.832 290.787ZM130.173 77.7299C128.053 75.8584 125.901 74.0133 123.715 72.1682C123.096 71.6674 122.117 71.6411 121.465 72.1419C120.845 72.6427 120.813 73.4334 121.432 73.9606C123.618 75.7794 125.738 77.6245 127.825 79.4696C128.151 79.7332 128.575 79.8913 128.999 79.8913C129.391 79.8913 129.782 79.7859 130.076 79.5487C130.728 79.0742 130.76 78.2571 130.173 77.7299ZM123.291 304.494C120.486 303.598 117.616 302.622 114.746 301.568C113.963 301.278 113.017 301.568 112.626 302.201C112.267 302.833 112.626 303.598 113.409 303.888C116.344 304.968 119.28 305.97 122.15 306.893C122.346 306.945 122.541 306.972 122.737 306.972C123.357 306.972 123.976 306.655 124.205 306.155C124.531 305.496 124.107 304.758 123.291 304.494ZM115.985 68.9261C116.377 68.9261 116.801 68.7943 117.094 68.5571C117.714 68.0563 117.714 67.2392 117.094 66.7383C114.876 64.9459 112.626 63.1799 110.343 61.4139C109.723 60.9131 108.712 60.9394 108.092 61.4666C107.473 61.9674 107.505 62.7845 108.158 63.2853C110.441 65.025 112.659 66.7911 114.876 68.5571C115.17 68.7943 115.594 68.9261 115.985 68.9261ZM159.985 107.225C159.463 106.645 158.484 106.514 157.767 106.935C157.049 107.357 156.886 108.148 157.408 108.728C159.234 110.784 161.061 112.84 162.789 114.896C163.083 115.265 163.605 115.449 164.094 115.449C164.42 115.449 164.714 115.37 165.007 115.212C165.725 114.817 165.921 114 165.399 113.42C163.638 111.337 161.811 109.255 159.952 107.199L159.985 107.225ZM153.103 103.166C153.429 103.166 153.787 103.087 154.048 102.902C154.733 102.481 154.896 101.664 154.342 101.11C152.45 99.1068 150.526 97.1036 148.536 95.1003C147.982 94.5468 147.003 94.4677 146.318 94.8894C145.633 95.3375 145.536 96.1283 146.057 96.6818C148.014 98.6587 149.939 100.662 151.798 102.639C152.124 102.982 152.581 103.14 153.07 103.14L153.103 103.166ZM141.002 308.949C138.099 308.421 135.098 307.762 132.065 306.998C131.217 306.787 130.336 307.156 130.076 307.842C129.815 308.527 130.271 309.239 131.119 309.449C134.218 310.24 137.316 310.899 140.317 311.453C140.448 311.453 140.545 311.479 140.676 311.479C141.393 311.479 142.046 311.084 142.209 310.477C142.404 309.792 141.85 309.107 141.002 308.949ZM136.468 83.397C135.881 82.8699 134.87 82.8172 134.218 83.2916C133.565 83.7661 133.5 84.5568 134.087 85.1104C136.142 87.0082 138.197 88.9324 140.187 90.8566C140.513 91.1729 140.937 91.3047 141.393 91.3047C141.752 91.3047 142.111 91.1992 142.404 91.0147C143.089 90.5666 143.155 89.7495 142.6 89.1959C140.611 87.2454 138.556 85.3212 136.468 83.397Z" fill="white" />
    </svg>
<?php
}

function contactMe()
{
?>
    <div class="container-contactMe" id="contactMe">
        <div class="pesawat">
            <?php iconPesawat(); ?>
        </div>
        <div class="wrapper-contactMe">
            <div class="heading-contactMe" data-aos="fade-up" data-aos-duration="1000">
                <p>CONTACT ME</p>
                <h1>Request Free Consultant</h1>
            </div>
            <div class="form-contactMe">
                <div class="detailInformation-contactMe" data-aos="fade-right" data-aos-duration="1000">
                    <div class="heading-detailInformation-contactMe">
                        <h4>
                            Hotline 24/7
                        </h4>
                        <h3>
                            +62 881038694017
                        </h3>
                    </div>

                    <div class="deskripsi-detailInformation-contactMe">
                        <p>
                            <span>Address:</span> Jalan Gunung Patas Gg Dampang Sari II
                        </p>
                        <p>
                            <span>Email:</span> puturifki56@gmail.com
                        </p>
                        <p>
                            <span>Phone Number: </span> 0881038694017
                        </p>
                        <p>
                            <span>Work Hour: </span>Mon - Sat 09.00 - 18.00
                        </p>
                    </div>
                </div>

                <form action="" data-aos="fade-left" data-aos-duration="1000" onsubmit="return validateBeforeSubmit()">
                    <div class="nameAndEmail-contactMe">
                        <input type="text" placeholder="Name*" onfocus="highlight(this)" onblur="removeHighlight(this)" oninput="checkInput(this)">
                        <input type="text" id="emailField" placeholder="Email Address*" onfocus="highlight(this)" onblur="removeHighlight(this)" oninput="checkInput(this)">
                        <input type="tel" id="phoneField" placeholder="Phone Number*" id="phoneField" style="display: none;" onfocus="highlight(this)" onblur="removeHighlight(this)" oninput="checkInput(this)">
                    </div>
                    <!-- <input type="text" placeholder="No Telepon"> -->
                    <textarea class="long-text" type="text" rows="4" cols="50" placeholder="Type your message here..." onfocus="highlight(this)" onblur="removeHighlight(this)" oninput="checkInput(this)" style="resize: none;">
                            </textarea>
                    <div class="wrapper-metode">
                        <div class="wrapper-email">
                            <input type="radio" id="kontak_email" name="preferensi_kontak" value="Email" checked onchange="changeInputMethod(this)">
                            <label for="kontak_email">Email</label>
                        </div>
                        <div class="wrapper-telpon">
                            <input type="radio" id="kontak_telepon" name="preferensi_kontak" value="Telepon" onchange="changeInputMethod(this)">
                            <label for="kontak_telepon">Telepon</label>
                        </div>
                    </div>
                    <button type="submit">Request Now</button>
                </form>
            </div>
        </div>
        <div class="location">
            <?php iconLocation(); ?>
        </div>
    </div>
<?php
}

function footer()
{
?>
    <footer>
        <div class="footer-contain">
            <div class="wrapper-footer">
                <div class="description">
                    <div class="icon">
                        <?php iconFooter(); ?>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed congue interdum ligula a dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis orci elementum egestas lobortis.
                    </p>
                    <div class="icon-sosial-media">
                        <a href="index.php">
                            <div class="icon">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 16.2711C22 19.9111 19.83 22.0811 16.19 22.0811H15C14.45 22.0811 14 21.6311 14 21.0811V15.3111C14 15.0411 14.22 14.8111 14.49 14.8111L16.25 14.7811C16.39 14.7711 16.51 14.6711 16.54 14.5311L16.89 12.6211C16.92 12.4411 16.78 12.2711 16.59 12.2711L14.46 12.3011C14.18 12.3011 13.96 12.0811 13.95 11.8111L13.91 9.36105C13.91 9.20105 14.04 9.06107 14.21 9.06107L16.61 9.02106C16.78 9.02106 16.91 8.89107 16.91 8.72107L16.87 6.32104C16.87 6.15104 16.74 6.02106 16.57 6.02106L13.87 6.06107C12.21 6.09107 10.89 7.45105 10.92 9.11105L10.97 11.8611C10.98 12.1411 10.76 12.3611 10.48 12.3711L9.28 12.3911C9.11 12.3911 8.98001 12.521 8.98001 12.691L9.01001 14.5911C9.01001 14.7611 9.14 14.8911 9.31 14.8911L10.51 14.8711C10.79 14.8711 11.01 15.0911 11.02 15.3611L11.11 21.0611C11.12 21.6211 10.67 22.0811 10.11 22.0811H7.81C4.17 22.0811 2 19.911 2 16.261V7.89105C2 4.25105 4.17 2.08105 7.81 2.08105H16.19C19.83 2.08105 22 4.25105 22 7.89105V16.2711Z" fill="white" />
                                </svg>
                            </div>
                        </a>
                        <a href="index.php">
                            <div class="icon">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 4.08105H7C4 4.08105 2 6.08105 2 9.08105V15.0811C2 18.0811 4 20.0811 7 20.0811H17C20 20.0811 22 18.0811 22 15.0811V9.08105C22 6.08105 20 4.08105 17 4.08105ZM13.89 13.1111L11.42 14.5911C10.42 15.1911 9.59998 14.7311 9.59998 13.5611V10.5911C9.59998 9.42106 10.42 8.96107 11.42 9.56107L13.89 11.041C14.84 11.621 14.84 12.5411 13.89 13.1111Z" fill="white" />
                                </svg>
                            </div>
                        </a>
                        <a href="https://wa.me/0881038194017" target="_blank">
                            <div class="icon">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.98 11.491C21.64 5.69101 16.37 1.22102 10.3 2.22102C6.12004 2.91102 2.77005 6.301 2.12005 10.481C1.74005 12.901 2.24007 15.191 3.33007 17.081L2.44006 20.391C2.24006 21.141 2.93004 21.821 3.67004 21.611L6.93005 20.711C8.41005 21.581 10.14 22.081 11.99 22.081C17.63 22.081 22.31 17.111 21.98 11.491ZM16.8801 15.801C16.7901 15.981 16.68 16.151 16.54 16.311C16.29 16.581 16.02 16.781 15.72 16.901C15.42 17.031 15.09 17.091 14.74 17.091C14.23 17.091 13.68 16.971 13.11 16.721C12.53 16.471 11.9601 16.141 11.3901 15.731C10.8101 15.311 10.2701 14.841 9.75005 14.331C9.23005 13.811 8.77003 13.261 8.35003 12.691C7.94003 12.121 7.61005 11.551 7.37005 10.981C7.13005 10.411 7.01006 9.86101 7.01006 9.34101C7.01006 9.00101 7.07006 8.67101 7.19006 8.37101C7.31006 8.06101 7.50007 7.78101 7.77007 7.53101C8.09007 7.21101 8.44005 7.06101 8.81005 7.06101C8.95005 7.06101 9.09002 7.09101 9.22002 7.15101C9.35002 7.21101 9.47005 7.30101 9.56005 7.43101L10.72 9.07099C10.81 9.20099 10.88 9.311 10.92 9.421C10.97 9.531 10.99 9.631 10.99 9.731C10.99 9.851 10.9501 9.97101 10.8801 10.091C10.8101 10.211 10.72 10.331 10.6 10.451L10.22 10.851C10.16 10.911 10.1401 10.971 10.1401 11.051C10.1401 11.091 10.15 11.131 10.16 11.171C10.18 11.211 10.1901 11.241 10.2001 11.271C10.2901 11.441 10.45 11.651 10.67 11.911C10.9 12.171 11.1401 12.441 11.4001 12.701C11.6701 12.971 11.9301 13.211 12.2001 13.441C12.4601 13.661 12.68 13.811 12.85 13.901C12.88 13.911 12.9101 13.931 12.9401 13.941C12.9801 13.961 13.0201 13.961 13.0701 13.961C13.1601 13.961 13.2201 13.931 13.2801 13.871L13.66 13.491C13.79 13.361 13.9101 13.271 14.0201 13.211C14.1401 13.141 14.2501 13.101 14.3801 13.101C14.4801 13.101 14.5801 13.121 14.6901 13.171C14.8001 13.221 14.92 13.281 15.04 13.371L16.7001 14.551C16.8301 14.641 16.92 14.751 16.98 14.871C17.03 15.001 17.0601 15.121 17.0601 15.261C17.0001 15.431 16.9601 15.621 16.8801 15.801Z" fill="white" />
                                </svg>
                            </div>
                        </a>
                        <a href="https://instagram.com/puturifkidy" target="_blank">
                            <div class="icon">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.19 2.08105H7.81C4.17 2.08105 2 4.25105 2 7.89105V16.2611C2 19.9111 4.17 22.0811 7.81 22.0811H16.18C19.82 22.0811 21.99 19.9111 21.99 16.2711V7.89105C22 4.25105 19.83 2.08105 16.19 2.08105ZM12 15.9611C9.86 15.9611 8.12 14.2211 8.12 12.0811C8.12 9.94105 9.86 8.20105 12 8.20105C14.14 8.20105 15.88 9.94105 15.88 12.0811C15.88 14.2211 14.14 15.9611 12 15.9611ZM17.92 6.96105C17.87 7.08105 17.8 7.19105 17.71 7.29105C17.61 7.38105 17.5 7.45105 17.38 7.50105C17.26 7.55105 17.13 7.58105 17 7.58105C16.73 7.58105 16.48 7.48105 16.29 7.29105C16.2 7.19105 16.13 7.08105 16.08 6.96105C16.03 6.84105 16 6.71105 16 6.58105C16 6.45105 16.03 6.32105 16.08 6.20105C16.13 6.07105 16.2 5.97105 16.29 5.87105C16.52 5.64105 16.87 5.53105 17.19 5.60105C17.26 5.61105 17.32 5.63105 17.38 5.66105C17.44 5.68105 17.5 5.71105 17.56 5.75105C17.61 5.78105 17.66 5.83105 17.71 5.87105C17.8 5.97105 17.87 6.07105 17.92 6.20105C17.97 6.32105 18 6.45105 18 6.58105C18 6.71105 17.97 6.84105 17.92 6.96105Z" fill="white" />
                                </svg>
                            </div>
                        </a>
                        <a href="index.php">
                            <div class="icon">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.1066 8.71529C20.0826 8.49182 20.0546 8.31274 20.0316 8.18511L21.9161 5.3584C22.0345 5.18068 22.027 4.94731 21.8974 4.77756C21.7677 4.60781 21.5446 4.53917 21.3419 4.60671L18.7212 5.48027C18.5827 5.27371 18.3773 5.00125 18.1036 4.7275C17.5491 4.173 16.6794 3.58105 15.5 3.58105C14.2775 3.58105 13.3727 3.92323 12.7266 4.485C12.0872 5.041 11.75 5.76974 11.5775 6.45979C11.4052 7.14894 11.3898 7.82716 11.4147 8.32477C11.422 8.46989 11.4327 8.60123 11.4444 8.71489C10.1893 8.9818 8.87591 8.57293 7.58934 7.8094C6.17064 6.96746 4.87015 5.74406 3.85358 4.7275C3.71259 4.58651 3.50131 4.54277 3.31593 4.61618C3.13054 4.6896 3.0065 4.86614 3.00027 5.06544C2.87287 9.14225 3.71338 14.0768 7.51119 16.5791C5.9138 17.4432 4.34766 17.8462 2.43801 18.0849C2.21938 18.1122 2.04441 18.2795 2.00721 18.4966C1.97001 18.7138 2.07935 18.9297 2.27642 19.0283C7.43512 21.6076 14.1199 21.4212 17.9 16.3811C19.467 14.2917 19.9921 12.197 20.1233 10.6226C20.1888 9.83625 20.1563 9.17914 20.1066 8.71529Z" fill="white" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="quick-links">
                    <p class="heading">
                        Quick Links
                    </p>
                    <div class="link">
                        <a href="index.php#home">
                            <p>
                                Home
                            </p>
                        </a>
                        <a href="index.php#aboutMe">
                            <p>
                                About Me
                            </p>
                        </a>
                        <a href="index.php#ourProject">
                            <p>
                                Project
                            </p>
                        </a>
                        <a href="index.php#services">
                            <p>
                                Services
                            </p>
                        </a>
                        <a href="index.php#contactMe">
                            <p>
                                Contact Me
                            </p>
                        </a>
                    </div>
                </div>
                <div class="quick-links">
                    <p class="heading">
                        Contact
                    </p>
                    <div class="link">
                        <a href="https://wa.me/0881038194017" target="_blank">
                            <p>
                                0881038194017
                            </p>
                        </a>
                        <a href="mailto:puturifki56@gmail.com" target="_blank">
                            <p>
                                puturifki56@gmail.com
                            </p>
                        </a>
                        <a href="index.php">
                            <p>
                                tokokita.com
                            </p>
                        </a>
                    </div>
                </div>

            </div>
            <div class="border"></div>

            <div class="copyright">
                <p>
                    Copyright© 2024 Rifki. All Rights Reserved.
                </p>
                <p>
                    Privacy Policy
                </p>
            </div>
        </div>
    </footer>

<?php
}
?>