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

// Delete selected images
if(isset($_POST['delete']) && !empty($_POST['selected_images'])) {
    $selectedImages = $_POST['selected_images'];
    foreach ($selectedImages as $imageId) {
        $sql = "DELETE FROM image WHERE id = '$imageId' ";
        $result = $conn->query($sql);
        if(!$result) {
            echo "Error deleting image: " . $conn->error;
        }
    }
    header("Location: display.php");
    exit();
}

// Update selected image name
if(isset($_POST['update']) && !empty($_POST['selected_images'])) {
    $selectedImages = $_POST['selected_images'];
    foreach ($selectedImages as $imageId) {
        $newName = $_POST['new_name'][$imageId];
        $sql = "UPDATE image SET image_name = '$newName' WHERE id = '$imageId'";
        $result = $conn->query($sql);
        if(!$result) {
            echo "Error updating image name: " . $conn->error;
        }
    }
    header("Location: display.php");
    exit();
}

$conn->close();
?>
