<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select images to upload:
        <input type="file" name="files[]" multiple>
        <input type="submit" value="Upload Images" name="submit">
    </form>
</body>
</html>
