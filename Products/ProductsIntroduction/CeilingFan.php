<!-- Bladeless Fan -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <title>Bladeless Fan</title>

        <!-- StyleSheets -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap">

        <style>
        .swiper-slide img{
            width: 750px;
            height: 750px;
            object-position: cover;
        }
        </style>
        <link rel="stylesheet" href="style1.css">
        
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
            
            if($_SESSION['login'] != 1){
                echo '<script> alert("PLEASE LOGIN BEFORE PURCHASING!")';
                header("refresh: 5; url = ../../HanyaKipas2/LoginRegister/LoginGUI.php");
                die();
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
                                <img src="../ProductsImage/CellingFan/ceilingfan1.jpg">
                            </div>

                            <div class="swiper-slide">
                                <img src="../ProductsImage/CellingFan/ceilingfan2.jpg">
                            </div>

                            <div class="swiper-slide">
                                <img src="../ProductsImage/CellingFan/ceilingfan3.jpg">
                            </div>

                            <div class="swiper-slide">
                                <img src="../ProductsImage/CellingFan/ceilingfan4.jpg">
                            </div>

                            <div class="swiper-slide">
                                <img src="../ProductsImage/CellingFan/ceilingfan5.jpg">
                            </div>
                        </div>
                        <div class="slider-btn">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>

                <div class="product-text">
                    <span class="product-category">CEILING FAN</span>
                    <h3>Ceiling Fan</h3>

                    <!-- Use Database to get price -->
                    <!-- Product Details -->
                    <?php
                        // Establish connection to database
                        /*
                        $productType = 'ceilingfan';

                        $query = "SELECT * FROM product WHERE producttype = ?";
                        $stmt = $conn->prepare($query);
                        $stmt->bind_param("s", $productType);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        if($result-> num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo '<span class="product-price">RM ' . $row['productdesc'] . '</span>'
                            echo '<p>' . $row['productdesc'] . '"</p>';
                        }
                        */
                    ?>
                    <span class="product-price">RM 42000.00</span>
                    <p>Add sleek, modern style to your kitchen or covered porch with this brushed nickel ceiling fan – the CF69 Ceiling Fan. Its nine blades feature a high-fashion rectangular shape that adds unique style to your home. Six energy-efficient speed settings, plus a reverse air flow feature, make it easy to maintain the ideal comfort level all year long, and the remote control allows you to operate the fan and light from anywhere in the room.</p>
                    
                    <!-- model == Diameter of Fan head -->
                    <div class="product-model-container">
                        <strong>Select Model:-</strong>
                        
                        <div class="product-model">
                            <?php
                                /*if($result-> num_rows > 0) {
                                    while($row = $result->fetch_assoc()){
                                        echo '<input type="checkbox" class="model-checkbox" id="' . $row['productname'] . '">';
                                        echo '<label for="' . $row['productname'] . '" class="model-label">' . $row['productname'] . '</label>';
                                        $products = array(array("productname" => $row['productname'], "productprice" => $row['productprice'], "quantity" => $row['productqty'] ));
                                    }
                                }

                                $conn->close();
                                */
                            ?>
                            <input type="checkbox" class="model-checkbox" id="c101">
                            <label for="c101" class="model-label">C101</label>

                            <input type="checkbox" class="model-checkbox" id="c201">
                            <label for="c201" class="model-label">C201</label>
                        </div>
                    </div>
                    <div class="product-btn">
                        <script>
                            let products = <?php echo json_encode($products); ?>

                            checkboxID = document.getElementById(item.productname).checked ? item.productname : checkboxID;
                            document.write('<button onclick="addToCart()" class="add-to-cart">Add To Cart</button>');
                        </script>
                    </div>

                    <!-- Product Page -->
                    <a href="/xxx" class="product-page-btn">Back to Product Page</a>
                </div>
            </div>
        </section>

        <script src="scripts.js"></script>
         <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

        <!-- Swiper -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Checkbox sselector -->
        <script type="text/javascript">
            $('.model-checkbox').on('change', function(){
                $('.model-checkbox').not(this).prop('checked', false);
            });
        </script>

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
                slidesPerView: 1,
                spaceBetween: 1,
                },
            },
            });
        </script>
    </body>
</html>
