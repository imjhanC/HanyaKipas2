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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Platypi:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- navigation bar -->
        <nav id="desktop-nav">
            <div class="text-logo">
                <img src ="logo.png" width =150px height =90px></img>
            </div>
            <div>
                <ul class="nav-links">

                    <a href="../../../HanyaKipas/Homepage/index.php" class="home">Home</a>
                    <a href="../../../HanyaKipas/Products/ProductPage.php" class="home">Products</a>
                    <a href="../../../HanyaKipas/ContactUs/ContactUs.php" class="home">Contact Us</a>

                    <a href="../../../HanyaKipas/Products/ShoppingCart.php"><img src="shopping-cart.png" alt="shopping cart" id="shopping" height =50 width =50></a></img>
                         
                    
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
                            echo '<a href="../../../HanyaKipas/LoginRegister/LoginGUI.php">
                                    <img src="login.png" alt="shopping cart" height="50" width="50" id="loginlogo">
                                    </a>';
                        }
                    ?>
                    </div>
                </ul>
            </div>
        </nav>
        <section>
            <h1 id='bladeless'> Ceiling fan </h1>
        <?php
            $servername = "localhost:3308";
            $username = "root";
            $password = ""; // Empty password
            $dbname = "hanyakipas";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Query to select bladeless fans
            $sql = "SELECT * FROM product WHERE producttype = 'celling fan'";
            $result = mysqli_query($conn, $sql);
        ?>
        <div class="slideshow-container">
            <?php
            $slideIndex = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $slideIndex++;
                echo '<div class="mySlides fade">';
                echo '<img src="data:image/jpeg;base64,' . base64_encode($row['productimage']) . '">';
                echo '<div class="caption">' . $row['productname'] . '</div>';
                echo '<div class="product-info">';
                echo '<p>' . $row['productprice'] . '</p>';
                echo '<p>' . $row['productdesc'] . '</p>';
                echo '<p>' . $row['producttype'] . '</p>';
                echo '<p>' . $row['productqty'] . '</p>';
                echo '</div>'; // Close product-info div
                echo '</div>'; // Close mySlides fade div
            }
            ?>
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
        </div>

        <div class="dots">
            <?php
            // Reset pointer to the beginning
            mysqli_data_seek($result, 0);

            $dotIndex = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $dotIndex++;
                echo '<span class="dot" onclick="currentSlide(' . $dotIndex . ')"></span>';
            }
            ?>
        </div>
        <div class="product-info-container">
            <!-- Product info will be displayed here -->
        </div>
        <br>
        <div class="btn-container">
            <button class="btn" onclick="navigateToPage('../../../HanyaKipas/Homepage/Intro/cellingfan.php')">
                <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
                    <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
                </svg>
                <span class="text">Ceiling fan</span>
            </button>
            <button class="btn" onclick="navigateToPage('../../../HanyaKipas/Homepage/Intro/tablefan.php')" data-type="table fan">
                <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
                    <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
                </svg>
                <span class="text">Table fan</span>
            </button>
            <button class="btn" onclick="navigateToPage('../../../HanyaKipas/Homepage/Intro/bladelessfan.php')" data-type="bladeless fan">
                <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
                    <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
                </svg>
                <span class="text">Bladeless fan</span>
            </button>
        </div>
        <br>
        </section>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <footer class="footer">
            <div id="copyright">
                <p>Copyright &#169 HanyaKipas Sdn. Bhd 2024</p>
                <p>HanyaKipas Sdn. Bhd || The best fan selling company in Malaysia (Co No.6969)</p>
            </div>
            <br>
            <div id="footerbuttons">
                <a href="../../../HanyaKipas/Homepage/index.php">Home</a>
                <a href="../../../HanyaKipas/Products/ProductPage.php" id="productfooter">Products</a>
                <a href="../../../HanyaKipas/ContactUs/ContactUs.php" id="contactUsfooter">Contact Us</a>
            </div>
        </footer>
        <script src="script.js"></script>
    </body>
</html>