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
            <img src="logo.png" width="150px" height="90px" alt="Logo">
        </div>
        <div>
            <ul class="nav-links">
                <?php 
                    session_start();
                    if(isset($_SESSION['login']) && $_SESSION['login'] === true){
                        // logged in
                        echo '<a id="loginIcon">
                                <img src="login.png" alt="shopping cart" height="50" width="50" id="loginlogo">
                              </a>';
                        echo '<div id="dropdownMenu" class="dropdown-content">';
                        $username = $_SESSION["username"]; // Retrieve username from session variable
                        echo "<p>Welcome, $username!</p>";
                        echo '<a href="#">Logout</a>';
                        echo '</div>';
                    } else {
                        // not logged in
                        echo '<a href="../../HanyaKipas/LoginRegister/LoginGUI.php">
                                <img src="login.png" alt="shopping cart" height="50" width="50" id="loginlogo">
                              </a>';
                    }
                ?>
            </ul>
        </div>
    </nav>

    <section id="slidershow-container">
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
            <img src="cellingfan.png" alt="ceilingfan">
            <p>Natural, Comfortable and Relaxing</p>
            <br>
            <a href="#">View More >></a>
        </div>
        <div id="table-fan">
            <img src="tablefan.png" alt="tablefan">
            <p>Feel a Greater Breeze Experience</p>
            <br>
            <a href="#">View More >></a>
        </div>
        <div id="bladeless-fan">
            <img src="bladelessfan.png" alt="bladelessfan">
            <p>Cool Comfort, No Blades Attached </p>
            <br>
            <a href="#">View More >></a>
        </div>
    </section>
    <br>
    <section id="tipsandmanual">
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
    <script>
        document.getElementById("loginIcon").addEventListener("click", function() {
    document.getElementById("dropdownMenu").classList.toggle("show");
});

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('#loginIcon')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
    </script>
</body>
</html>
