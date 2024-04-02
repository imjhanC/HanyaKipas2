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
// Check if username or email already exists
$sql = "SELECT * FROM user WHERE username='$username' OR emailaddress='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $errorMessages = [];

    while($row = $result->fetch_assoc()) {
        if ($row['username'] === $username) {
            $errorMessages[] = "The username has been taken";
        }
        if ($row['emailaddress'] === $email) {
            $errorMessages[] = "This email address is already registered";
        }
    }

    // Construct the error message based on the matched values
    if (count($errorMessages) === 2) {
        echo "This account is already existed";
    } else {
        echo implode(" and ", $errorMessages);
    }
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
