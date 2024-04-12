<!-- Bladeless Fan -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <title>Bladeless Fan</title>

        <!-- StyleSheets -->
        <link rel="stylesheet" href="../styles.css">
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap">

        <style>
        .swiper-slide img{
            width: 250px;
            height: 875px;
            object-position: cover;
        }
        </style>

    </head>
    <body>
        <?php
            $servername = "localhost:3308";
            $username = "root";
            $password = "";
            $dbname = "hanyakipas";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            //check if user is login or not
            if($_SESSION['login'] != 1){
                echo '<script> alert("PLEASE LOGIN BEFORE PURCHASING!")';
                header("refresh: 5; url = ../../HanyaKipas2/LoginRegister/LoginGUI.php");
                die();
            }else{
                //Pull Session variable named cartItems and push it to cart
                echo '<script> var jsonString = ' . json_encode($_SESSION["cartItems"]) . ';  let listCarts = JSON.parse(jsonString); reloadCarts()</script>';
            }
        ?>
        <section class="logout-header">
            <div class="header-detail">
                <header>
                    <a href="../../../HanyaKipas2/Homepage/index.php"><img src="../logo.png"></a></img>
                    <div class="shopping-cart">
                        <img src="shopping-cart.png">
                        <span class="shopping-cart-quant">0</span>
                    </div>
                </header>

                <div class="list">

                </div>
            </div>
        </section>
        <section class="cart-display">
            <div class="cart">
                <h1>Cart</h1>
                <ul class="list-cart"></ul>
                <div class="check-out">
                    <div class="total">0</div>
                    <div class="close-shopping-cart">Close</div>
                </div>
            </div>
        </section>
        <section class="logout-page">
            <div class="logout-details">
                <div class="logout-text">
                    <h3>Log Out?</h3><br><br>
                    <div class="logout-btn">
                        <span class="glyphicon glyphicon-log-out"></span> Log out
                    </div>
                    
                    <!-- logout Page -->
                    <a href="xxx" class="logout-page-btn">Back to logout Page</a>
                </div>
            </div>
        </section>
        
        <!-- To destroy the Session and Clear all Session variables after LogOut is clicked -->
        <script>
            let logout = document.querySelector('logout-btn');

            logout.addEventListener('click', ()=>{
                <?php 
                    session_unset();
                    session_destroy();
                ?>;
            })
        </script>

        <!-- Cart javascript -->
        <script src="scripts.js"></script>
         
        <!-- Convert the listCart javascript array to php Session array -->
        <?php
            // To get the JSON string from list cart
            $jsonString = $_POST['listCartsJSON'];
            
            //Clear $_SESSION['cartItems'] to avoid redundency
            if (isset($_SESSION['cartItems'])){
                unset($_SESSION['cartItems']);
            }
            //Append the JSON string to $_SESSION['cartItems']
            $_SESSION['cartItems'] = json_decode($jsonString, true);
        ?>
        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    </body>
</html>
