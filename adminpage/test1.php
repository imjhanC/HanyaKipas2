<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Images</title>
</head>
<body>
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
        $image_name = $_POST['image_name'];

        // Check if image data is provided
        if(isset($_FILES['image_data']) && $_FILES['image_data']['size'] > 0) {
            $image_data = file_get_contents($_FILES['image_data']['tmp_name']);
        } else {
            // If image data is not provided, keep the existing data
            $sql_select = "SELECT image_data FROM image WHERE id = $update_id";
            $result_select = $conn->query($sql_select);
            $row_select = $result_select->fetch_assoc();
            $image_data = $row_select['image_data'];
        }

        // Update the image in the database
        $sql_update = "UPDATE image SET image_name = '$image_name', image_data = ? WHERE id = $update_id";
        $stmt = $conn->prepare($sql_update);
        $stmt->bind_param("s", $image_data);
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
</body>
</html>
