<?php
$conn = mysqli_connect("localhost:3308", "root", "", "hanyakipas");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
