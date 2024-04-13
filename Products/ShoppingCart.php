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

                // Display products
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['productname'] . "</td>";
                        echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['productimage']) . "' style='width: 100px; height: 100px;' /></td>";
                        echo "<td>" . ($row['productprice'] * $row['productqty']) . "</td>";
                        echo "<td>" . $row['productqty'] . "</td>";
                        echo "<td>" . $row['producttype'] . "</td>";
                        echo "<td><input type='checkbox' class='delete-checkbox' data-productname='" . $row['productname'] . "'></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No order added.</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
        <button id="delete-button">Delete Selected</button>
    </section>
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
                        }
                    };
                    xhr.send("product_name=" + encodeURIComponent(productName)); // Encode to handle special characters
                });
            });
        });
    </script>
</body>
</html>
