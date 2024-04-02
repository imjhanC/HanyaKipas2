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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $signInUsername = $_POST["signInUsername"];
    $signInPassword = $_POST["signInPassword"];

    // Query the database to check if the user exists
    $query = "SELECT * FROM user WHERE username = ? OR emailaddress = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $signInUsername, $signInUsername);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $stored_password = $row["password"];
        
        // Compare plain text password
        if ($signInPassword === $stored_password) {
            // Password is valid
            echo "Valid";
        } else {
            // Password is not valid
            echo "InvalidPassword";
        }
    } else {
        // No such user account
        echo "NoUser";
    }
}
?>
