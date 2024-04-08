<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <title>HanyaKipas : Admin Page</title>
    <link rel="stylesheet" href="adminstyles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <nav id="desktop-nav">
        <div class="text-logo">
            <img src ="logo.png" width =150px height =90px></img>
        </div>
        <!-- Your navigation items here -->
    </nav>
    <div class="sidebar">
        <a href=adminGUI.php>Home</a>
        <a href=createGUI.php>Create product</a>
        <a href=updateGUI.php>Update product</a>
        <a href=deleteGUI.php>Delete product</a>
        <a href=#about>Preview product page </a>
    </div>
    <div class="info-home">
        <br>
        <br>
        <h1>Welcome to the HanyaKipas admin page !</h1>
        <br>
        <br>
        <hr>
    <div>    
    <section id="list">
    <h2>Update Images</h2>

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

if(isset($_POST['submit']) && isset($_POST['update_id'])) {
    // Handle form submission to update image
    $update_id = $_POST['update_id'];
    
    // Get the current image data and image name
    $sql_select = "SELECT image_data, image_name FROM image WHERE id = $update_id";
    $result_select = $conn->query($sql_select);
    $row_select = $result_select->fetch_assoc();
    $current_image_data = $row_select['image_data'];
    $current_image_name = $row_select['image_name'];

    // Check if image name is provided
    if(isset($_POST['image_name'])) {
        $image_name = $_POST['image_name'];
    } else {
        // If image name is not provided, keep the existing name
        $image_name = $current_image_name;
    }

    // Check if image data is provided
    if(isset($_FILES['image_data']) && $_FILES['image_data']['size'] > 0) {
        $image_data = file_get_contents($_FILES['image_data']['tmp_name']);
    } else {
        // If image data is not provided, keep the existing data
        $image_data = $current_image_data;
    }

    // Update the image in the database
    $sql_update = "UPDATE image SET image_name = ?, image_data = ? WHERE id = $update_id";
    $stmt = $conn->prepare($sql_update);
    $stmt->bind_param("ss", $image_name, $image_data);
    $stmt->execute();
    $stmt->close();

    echo "Image updated successfully.";
}

// Fetch images from database
$sql = "SELECT id, image_name, image_data, upload_date FROM image";
$result = $conn->query($sql);

// Display images
if ($result->num_rows > 0) {
    echo "<form  method='post' enctype='multipart/form-data'>";
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Image Name</th>";
    echo "<th>Image</th>";
    echo "<th>Posted Time</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['image_name'] . "</td>";
        echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['image_data']) . "' alt='" . $row['image_name'] . "' style='width: 100px; height: 100px;'></td>";
        echo "<td>" . $row['upload_date'] . "</td>";
        echo "<td><input type='radio' name='update_id' value='" . $row['id'] . "'></td>";
        echo "</tr>";
    }
    
    echo "</tbody>";
    echo "</table>";

    echo "<br>";
    echo "<label for='image_name'>Image Name:</label>";
    echo "<input type='text' name='image_name' id='image_name'><br>";
    echo "<label for='image_data'>New Image:</label>";
    echo "<input type='file' name='image_data' id='image_data'><br>";
    echo "<input type='submit' name='submit' value='Update Selected Image'>";
    echo "</form>";
} else {
    echo "No images uploaded.";
}

$conn->close();
?>
    <section>
</body>
</html>
