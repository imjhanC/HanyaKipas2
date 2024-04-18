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
            <img src="logo.png" width="150px" height="90px" alt="Logo"></img>
        </div>
        <!-- Your navigation items here -->
    </nav>
    <div class="sidebar">
        <a href="adminGUI.php">Home</a>
        <a href="createGUI.php">Create product</a>
        <a href="../../HanyaKipas/Products/ProductPage.php">Preview product page</a>
    </div>
    <div class="info-home">
        <br>
        <br>
        <h1>Welcome to the HanyaKipas admin page!</h1>
        <br>
        <br>
        <hr>
        <div>
            <section id="list">
                <h2> Type of products that is currently available </h2>
                <br>
                <!-- Your bar chart goes here -->
                <canvas id="productChart" width="400" height="100"></canvas>
            </section>
        </div>
        <br>
        <br>
        <hr>
        <br>
        <br>
        <h1> Current order </h1>
    
    </div>

    <!-- JavaScript code for Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    <?php
    // Your database connection code...
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

    // Fetch data for chart
    $sql = "SELECT producttype, COUNT(*) AS count FROM product GROUP BY producttype";
    $result = $conn->query($sql);

    // Prepare data for chart
    $productTypes = [];
    $productCounts = [];
    while ($row = $result->fetch_assoc()) {
        $productTypes[] = $row['producttype'];
        $productCounts[] = $row['count'];
    }

    // Close connection
    $conn->close();
    ?>

    // JavaScript code to render the bar chart using Chart.js
    var ctx = document.getElementById('productChart').getContext('2d');
    var productChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($productTypes); ?>,
            datasets: [{
                label: 'Number of Products',
                data: <?php echo json_encode($productCounts); ?>,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>
</body>
</html>
