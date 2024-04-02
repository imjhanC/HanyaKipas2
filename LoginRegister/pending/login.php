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
$signInUsername = $_POST['signInUsername'];
$signInPassword = $_POST['signInPassword'];

// Validate if both fields are provided
if (empty($signInUsername) || empty($signInPassword)) {
    echo "Both username/email and password must not be blank";
    exit();
}

// Check if the username/email exists in the database
$sql = "SELECT * FROM user WHERE username='$signInUsername' OR emailaddress='$signInUsername'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Username/email found, now check if the password matches
    $row = $result->fetch_assoc();
    if (password_verify($signInPassword, $row['password'])) {
        // Password matches, login successful
        echo "Sign in successful";
        // You can also set session variables or cookies here if needed
    } else {
        // Password does not match
        echo "Incorrect password";
    }
} else {
    // Username/email not found
    echo "No such account";
}

$conn->close();
?>
