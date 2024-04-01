<?php
// Establish connection to database
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "hanyakipas";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from POST request
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Check if username already exists
$sql = "SELECT * FROM user WHERE username='$username'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "Username has been taken";
    exit();
}

// Check if email already exists
$sql = "SELECT * FROM user WHERE emailaddress='$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "This email address is already registered";
    exit();
}

// Insert new user into database
$sql = "INSERT INTO user (username, emailaddress, password) VALUES ('$username', '$email', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "Account creation succeed!";
} else {
    echo "Something went wrong";
}

$conn->close();
?>
