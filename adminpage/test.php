<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded Images</title>
</head>
<body>
    <h1>Uploaded Images</h1>
    <form action="process.php" method="post">
        <table>
            <tr>
                <th>Select</th>
                <th>Image</th>
                <th>Image Name</th>
            </tr>
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
            $sql = "SELECT id, image_data, image_name FROM image";
            $result = $conn->query($sql);

            // Display images
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td><input type="checkbox" name="selected_images[]" value="' . $row['id'] . '"></td>';
                    echo '<td><img src="data:image/jpeg;base64,' . base64_encode($row['image_data']) . '" alt="' . $row['image_name'] . '" style="max-width: 100px;"></td>';
                    echo '<td>' . $row['image_name'] . '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="3">No images uploaded.</td></tr>';
            }

            $conn->close();
            ?>
        </table>
        <button type="submit" name="delete">Delete</button>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
