<?php
// Database connection
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "hanyakipas";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from AJAX request
$productName = $_POST['productName'];
$productImage = $_POST['productImage'];
$productPrice = $_POST['productPrice'];
$productQty = $_POST['productQty'];
$productType = $_POST['productType'];

// Ensure productQty is at least 1
$productQty = max(1, intval($productQty));

// Check if the item already exists in the cart
$sql = "SELECT * FROM cart WHERE productname = '$productName'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Update quantity if the item exists
    $row = $result->fetch_assoc();
    $newQty = max(1, $row['productqty'] + $productQty); // Ensure newQty is at least 1
    $updateSql = "UPDATE cart SET productqty = '$newQty' WHERE productname = '$productName'";
    if ($conn->query($updateSql) === TRUE) {
        echo "Quantity updated successfully";
    } else {
        echo "Error updating quantity: " . $conn->error;
    }
} else {
    // Insert new item if it doesn't exist
    $insertSql = "INSERT INTO cart (productname, productimage, productprice, productqty, producttype)
                  VALUES ('$productName', '$productImage', '$productPrice', '$productQty', '$productType')";
    if ($conn->query($insertSql) === TRUE) {
        echo "Item added to cart successfully";
    } else {
        echo "Error adding item to cart: " . $conn->error;
    }
}

$conn->close();
?>
