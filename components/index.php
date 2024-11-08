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

    function homePage(){
        
    }

?>