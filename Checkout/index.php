<!-- Bladeless Fan -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <title>Check Out</title>

        <!-- StyleSheets -->
        <link rel="stylesheet" href="../styles.css">
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap">

    </head>
    <body>
        <?php
            /*$servername = "localhost:3308";
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
            }*/
        ?>
        <section class="product-page">
            <div class="product-details">
                <div class="product-text">
                    <div class="cart">
                        <h1>Cart</h1>
                        <ul class="list-cart"></ul>
                        <div class="check-out">
                            <div class="total">0</div>
                            <div class="check-out-shopping-cart"><a href="checkOut.php">CheckOut</a></div>
                        </div>
                    </div>
                    <div class="payment-info">
                        <form id="payment-form" action="#" method="POST">
                            <h1>Customer Information</h1>
                            <input type="text" id="customerName" name="customerName" placeholder="Full Name" required/>
                            <input type="text" id="customerDesc" name="customerDesc" placeholder="Desc" required/>
                            <input type="text" id="customerShipAddress" name="customerShipAddress" placeholder="Address" required/>
                            <input type="text" id="customerContactNum" name="customerContactNum" placeholder="Phone-Number" required/>

                            <br><br>
                            <h1>Enter Credit/Debit Card Information</h1>

                            <label>Card Number:</label><br>
                            <input type="text"  id="card-no" name="card-no" placeholder="1234 1234 1234 1234" required maxlength="16"/>

                            <label>Card Holder Name:</label><br>
                            <input type="text"  id="card-name" name="card-name" placeholder="JOSEPH JON" required/>

                            <label>Expiration Date:</label><br>
                            <input type="text" id="exp-date" name="exp-date" placeholder="01/32" required minlength="5" maxlength="5" />

                            <label>CVV:</label><br>
                            <input type="text" id="cvv" name="cvv" placeholder="144" required minlength="3" maxlength="4" />
                            <button type="submit">Check Out</button>
                        </form>
                        <?php
                            //Update Order Database
                            if($_SERVER["REQUEST_METHOD"] == "POST"){
                                foreach($_SESSION['cartItems'] as $item) {
                                    $query = "INSERT INTO order VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                                    $stmt = $conn->prepare($query);
                                    $stmt->bind_param("ssssssssss", $_REQUEST['customerName'], $_REQUEST['customerDesc'], $_REQUEST['customerShipAddress'], $_REQUEST['customerContactNum'], "test.jpg", $item['productname'], $item['$productdesc'], $item['produducttype'], $item['quantity']);
                                    $stmt->execute();
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <script src='scripts.js'></script>
    </body>
</html>
