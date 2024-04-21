<?php
session_start(); // Start the session at the beginning of the PHP script
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <title>HanyaKipas: Shopping Cart</title>
    <link rel="stylesheet" href="shoppingcartstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Platypi:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
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
            <img src ="logo.png" width="150px" height="90px" alt="Logo">
        </div>
        <div>
            <ul class="nav-links">
                    <?php 
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
            </ul>
        </div>
    </nav>
    <br>
    <section id='shopping-cart'>
        <h1 id='shopping-header'>Shopping cart</h1>
        <br>
        <br>
        <table border="1">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Product Type</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Database connection
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

                // Fetch products from database
                $sql = "SELECT c.productname, p.productimage, c.productprice, c.productqty, c.producttype 
                        FROM cart c 
                        INNER JOIN product p ON c.productname = p.productname";
                $result = $conn->query($sql);

                $total = 0;

                // Display products
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['productname'] . "</td>";
                        echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['productimage']) . "' style='width: 100px; height: 100px;' /></td>";
                        echo "<td> RM " . ($row['productprice'] * $row['productqty']) . "</td>";
                        echo "<td>" . $row['productqty'] . "</td>";
                        echo "<td>" . $row['producttype'] . "</td>";
                        echo "<td><input type='checkbox' class='delete-checkbox' data-productname='" . $row['productname'] . "'></td>";
                        echo "</tr>";
                        $total += ($row['productprice'] * $row['productqty']);
                    }
                } else {
                    echo "<tr><td colspan='6' style='height: 250px;'>&nbsp;</td></tr>";
                    echo "<tr><td colspan='6'>No order added.</td></tr>";
                }
                echo "<tr><td colspan='5' style='text-align: right;'>Cart Totals:</td><td>RM " . $total . "</td></tr>";
                $conn->close();
                ?>
            </tbody>
        </table>
        <br>
        <br>
        <div id="button">
            <button id="delete-button">Delete</button>
            <button id="confirm-button">Confirm Purchase</button>
        </div>
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
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('delete-button').addEventListener('click', function () {
            var checkboxes = document.querySelectorAll('.delete-checkbox:checked');
            checkboxes.forEach(function (checkbox) {
                var productName = checkbox.dataset.productname;
                // Perform AJAX request to delete the product from the cart
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "delete_product.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Remove the row from the table on successful deletion
                        checkbox.closest('tr').remove();
                        // Check if there are no more orders after deletion
                        if (document.querySelectorAll('#shopping-cart tbody tr').length === 0) {
                            // Disable the Confirm Purchase button and change its text
                            document.getElementById('confirm-button').disabled = true;
                            document.getElementById('confirm-button').textContent = 'No Orders to Confirm';
                        }
                    }
                };
                xhr.send("product_name=" + encodeURIComponent(productName)); // Encode to handle special characters
            });
        });

        // Redirect to checkout page after deleting selected products
        document.getElementById('confirm-button').addEventListener('click', function () {
            // Check if there are no orders added
            var noOrders = (document.querySelectorAll('#shopping-cart tbody tr').length === 0);
            if (noOrders) {
                // Redirect to the product page since there are no orders to confirm
                document.getElementById('confirm-button').disabled = true;
                document.getElementById('confirm-button').textContent = 'No Orders to Confirm';
                window.location.href = "ProductPage.php";
            } else {
                // Redirect to the checkout page
                window.location.href = "checkout.php";
            }
        });
    });
    function myFunction() {
        var dropdown = document.getElementById("myDropdown");
        // Toggle the display of the dropdown content
        if (dropdown.style.display === "block") {
            dropdown.style.display = "none";
        } else {
            dropdown.style.display = "block";
        }
    }
</script>


</body>
</html>
