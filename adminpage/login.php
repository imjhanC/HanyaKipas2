<?php
// Establish a database connection (replace these values with your own)
$servername = "localhost:3308";
$username = "root";
$password = "";
$database = "hanyakipas";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare a SQL query to check if the credentials are valid
$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Successful login, redirect to adminGUI.php
    header("Location: adminGUI.php");
    exit();
} else {
    // Invalid credentials, redirect back to adminlogin.php with an error message
    header("Location: adminlogin.php?error=invalid_credentials");
    exit();
}

$conn->close();
?>
