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
    <form action="delete.php" method="post">
        <table border="1">
            <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Product name</th>
                    <th>Product price</th>
                    <th>Product description</th>
                    <th>Product type</th>
                    <th>Product quantity</th>
                    <th>Product image</th>
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
                $sql = "SELECT id,productname, productprice, productdesc, producttype, productqty, productimage FROM product";
                $result = $conn->query($sql);

                // Display images
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td><input type='checkbox' class='checkbox' name='delete[]' value='" . $row['id'] . "'></td>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['productname'] . "</td>";
                        echo "<td>" . $row['productprice'] . "</td>";
                        echo "<td>" . $row['productdesc'] . "</td>";
                        echo "<td>" . $row['producttype'] . "</td>";
                        echo "<td>" . $row['productqty'] . "</td>";
                        echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['productimage'])  . "' alt='" . $row['productname'] . "' style='width: 100px; height: 100px;' /></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No images uploaded.</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
        <br>
        <input type="submit" name="submit" value="Delete selected product">
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
    <section>
</body>
</html>