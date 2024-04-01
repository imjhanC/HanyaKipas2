<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Your MySQL database connection code goes here

    // Connect to MySQL database
    $servername = "localhost:3308";
    $db_username = "root";
    $db_password = "";
    $dbname = "your_database_name";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to retrieve user data based on username and password
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows > 0) {
        // User exists, redirect to index.html or any other page
        $_SESSION['username'] = $username;
        header("Location: index.html");
    } else {
        // User does not exist, redirect back to login page or display an error message
        header("Location: login.html");
    }

    // Close database connection
    $stmt->close();
    $conn->close();
}
?>
