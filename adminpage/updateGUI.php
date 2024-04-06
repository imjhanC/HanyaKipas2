<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Images</title>
</head>
<body>
    <h2>Update Images</h2>
    <form action="delete.php" method="post">
        <table border="1">
            <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Image Name</th>
                    <th>Image</th>
                    <th>Posted Time</th>
                </tr>
            </thead>
            <tbody>
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
                $sql = "SELECT id, image_name, image_data, upload_date FROM image";
                $result = $conn->query($sql);

                // Display images
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td><input type='checkbox' class='checkbox' name='delete[]' value='" . $row['id'] . "'></td>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['image_name'] . "</td>";
                        echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['image_data']) . "' alt='" . $row['image_name'] . "' style='width: 100px; height: 100px;'></td>";
                        echo "<td>" . $row['upload_date'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No images uploaded.</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
        <br>
        <input type="submit" name="submit" value="Delete Selected Images">
    </form>

    <script>
        // JavaScript to allow only one checkbox to be selected at a time
        const checkboxes = document.querySelectorAll('.checkbox');
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                checkboxes.forEach(cb => {
                    if (cb !== this) {
                        cb.checked = false;
                    }
                });
            });
        });
    </script>
</body>
</html>
