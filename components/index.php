<?php 
    function iconNavbar(){
        ?>
            <svg width="300" height="46" viewBox="0 0 300 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Lingkaran oranye -->
                <rect x="0.245728" width="46" height="46" rx="23" fill="#0077FF"/>
            
                <!-- Teks Rifki.Dev di dalam lingkaran -->
                <text x="23" y="30" font-family="Arial" font-size="20" font-weight="bold" fill="white" text-anchor="middle">RD</text>
            
                <!-- Teks Rifs di luar lingkaran -->
                <text x="60" y="30" font-family="Arial" font-size="20" font-weight="bold" fill="#0077FF">Rifki.Dev</text>
            </svg>
        <?php
    }

    function navbar(){
        ?>
            <div class="container-navbar">
                <div class="wrapper-navbar">

                    <div class="icon-navbar">
                        <?php iconNavbar();?>
                    </div>

                    <div class="navbar-route">

                        <div class="link-nav">
                            <a href="">
                                Home 
                            </a>
                            <a href="">
                                About Me
                            </a>
                            <a href="">
                                Services
                            </a>
                            <a href="">
                                Blog
                            </a>
                            <a href="">
                                Contact Me
                            </a>
                        </div>

                        <a href="">
                            <button type="submit">
                                Login
                            </button>
                        </a>

                    </div>

                </div>
            </div>
        <?php
    }

    function iconDownloadCV(){
        ?>
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_304_31)">
                    <path d="M10.6309 1.125C10.4011 1.12506 10.1807 1.21638 10.0181 1.3789C9.85563 1.54142 9.7643 1.76183 9.76425 1.99167V11.8788L6.44987 8.56438C6.36938 8.4839 6.27383 8.42007 6.16867 8.37652C6.06351 8.33297 5.9508 8.31055 5.83698 8.31057C5.60711 8.31059 5.38667 8.40192 5.22414 8.56448C5.06161 8.72703 4.97031 8.9475 4.97034 9.17737C4.97036 9.40723 5.06169 9.62768 5.22425 9.79021L10.018 14.5833C10.1806 14.7458 10.401 14.8371 10.6309 14.8371C10.8608 14.8371 11.0812 14.7458 11.2438 14.5833L16.0376 9.78938C16.2002 9.62684 16.2915 9.4064 16.2915 9.17653C16.2915 8.94667 16.2002 8.7262 16.0377 8.56364C15.8752 8.40109 15.6547 8.30975 15.4248 8.30973C15.1949 8.30972 14.9745 8.40101 14.8119 8.56354L11.4976 11.8788V1.99167C11.4975 1.76183 11.4062 1.54142 11.2437 1.3789C11.0812 1.21638 10.8607 1.12506 10.6309 1.125Z" fill="#0077FF"/>
                    <path d="M2.12173 12.5845C1.89188 12.5845 1.67144 12.6758 1.50891 12.8382C1.34637 13.0008 1.25507 13.2213 1.25507 13.4511V16.3069C1.25611 17.2529 1.63238 18.1599 2.3013 18.8288C2.97023 19.4978 3.87719 19.874 4.82319 19.875H16.437C17.383 19.874 18.29 19.4978 18.9588 18.8288C19.6277 18.1599 20.0041 17.2529 20.0051 16.3069V13.4511C20.0051 13.3373 19.9826 13.2246 19.9391 13.1195C19.8955 13.0143 19.8317 12.9188 19.7512 12.8382C19.6707 12.7578 19.5752 12.694 19.4701 12.6505C19.365 12.6069 19.2522 12.5845 19.1384 12.5845C19.0246 12.5845 18.9118 12.6069 18.8067 12.6505C18.7016 12.694 18.6061 12.7578 18.5256 12.8382C18.4451 12.9188 18.3813 13.0143 18.3377 13.1195C18.2942 13.2246 18.2717 13.3373 18.2717 13.4511V16.3069C18.2712 16.7934 18.0777 17.2598 17.7337 17.6037C17.3897 17.9477 16.9234 18.1411 16.437 18.1417H4.82319C4.33674 18.1411 3.87038 17.9477 3.52641 17.6037C3.18243 17.2598 2.98895 16.7934 2.9884 16.3069V13.4511C2.98842 13.3373 2.96603 13.2246 2.92249 13.1195C2.87894 13.0143 2.8151 12.9187 2.73462 12.8382C2.65413 12.7577 2.55859 12.6939 2.45342 12.6504C2.34827 12.6068 2.23555 12.5845 2.12173 12.5845Z" fill="#0077FF"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_304_31">
                    <rect width="20" height="20" fill="white" transform="translate(0.630066 0.5)"/>
                    </clipPath>
                </defs>
            </svg>
        <?php
    }

    function homePage(){
        ?>
            <div class="container-homePage">
                <div class="wrapper-homePage">
                    
                    <div class="deskripsi-homePage">
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
                            <button class="hire">
                                Hire me!
                            </button>
                            <button class="download-cv">
                                Download CV
                                <?php iconDownloadCV(); ?>
                            </button>
                        </div>
                    </div>

                    <div class="img-homePage">
                        <div class="home-img">
                            <img src="assets/Foto_terbaru-removebg-preview.png" alt="Foto Profil">
                        </div>
                
                        <!-- Label Teknologi dengan Ikon -->
                        <div class="label label-1" >
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

    function aboutMe(){
        ?>
            <div class="container-aboutMe">
                <div class="wrapper-aboutMe">
                    <div class="aboutMe-img">
                        <img src="assets/Foto_terbaru-removebg-preview.png" alt="">
                    </div>
                    <div class="aboutMe-contain">
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
                                <button>
                                    Main Skills
                                </button>
                                <button>
                                    Awards
                                </button>
                                <button>
                                    Education
                                </button>
                            </div>
                            <div class="aboutMe-content-nav">
                                <div id="main-skill" class="active">
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
                                <div id="rewards">

                                </div>
                                <div id="Education">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
    }

    function iconArrowLeft(){
        ?>
            <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.792893 7.29289C0.402369 7.68342 0.402369 8.31658 0.792892 8.7071L7.15685 15.0711C7.54738 15.4616 8.18054 15.4616 8.57107 15.0711C8.96159 14.6805 8.96159 14.0474 8.57107 13.6569L2.91421 8L8.57107 2.34314C8.96159 1.95262 8.96159 1.31946 8.57107 0.928931C8.18054 0.538406 7.54738 0.538406 7.15686 0.92893L0.792893 7.29289ZM26.5 7L14 7L14 9L26.5 9L26.5 7ZM14 7L1.5 7L1.5 9L14 9L14 7Z" fill="#0077FF"/>
            </svg>
        <?php
    }

    function iconArrowRight(){
        ?>
            <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.2071 8.70711C26.5976 8.31658 26.5976 7.68342 26.2071 7.29289L19.8431 0.928932C19.4526 0.538408 18.8195 0.538408 18.4289 0.928932C18.0384 1.31946 18.0384 1.95262 18.4289 2.34315L24.0858 8L18.4289 13.6569C18.0384 14.0474 18.0384 14.6805 18.4289 15.0711C18.8195 15.4616 19.4526 15.4616 19.8431 15.0711L26.2071 8.70711ZM0.5 9H13V7H0.5V9ZM13 9H25.5V7H13V9Z" fill="#0077FF"/>
            </svg>
        <?php
    }

    function iconDesignServices(){
        ?>
            <svg width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M69.2603 6.31401C66.7205 3.77427 62.5491 3.96089 60.2463 6.71728L49.8451 19.167L56.4075 25.7294L68.8572 15.328C71.6132 13.0251 71.7998 8.8536 69.2603 6.31401Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M73.9028 27.605V60.7532C73.9028 66.1243 69.5491 70.4796 64.1779 70.4796H55.1842C60.5554 70.4796 64.9091 66.1243 64.9091 60.7532V27.605H73.9028Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M13.0084 22.448C14.6244 22.448 15.9345 21.138 15.9345 19.5219C15.9345 17.9057 14.6244 16.5957 13.0084 16.5957C11.3923 16.5957 10.0822 17.9057 10.0822 19.5219C10.0822 21.138 11.3923 22.448 13.0084 22.448Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M23.3431 22.448C24.9591 22.448 26.2693 21.138 26.2693 19.5219C26.2693 17.9057 24.9591 16.5957 23.3431 16.5957C21.727 16.5957 20.4169 17.9057 20.4169 19.5219C20.4169 21.138 21.727 22.448 23.3431 22.448Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M33.6779 22.448C35.2938 22.448 36.604 21.138 36.604 19.5219C36.604 17.9057 35.2938 16.5957 33.6779 16.5957C32.0617 16.5957 30.7516 17.9057 30.7516 19.5219C30.7516 21.138 32.0617 22.448 33.6779 22.448Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M49.8453 19.1667L56.2503 11.5004C55.8996 11.4622 55.5438 11.4409 55.1828 11.4409H10.825C5.45391 11.4409 1.09863 15.7947 1.09863 21.1673V27.6044H37.8528C40.2049 24.7458 40.8173 21.0068 49.8453 19.1667Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M56.4089 25.7281C56.2788 26.3797 56.1131 27.0044 55.9166 27.6034H64.9091V21.1663C64.9091 20.3709 64.8115 19.5986 64.6314 18.8586L56.4089 25.7281Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M70.2859 13.6003C69.9313 14.2398 69.4549 14.8272 68.8571 15.3266L64.63 18.8584C64.81 19.5984 64.9076 20.3706 64.9076 21.166V27.6032H73.9013V21.166C73.9013 18.1091 72.4905 15.3833 70.2859 13.6003Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M55.9151 27.605C53.343 35.448 45.3297 38.6858 38.1957 34.7311C35.821 33.4146 35.3606 30.179 37.272 28.2506C37.4792 28.0415 37.6711 27.8258 37.8528 27.605H1.09863V60.7532C1.09863 66.1243 5.45391 70.4796 10.825 70.4796H55.1828C60.554 70.4796 64.9078 66.1243 64.9078 60.7532V27.605H55.9151Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M49.8459 19.167C40.1205 21.1492 40.1619 25.3352 37.2728 28.2501C35.3615 30.1787 35.8217 33.4141 38.1963 34.7307C45.8752 38.9876 54.574 34.9123 56.4081 25.7294L49.8459 19.167Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M24.914 41.6597H13.8416C11.7654 41.6597 10.0822 43.3429 10.0822 45.4192V56.4916C10.0822 58.5678 11.7654 60.251 13.8416 60.251H24.914C26.9903 60.251 28.6735 58.5678 28.6735 56.4916V45.4192C28.6735 43.3429 26.9903 41.6597 24.914 41.6597Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M53.4018 42.2483H37.5253C35.8654 42.2483 34.5198 43.5939 34.5198 45.2538C34.5198 46.9138 35.8654 48.2594 37.5253 48.2594H53.4019C55.0619 48.2594 56.4075 46.9138 56.4075 45.2538C56.4075 43.5939 55.0618 42.2483 53.4018 42.2483Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M53.4018 53.6514H37.5253C35.8654 53.6514 34.5198 54.997 34.5198 56.6569C34.5198 58.3169 35.8654 59.6625 37.5253 59.6625H53.4019C55.0619 59.6625 56.4075 58.3169 56.4075 56.6569C56.4075 54.9971 55.0618 53.6514 53.4018 53.6514Z" stroke="#0077FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        <?php
    }

    function services(){
        ?>
            <div class="container-services">
                <div class="heading-services">
                    <p class="heading">SERVICES</p>
                    <h1>Exploring My Design <span>Skills</span></h1>
                    <p>
                        We transform your ideas into a distinctive web project that both inspires you and captivates your customers
                    </p>
                </div>
                <div class="container-button-services">
                    <button>
                        <?php iconArrowLeft(); ?>
                    </button>
                    <button>
                        <?php iconArrowRight(); ?>
                    </button>
                </div>
                <div class="contain-services">
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
                            <div class="learn-more-services">
                                <p>
                                    Learn more
                                </p>
                                <?php iconArrowRight(); ?>
                            </div>
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
                            <div class="learn-more-services">
                                <p>
                                    Learn more
                                </p>
                                <?php iconArrowRight(); ?>
                            </div>
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
                            <div class="learn-more-services">
                                <p>
                                    Learn more
                                </p>
                                <?php iconArrowRight(); ?>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        <?php
    }


    function ourMileStones(){
        ?>
            <div class="container-mileStones">
                <div class="wrapper-mileStones">
                    <div class="heading-mileStones">
                        <p>
                            OUR MILESTONES
                        </p>
                        <h1>
                            What sets our studio apart for your projects?
                        </h1>
                    </div>
                    <div class="container-card-mileStones">
                        <div class="card-mileStones">
                            <h1>
                                8300+
                            </h1>
                            <p>
                                Figma ipsum component variant main layer. Hand.
                            </p>
                        </div>
                        <div class="card-mileStones">
                            <h1>
                                100%
                            </h1>
                            <p>
                                Figma ipsum component variant main layer. Union.
                            </p>
                        </div>
                        <div class="card-mileStones">
                            <h1>
                                3.5K
                            </h1>
                            <p>
                                Figma ipsum component variant main layer.
                            </p>
                        </div>
                        <div class="card-mileStones">
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

    function ourProject(){
        ?>
            <div class="container-ourProject">
                
            </div>
        <?php
    }
?>