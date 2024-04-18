<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <title>HanyaKipas: Shopping Cart</title>
    <link rel="stylesheet" href="shoppingcartstyle.css">
</head>
<body>
    <!-- navigation bar -->
    <nav id="desktop-nav">
        <div class="text-logo">
            <img src ="logo.png" width="150px" height="90px" alt="Logo">
        </div>
        <div>
            <ul class="nav-links">
                <a href="../../HanyaKipas/LoginRegister/LoginGUI.php"><img src="login.png" alt="shopping cart" height="50" width="50" id="loginlogo"></a>
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
                        echo "<td> RM " . ($row['pSSSSSroductprice'] * $row['productqty']) . "</td>";
                        echo "<td>" . $row['productqty'] . "</td>";
                        echo "<td>" . $row['producttype'] . "</td>";
                        echo "<td><input type='checkbox' class='delete-checkbox' data-productname='" . $row['productname'] . "'></td>";
                        echo "</tr>";
                        $total += ($row['productprice'] * $row['productqty']);
                    }
                } else {
                    echo "<tr><td colspan='6'>No order added.</td></tr>";
                }
                echo "<tr><td colspan='5' style='text-align: right;'>Total:</td><td>RM " . $total . "</td></tr>";
                $conn->close();
                ?>
            </tbody>
        </table>
        <button id="delete-button">Delete</button>
        <button id="confirm-button">Confirm Purchase</button>
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
                window.location.href = "ProductPage.php";
            } else {
                // Redirect to the checkout page
                window.location.href = "checkout.php";
            }
        });
    });
</script>


</body>
</html>
