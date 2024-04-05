<!DOCTYPE html>
    <head>

    </head>
    <body>
        <form action="upload.php" method="post" enctype="multipart/form-data">
             Select Image Files to Upload:
            <input type="file" name="files[]" multiple >
            <input type="submit" name="submit" value="UPLOAD">
        </form>
        <a href='data.php'>image</a>
    </body>
</html>