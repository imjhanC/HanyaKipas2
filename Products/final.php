<?php
// Database connection parameters
$servername = "localhost:3308"; // Change this if your database is hosted elsewhere
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "hanyakipas"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get common order details from form
$customerName = $_POST['customername'];
$customerDesc = $_POST['customerdesc'];
$customerShipAddress = $_POST['customershipAddress'];
$customerContactNum = $_POST['cnumber'];

// Fetch products from the shopping cart
$sql = "SELECT c.productname, p.productprice, c.producttype, c.productqty 
        FROM cart c 
        INNER JOIN product p ON c.productname = p.productname";
$result = $conn->query($sql);

// Insert each product as a separate row in the orders table
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $productName = $row['productname'];
        $productPrice = $row['productprice'];
        $productType = $row['producttype'];
        $productQty = $row['productqty'];
        
        // Check if product name is empty
        if (empty($productName)) {
            // Redirect user back to ProductPage.php
            header("Location: index.php");
            exit; // Stop further execution
        }
        
        // Insert product details into the orders table
        $insertSql = "INSERT INTO orders (customerName, customerDesc, customerShipAddress, customerContactNum, productPrice, productName, productType, productQty) 
                      VALUES ('$customerName', '$customerDesc', '$customerShipAddress', '$customerContactNum', '$productPrice', '$productName', '$productType', '$productQty')";
        
        if ($conn->query($insertSql) !== TRUE) {
            echo "Error inserting product: " . $conn->error;
        }
    }

    // Empty the cart table
    $emptyCartSql = "DELETE FROM cart";
    if ($conn->query($emptyCartSql) !== TRUE) {
        echo "Error emptying cart: " . $conn->error;
    }
} else {
    echo "No products found in the shopping cart.";
}

// Close connection
$conn->close();

// Redirect to checkout page
header("Location: redirect.php");
?>
