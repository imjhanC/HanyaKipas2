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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- navigation bar -->
        <nav id="desktop-nav">
            <div class="text-logo">
                <img src ="logo.png" width =150px height =90px></img>
            </div>
            <div>
                <ul class="nav-links">

                    <a href="../../HanyaKipas/Homepage/index.php" class="home">Home</a>
                    <a href="../../HanyaKipas/Products/ProductPage.php" class="home">Products</a>
                    <a href="../../HanyaKipas/ContactUs/ContactUs.php" class="home">Contact Us</a>

                    <a href="../../HanyaKipas/Products/ShoppingCart.php"><img src="shopping-cart.png" alt="shopping cart" id="shopping" height =50 width =50></a></img>
                         
                    
                    <?php 
                        session_start();
                        if(isset($_SESSION['login']) && $_SESSION['login'] === true){
                            // logged in
                            $username = $_SESSION['username'];
                            echo '<a>
                                    <img src="login.png" alt="shopping cart" height="50" width="50" id="loginlogo" onclick="myFunction()">
                                 </a>
                                 <div id="myDropdown" class="dropdown-content">
                                    <br>
                                    <h1> Welcome ' . $username . ' ! </h1>
                                    <br>
                                    <hr>
                                    <a href="logout.php">Logout </a>
                                </div>';
                                    //$username = $_SESSION['username']; // Retrieve username from session variable
                                    //echo "Welcome, $username!";
                        } else {
                            // not logged in
                            echo '<a href="../../HanyaKipas/LoginRegister/LoginGUI.php">
                                    <img src="login.png" alt="shopping cart" height="50" width="50" id="loginlogo">
                                    </a>';
                        }
                    ?>
                    </div>
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
        <br>
        <br>
        <section id= "customer">
            <div id="customer">
                <h1> Let's see HanyaKipas customer testimonial ! </h1>
            </div>
            <br>
            <br>
            <br>
            <div id='zhanjun'>
                <img src="zhanjun.jpg" alt="zhanjun" id="zhanjun"></img>
            </div>
            <br>
            <div id='zhanjun-info'>
                <h1> Lee Zhan Jun </h1>
                <p> I love HanyaKipas because their delivery service is prompt and OMG they gave me another free fan tho ! How nice of them . I definitely recommend fans from them !<p>
            </div>
            <br>
            <br>
            <br>
            <div id='zhanjun'>
                <img src="kyewen.jpg" alt="kyewen" id="zhanjun"></img>
            </div>
            <br>
            <div id='zhanjun-info'>
                <h1> Tan Kye Wen </h1>
                <p> I ordered a fan from HanyaKipas and they delivered the fan within 10 minutes to my doorsteps.<p>
            </div>
            <br>
            <br>
            <br>
            <div id='zhanjun'>
                <img src="jhan.jpg" alt="jhan" id="zhanjun"></img>
            </div>
            <br>
            <div id='zhanjun-info'>
                <h1> Cheng Jia Han </h1>
                <p> Look at the fan beside me , HanyaKipas is the BESTTT<p>
            </div>
            <br>
            <br>
            <br>
        </section>
        <footer class="footer">
            <div id="copyright">
                <p>Copyright &#169 HanyaKipas Sdn. Bhd 2024</p>
                <p>HanyaKipas Sdn. Bhd || The best fan selling company in Malaysia (Co No.6969)</p>
            </div>
            <br>
            <div id="footerbuttons">
                <a href="../../HanyaKipas/Homepage/index.php">Home</a>
                <a href="../../HanyaKipas/Products/ProductPage.php" id="productfooter">Products</a>
                <a href="../../HanyaKipas/ContactUs/ContactUs.php" id="contactUsfooter">Contact Us</a>
            </div>
        </footer>
        <script src="script.js"></script>
    </body>
</html>