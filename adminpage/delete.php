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

// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Check if any images are selected for deletion
    if(isset($_POST['delete']) && !empty($_POST['delete'])) {
        $delete_ids = $_POST['delete']; // Array of image IDs to delete

        // Prepare SQL statement for deletion
        $sql = "DELETE FROM image WHERE id IN (" . implode(',', $delete_ids) . ")";

        // Execute SQL statement
        if ($conn->query($sql) === TRUE) {
            echo "<script>window.location = 'deleteGUI.php';</script>";
            echo "Item delete successfully.";
        } else {
            echo "Error deleting images: " . $conn->error;
        }
    } else {
        echo "Please select images to delete.";
    }
}

// Close database connection
$conn->close();
?>
