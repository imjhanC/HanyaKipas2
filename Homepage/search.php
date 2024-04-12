<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "hanyakipas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products from database
if (isset($_GET['q'])) {
    $query = $_GET['q'];
    $sql = "SELECT productname FROM product WHERE productname LIKE '%$query%' LIMIT 5";
    $result = $conn->query($sql);

    $products = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    }

    echo json_encode($products);
}

$conn->close();
?>
