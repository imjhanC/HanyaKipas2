<?php
// Database configuration
$dbHost     = "localhost:3308";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "hanyakipas";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>