<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded Images</title>
</head>
<body>
    <h1>Uploaded Images</h1>
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

    // Fetch images from database
    $sql = "SELECT image_data, image_name FROM image";
    $result = $conn->query($sql);

    // Display images
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image_data']) . '" alt="' . $row['image_name'] . '" style="margin-right: 10px;">';
        }
    } else {
        echo "No images uploaded.";
    }

    $conn->close();
    ?>
</body>
</html>
