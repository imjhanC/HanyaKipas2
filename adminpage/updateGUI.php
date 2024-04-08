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
    <div>    
    <section id="list">
    <h2>Update Product</h2>
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
            $sql_select = "SELECT id,productname, productprice, productdesc, producttype, productqty, productimage FROM product WHERE id = $update_id";
            $result_select = $conn->query($sql_select);
            $row_select = $result_select->fetch_assoc();
            $current_id = $row_select['id'];
            $current_productname = $row_select['productname'];
            $current_productprice = $row_select['productprice'];
            $current_productdesc = $row_select['productdesc'];
            $current_producttype = $row_select['producttype'];
            $current_productqty = $row_select['productqty'];
            $current_image_data = $row_select['productimage'];
            
            // Check if image name is provided
            if(isset($_POST['id'])) {
                $id = $_POST['id'];
            } else {
                // If image name is not provided, keep the existing name
                $id = $current_id;
            }

            // Check if image name is provided
            if(isset($_POST['productname'])) {
                $product_name = $_POST['productname'];
            } else {
                // If image name is not provided, keep the existing name
                $product_name = $current_productname;
            }

            // Check if image name is provided
            if(isset($_POST['productprice'])) {
                $product_price = $_POST['productprice'];
            } else {
                // If image name is not provided, keep the existing name
                $product_price = $current_productprice;
            }

            // Check if image name is provided
            if(isset($_POST['productdesc'])) {
                $product_desc = $_POST['productdesc'];
            } else {
                // If image name is not provided, keep the existing name
                $product_desc = $current_productdesc;
            }

            // Check if image name is provided
            if(isset($_POST['producttype'])) {
                $product_type = $_POST['producttype'];
            } else {
                // If image name is not provided, keep the existing name
                $product_type = $current_producttype;
            }

            if(isset($_POST['productqty'])) {
                $product_qty = $_POST['productqty'];
            } else {
                // If image name is not provided, keep the existing name
                $product_qty = $current_productqty;
            }

            // Check if image data is provided
            if(isset($_FILES['productimage']) && $_FILES['productimage']['size'] > 0) {
                $product_image = file_get_contents($_FILES['productimage']['tmp_name']);
            } else {
                // If image data is not provided, keep the existing data
                $product_image = $current_image_data;
            }

            // Update the image in the database
            $sql_update = "UPDATE product SET id = ?,productname= ? , productprice = ? , productdesc = ? , producttype = ? , productqty = ? , productimage = ?  WHERE id = $update_id";
            $stmt = $conn->prepare($sql_update);
            $stmt->bind_param("sssssss", $current_id, $current_productname,$current_productprice, $current_productdesc, $current_producttype , $current_productqty , $current_image_data);
            $stmt->execute();
            $stmt->close();

            echo "Product updated successfully.";
        }

        // Fetch images from database
        $sql = "SELECT id,productname, productprice, productdesc, producttype, productqty, productimage FROM product";
        $result = $conn->query($sql);

        // Display images
        if ($result->num_rows > 0) {
            echo "<form  method='post' enctype='multipart/form-data'>";
            echo "<table border='1'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Product name</th>";
            echo "<th>Product price</th>";
            echo "<th>Product description</th>";
            echo "<th>Product type</th>";
            echo "<th>Product quantity</th>";
            echo "<th>Product image</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['productname'] . "</td>";
                echo "<td>" . $row['productprice'] . "</td>";
                echo "<td>" . $row['productdesc'] . "</td>";
                echo "<td>" . $row['producttype'] . "</td>";
                echo "<td>" . $row['productqty'] . "</td>";
                echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['productimage']) . "' style='width: 100px; height: 100px;' /></td>";
                echo "<td><input type='radio' name='update_id' value='" . $row['id'] . "'></td>";
                echo "</tr>";
            }
            
            echo "</tbody>";
            echo "</table>";

            echo "<br>";
            echo "<label for='id'>Product ID: </label>";
            echo "<input type='text' id='id' name='id' placeholder='New Product ID here..'>";
            echo "<br>";
            echo "<br>";
            echo "<label for='productname'>Product name: </label>";
            echo "<input type='text' id='productname' name='productname' placeholder='New Product Name here..'>";
            echo "<br>";
            echo "<br>";        
            echo "<label for='productprice'>Product price: </label>";
            echo "<input type='text' id='productprice' name='productprice' placeholder='New Product Price here..'>";
            echo "<br>";
            echo "<br>"; 
            echo "<label for='productdesc'>Product Description: </label>";
            echo "<input type='text' id='productdesc' name='productdesc' placeholder='New Product Description here..'>";
            echo "<br>";
            echo "<br>"; 
            echo "<label for='producttype'>Product type: </label>";
            echo "<select id='producttype' name='producttype'>
                    <option value='celling fan'>Celling fan</option>
                    <option value='table fan'>Table fan</option>
                    <option value='bladeless fan'>Bladeless fan</option>
                </select>";
            echo "<br>";
            echo "<br>"; 
            echo "<label for='productqty'>Product Quantity: </label>";
            echo "<input type='text' id='productqty' name='productqty' placeholder='New Product quantity here..'>";
            echo "<br>";
            echo "<br>"; 
            echo "<label for='productimage'>Select New Product image:</label>";
            echo "<input type='file' id='productimage' name='productimage' accept='image/*'>";
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