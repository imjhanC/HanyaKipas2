<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <!--ADD LOGO HERE-->
        <title>HanyaKipas : The only fans selling website</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    </head>
    <body>
        <!-- navigation bar -->
        <nav id="desktop-nav">
            <div class="text-logo">
                <img src ="logo.png" width =150px height =90px></img>
            </div>
            <div>
                <ul class="nav-links">
                    <div id="search">
                        <svg viewBox="0 0 420 60" xmlns="http://www.w3.org/2000/svg">
                            <rect class="bar"/>
                            
                            <g class="magnifier">
                                <circle class="glass"/>
                                <line class="handle" x1="32" y1="32" x2="44" y2="44"></line>
                            </g>
                    
                            <g class="sparks">
                                <circle class="spark"/>
                                <circle class="spark"/>
                                <circle class="spark"/>
                            </g>
                    
                            <g class="burst pattern-one">
                                <circle class="particle circle"/>
                                <path class="particle triangle"/>
                                <circle class="particle circle"/>
                                <path class="particle plus"/>
                                <rect class="particle rect"/>
                                <path class="particle triangle"/>
                            </g>
                            <g class="burst pattern-two">
                                <path class="particle plus"/>
                                <circle class="particle circle"/>
                                <path class="particle triangle"/>
                                <rect class="particle rect"/>
                                <circle class="particle circle"/>
                                <path class="particle plus"/>
                            </g>
                            <g class="burst pattern-three">
                                <circle class="particle circle"/>
                                <rect class="particle rect"/>
                                <path class="particle plus"/>
                                <path class="particle triangle"/>
                                <rect class="particle rect"/>
                                <path class="particle plus"/>
                            </g>
                        </svg>
                        <input type=search name=q aria-label="Search for inspiration"/>
                    </div>
                    
                    <div id="results">
                        
                    </div>
                    <a href="#xxx"><img src="shopping-cart.png" alt="shopping cart" height =50 width =50></a></img>
<<<<<<< HEAD
                    <?php 
                    if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
                        echo "<a>";
                        echo "<img src='login.png' alt='login' height='50' width='50' id='loginlogo'>";
                        echo "</a>";
                    } else {
                        echo "<a href='../../HanyaKipas/LoginRegister/LoginGUI.php'>";
                        echo "<img src='login.png' alt='login' height='50' width='50' id='loginlogo'>";
                        echo "</a>";
                    } 
                    ?>
=======
                    <div class="dropdown">
                        <a href="../../HanyaKipas/LoginRegister/LoginGUI.php">
                            <img src="login.png" alt="shopping cart" height="50" width="50" id="loginlogo" onclick="toggleDropdown()">
                        </a>
                        <div class="dropdown-content" id="dropdownContent">
                            <a href="#">Account Info</a>
                            <a href="../../HanyaKipas2/LoginRegister/logout.php">Logout</a>
                        </div>
                    </div>
>>>>>>> bbfd4fd9c654be11ef9aec3695bbf5f35016b965
                </ul>
            </div>
        </nav>

        <section id =" slidershow-container">
            <!-- Slideshow container -->
            <div class="slider">
                <img id="slide-1" src="fan1.jpg"/>
                <img id="slide-2" src="fan2.jpeg"/>
                <img id="slide-3" src="fan3.jpg"/>
            </div>
        </section>
       
        <br>
        <br>
        <br>
        <section id="Collection">
            <div id="CollectionText">
                <h1>Hanya Kipas Exclusive Fan Collection</h1>
                <br>
            </div>
            <div id="ceiling-fan">
                <img src="cellingfan.png" alt="cellingfan"></img>
                <p>Natural, Comfortable and Relaxing</p>
                <br>
                <a href="#">View More >></a>
            </div>
            <div id="table-fan">
                <img src="tablefan.png" alt="tablefan"></img>
                <p>Feel a Greater Breeze Experience</p>
                <br>
                <a href="#">View More >></a>
            </div>
            <div id="bladeless-fan">
                <img src="bladelessfan.png" alt="bladelessfan"></img>
                <p>Cool Comfort, No Blades Attached </p>
                <br>
                <a href="#">View More >></a>
            </div>
        </section>
        <br>
        <section id= "tipsandmanual">
            <div>

            </div>
            <div>
                
            </div>
        </section>
        <footer class="footer">
            <div id="copyright">
                <p>Copyright &#169 HanyaKipas Sdn. Bhd 2024</p>
                <p>HanyaKipas Sdn. Bhd || The best fan selling company in Malaysia (Co No.6969)</p>
            </div>
            <br>
            <div id="footerbuttons">
                <a id="aboutfooter">About HanyaKipas </a>
                <a id="productfooter">Products</a>
                <a id="privacypolicyfooter">Privacy Policy</a>
                <a id="contactUsfooter">Contact Us</a>
            </div>
        </footer>
        <script src="script.js"></script>
    </body>
</html>