<?php
// Database connection
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

// Handle file uploads
if(isset($_POST['submit'])) {
    $files = $_FILES['files'];
    $image_name = $_POST['name']; // Get image name from form

    foreach ($files['tmp_name'] as $key => $tmp_name) {
        $file_name = $files['name'][$key];
        $file_tmp = $files['tmp_name'][$key];

        $file_data = addslashes(file_get_contents($file_tmp)); // Read file contents

        // Insert file data and image name into database
        $sql = "INSERT INTO image (image_data, image_name) VALUES ('$file_data', '$image_name')";
        $result = $conn->query($sql);

        if(!$result) {
            echo "Error uploading file: " . $conn->error;
        }
    }

    // Redirect to display page after uploading
    header("Location: display.php");
    exit();
}

$conn->close();
?>
