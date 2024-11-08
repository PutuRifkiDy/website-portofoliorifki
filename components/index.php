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
                
            </div>
        <?php
    }

?>