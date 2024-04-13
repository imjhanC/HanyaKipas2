<?php
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

// Fetch count of items from the cart table
$sql = "SELECT COUNT(*) as count FROM cart";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['count'];
} else {
    echo 0;
}

// Close connection
$conn->close();
?>
