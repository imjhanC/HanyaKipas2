<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <title>HanyaKipas: Shopping Cart</title>
        <link rel="stylesheet" href="checkoutstyles.css">
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
        <div id='checkout-div'>
            <br>
            <h1> Checkout order</h1>
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
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No order added.</td></tr>";
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
            <br>
            <br>
            <br>
            <h1> Please enter your order details </h1>
            <br>
            <br>
            <br>
            <form action="final.php" method="post">
                    <div class="form-group">
                        <label for="customername">Full name:</label>
                        <input type="text" id="customername" name="customername" placeholder="Enter your full name goes here.." pattern="[A-Za-z\s]+" title="Please enter a valid name (letters and spaces only)" required>
                    </div>
                    <div class="form-group">
                        <label for="customerdesc">Order description:</label>
                        <textarea id="customerdesc" name="customerdesc" placeholder="Type your order needs like : deliver to doorstep..." required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="customershipAddress">Deliver address:</label>
                        <input type="text" id="customershipAddress" name="customershipAddress" placeholder="Enter your deliver address.." required>
                    </div>
                    <div class="form-group">
                        <label for="cnumber">Contact number:</label>
                        <input type="text" id="cnumber" name="cnumber" placeholder="Contact number goes here.." pattern="[0-9]+" title="Please enter a valid contact number (numbers only)" required>
                    </div>
                    <input type="submit" value="Submit">
                </form>
        </div>
    </body>
</html>