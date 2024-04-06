<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <title>HanyaKipas : Admin Page</title>
    <link rel="stylesheet" href="createstyle.css">
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
        <a href=create.php>Create product</a>
        <a href=#about>Update product</a>
        <a href=#about>Delete product</a>
        <a href=#about>Preview product page </a>
    </div>
    <div class="info-home">
        <br>
        <br>
        <h1>Welcome to Create Product page </h1>
        <br>
        <br>
        <hr>
        <br>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select images to upload:
            <input type="file" name="files[]" multiple>
            <input type="submit" value="Upload Images" name="submit">
        </form>
    <div>   
</body>
</html>