<?php
// Check if the form is submitted
if(isset($_POST['submit'])) {
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

    // Check if any checkbox is selected
    if(isset($_POST['delete'])) {
        // Loop through each selected checkbox and delete the corresponding product
        foreach($_POST['delete'] as $product_id) {
            $sql = "DELETE FROM product WHERE id = $product_id";
            if ($conn->query($sql) !== TRUE) {
                echo "Error deleting record: " . $conn->error;
            }
        }
        header("Location: deleteGUI.php");
    } else {
        echo "No product selected for deletion.";
    }

    $conn->close();
} else {
    // If form is not submitted, redirect back to the admin page
    header("Location: adminGUI.php");
    exit;
}
?>
