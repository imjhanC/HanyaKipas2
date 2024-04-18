<?php
    echo "Order placed successfully ! ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5;url=ProductPage.php">
    <title>Redirecting...</title>
    <script>
        // Redirect after 5 seconds
        setTimeout(function() {
            window.location.href = 'ProductPage.php';
        }, 5000); // 5000 milliseconds = 5 seconds
    </script>
</head>
<body>
    <!-- You can add a message here or any additional content -->
</body>
</html>