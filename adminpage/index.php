<?php
require 'connection.php';

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    if(isset($_FILES["image"])) {
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        // Check if file is uploaded successfully
        if($_FILES["image"]["error"] !== UPLOAD_ERR_OK) {
            echo "<script> alert('Error uploading image');</script>";
        } else {
            // Handle file upload and database insertion
            $validImageExtensions = ['jpg', 'jpeg', 'png'];
            $imageExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            if(!in_array($imageExtension, $validImageExtensions)){
                echo "<script> alert('Invalid image extension');</script>";
            } else if($fileSize > 1000000){
                echo "<script> alert('Image Size Is too large');</script>";
            } else {
                $newImageName = uniqid() . '.' . $imageExtension;
                $uploadDirectory = 'img/' . $newImageName;

                // Move uploaded file to desired directory
                if(move_uploaded_file($tmpName, $uploadDirectory)) {
                    // Insert data into database
                    $query = "INSERT INTO image (name, image) VALUES ('$name', '$newImageName')";
                    if(mysqli_query($conn, $query)) {
                        echo "<script> 
                                alert('Succesfully Added');
                                document.location.href = 'data.php';
                            </script>";
                    } else {
                        echo "<script> alert('Error inserting data into database');</script>";
                    }
                } else {
                    echo "<script> alert('Error moving uploaded file');</script>";
                }
            }
        }
    } else {
        echo "<script> alert('Image file not found');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
        <label for="name">Name :</label>
        <input type="text" name="name" id="name" required value=""><br>
        <label for="image">Image :</label>
        <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value=""><br> <br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <br>
    <a href="data.php">Data</a>
</body>
</html>
