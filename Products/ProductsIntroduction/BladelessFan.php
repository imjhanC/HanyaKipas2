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
        <section class="product-header">
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
        <section class="product-page">
            <div class="product-details">
                <div class="product-image">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="../ProductsImage/BladelessFan/bladelessfan1.png">
                            </div>

                            <div class="swiper-slide">
                                <img src="../ProductsImage/BladelessFan/bladelessfan2.png">
                            </div>

                            <div class="swiper-slide">
                                <img src="../ProductsImage/BladelessFan/bladelessfan3.png">
                            </div>

                            <div class="swiper-slide">
                                <img src="../ProductsImage/BladelessFan/bladelessfan4.png">
                            </div>

                            <div class="swiper-slide">
                                <img src="../ProductsImage/BladelessFan/bladelessfan5.png">
                            </div>

                            <div class="swiper-slide">
                                <img src="../ProductsImage/BladelessFan/bladelessfan6.png">
                            </div>
                        </div>
                        <div class="slider-btn">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>

                <div class="product-text">
                    <span class="product-category">BLADELESS FAN</span>
                    <h3>Bladeless Fan</h3>
                    
                    <!-- Use Database to get price -->
                    <!-- Product Details -->
                    <?php
                        // Establish connection to database
                        /*
                        $productType = 'bladelessfan';

                        $query = "SELECT * FROM product WHERE producttype = ?";
                        $stmt = $conn->prepare($query);
                        $stmt->bind_param("s", $productType);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $stmt->close();

                        if($result-> num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo '<span class="product-price">RM ' . $row['productprice'] . '</span>'
                            echo '<p>' . $row['productdesc'] . '"</p>';
                        }
                        */
                    ?>
                    <span class="product-price">RM 6969.00</span>
                    <p>To make fans work quietly, manufacturers use slow-running motors to spin the blades. This reduces noise but also reduces power, producing weak airflow. To make powerful fans, they use fast motors to spin the blades. But fast motors create more noise. Powerful and quiet is very difficult to achieve in a conventional fan. The new Dyson Cool™ fans have been engineered to be quieter, use less energy – yet generate powerful airflow.</p>

                    <!-- model == Diameter of Fan head -->
                    <div class="product-model-container">
                        <strong>Select Model:-</strong>

                        <div class="product-model">
                            <?php
                                /*if($result-> num_rows > 0) {
                                    while($row = $result->fetch_assoc()){
                                        echo '<input type="checkbox" class="model-checkbox" id="' . $row['productname'] . '">';
                                        echo '<label for="' . $row['productname'] . '" class="model-label">' . $row['productname'] . '</label>';
                                        $products = array(array("productname" => $row['productname'], "productprice" => $row['productprice'], "productqty" => $row['productqty'], "quantity" => 0 ));
                                    }
                                }

                                $conn->close();
                                */
                            ?>
                            <input type="checkbox" class="model-checkbox" id="b101">
                            <label for="b101" class="model-label">B101</label>

                            <input type="checkbox" class="model-checkbox" id="b201">
                            <label for="b201" class="model-label">B201</label>
                        </div>
                    </div>
                    <div class="product-btn">
                        <script>
                            let jsonString = <?php echo json_encode($products); ?>
                            let products = JSON.parse(jsonString);
                                
                            products.forEach(items => {
                                checkboxID = document.getElementById(products.productname).checked ? products.productname : checkboxID; 
                            });
                            document.write('<button onclick="addToCart(checkboxID)" class="add-to-cart">Add To Cart</button>');
                        </script>
                    </div>

                    <!-- Product Page -->
                    <a href="xxx" class="product-page-btn">Back to Product Page</a>
                </div>
            </div>
        </section>
        
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

        <!-- Checkbox sselector -->
        <script type="text/javascript">
            $('.model-checkbox').on('change', function(){
                $('.model-checkbox').not(this).prop('checked', false);
            });
        </script>

        <!-- Swiper -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                450: {
                slidesPerView: 2,
                spaceBetween: 1,
                },
                820: {
                slidesPerView: 1,
                spaceBetween: 0,
                },
                1024: {
                slidesPerView: 3,
                spaceBetween: 1,
                },
            },
            });
        </script>
    </body>
</html>
