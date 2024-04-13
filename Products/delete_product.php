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

// Check if product_name is set and not empty
if (isset($_POST['product_name']) && !empty($_POST['product_name'])) {
    // Sanitize input to prevent SQL injection
    $productName = $conn->real_escape_string($_POST['product_name']);
    
    // Prepare SQL statement to delete the product from the cart table
    $sql = "DELETE FROM cart WHERE productname = '$productName'";
    
    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // Return success message
        echo "Product deleted successfully";
    } else {
        // Return error message
        echo "Error deleting product: " . $conn->error;
    }
} else {
    // Return error message if product_name is not set or empty
    echo "Product name not provided";
}

// Close the database connection
$conn->close();
?>
