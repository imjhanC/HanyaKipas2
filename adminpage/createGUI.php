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
        <h1>Create product listing</h1>
        <br>
        <br>
        <hr>
    <div>    
    <section id="list">
        <br>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="name">Product name: </label>
    		<input type="text" id="name" name="name" placeholder="Product name here.." required>
            <br>
            <br>
            <label for="price">Product price: </label>
    		<input type="text" id="price" name="price" placeholder="Product price here..." required>
            <br>
            <br>
            <label for="desc">Product description: </label>
    		<input type="text" id="desc" name="desc" placeholder="Product description here.." required>
            <br>
            <br>
            <label for="type">Product type:</label>
    		<select id="type" name="type" required>
      			<option value="celling fan">Celling fan</option>
      			<option value="table fan">Table fan</option>
				<option value="bladeless fan">Bladeless fan</option>
    		</select>
            <br>
            <br>
            <label for="file">Select Image:</label>
            <input type="file" id="files[]" name="files[]" accept="image/*" required>
            <br>
            <br>
            <input type="submit" value="Upload Images" name="submit">
        </form>
        <br>
        <br>
        <h2>Current available products</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Product name</th>
                    <th>Product image</th>
                    <th>Product </th>
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
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['image_name'] . "</td>";
                        echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['image_data']) . "' alt='" . $row['image_name'] . "' style='width: 100px; height: 100px;'></td>";
                        echo "<td>" . $row['upload_date'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No images uploaded.</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    <section>
</body>
</html>
