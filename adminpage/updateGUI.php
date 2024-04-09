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

// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Check if the update ID is selected
    if(isset($_POST['update_id'])) {
        // Get the selected ID
        $update_id = $_POST['update_id'];

        // Check if any attribute needs to be updated
        if(!empty($_POST['productname'])) {
            $productname = $_POST['productname'];
            $sql = "UPDATE product SET productname = '$productname' WHERE id = $update_id";
            $conn->query($sql);
        }

        if(!empty($_POST['productprice'])) {
            $productprice = $_POST['productprice'];
            $sql = "UPDATE product SET productprice = '$productprice' WHERE id = $update_id";
            $conn->query($sql);
        }

        if(!empty($_POST['productdesc'])) {
            $productdesc = $_POST['productdesc'];
            $sql = "UPDATE product SET productdesc = '$productdesc' WHERE id = $update_id";
            $conn->query($sql);
        }

        if(!empty($_POST['producttype'])) {
            $producttype = $_POST['producttype'];
            $sql = "UPDATE product SET producttype = '$producttype' WHERE id = $update_id";
            $conn->query($sql);
        }

        if(!empty($_POST['productqty'])) {
            $productqty = $_POST['productqty'];
            $sql = "UPDATE product SET productqty = '$productqty' WHERE id = $update_id";
            $conn->query($sql);
        }

        if(isset($_FILES['productimage']) && $_FILES['productimage']['size'] > 0) {
            // Handle uploaded image data
            $image_data = file_get_contents($_FILES['productimage']['tmp_name']);
            $sql = "UPDATE product SET productimage = ? WHERE id = $update_id";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $image_data);
            $stmt->execute();
            $stmt->close();
        }
    }
}

// Fetch data to display
$sql = "SELECT id, productname, productprice, productdesc, producttype, productqty, productimage FROM product";
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
    echo "<label for='productqty'>Product Quantity: </label>";
    echo "<input type='text' id='productqty' name='productqty' placeholder='New Product quantity here..'>";
    echo "<br>";
    echo "<br>"; 
    echo "<label for='productimage'>Select New Product image:</label>";
    echo "<input type='file' id='productimage' name='productimage' accept='image/*'>";
    echo "<input type='submit' name='submit' value='Update Selected Image'>";
    echo "</form>";
} else {
    echo "No Product uploaded.";
}

$conn->close();
?>
    <section>
</body>
</html>