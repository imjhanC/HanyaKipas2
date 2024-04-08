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

// Handle file uploads
if(isset($_POST['submit'])) {
    $product_name = $_POST['name'];
    $product_price = $_POST['price'];
    $product_desc = $_POST['desc'];
    $product_type = $_POST['type'];
    $product_qty = $_POST['qty'];
    $files = $_FILES['files']; 

    foreach ($files['tmp_name'] as $key => $tmp_name) {
        $file_name = $files['name'][$key];
        $file_tmp = $files['tmp_name'][$key];

        $file_data = addslashes(file_get_contents($file_tmp)); // Read file contents

        // Insert file data and image name into database
        $sql = "INSERT INTO product (productname, productprice, productdesc, producttype, productqty, productimage) VALUES ('$product_name', '$product_price','$product_desc','$product_type','$product_qty','$file_data')";
        $result = $conn->query($sql);

        if(!$result) {
            echo "Error uploading file: " . $conn->error;
        }
    }

    // Redirect to admin page after uploading
    header("Location: display.php");
    exit();
}

$conn->close();
?>
