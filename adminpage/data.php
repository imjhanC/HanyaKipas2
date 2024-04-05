<?php
require 'connection.php';

$query = "SELECT * FROM image";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Image</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td><img src='img/" . $row['image'] . "' width='100'></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No records found";
}

mysqli_close($conn);
?>
