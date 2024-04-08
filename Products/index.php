<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="container">
            <div class="sidebar">
                <img src="logo.png" id="logo">
                <div class="filter">
                    <h3>Product Filter</h3>
                    <div class="typefiller">
                        <select class="type">
                            <option value="A">All</option>
                            <option value="B">Bladeless Fan</option>
                            <option value="C">Ceiling Fan</option>
                            <option value="T">Table Fan</option>
                        </select>
                    </div>
                    <br>
                    <br>
                    <div class="slider-container">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <label for="min_price">Minimum Price:</label>
                            <input type="range" id="min_price" name="min_price" min="0" max="9999" step="1" value="<?php echo isset($_POST['min_price']) ? $_POST['min_price'] : 0; ?>">
                            <output for="min_price" id="min_price_output"><?php echo isset($_POST['min_price']) ? $_POST['min_price'] : 0; ?></output><br><br>

                            <label for="max_price">Maximum Price:</label>
                            <input type="range" id="max_price" name="max_price" min="1" max="10000" step="1" value="<?php echo isset($_POST['max_price']) ? $_POST['max_price'] : 10000; ?>">
                            <output for="max_price" id="max_price_output"><?php echo isset($_POST['max_price']) ? $_POST['max_price'] : 10000; ?></output><br><br>

                            <input type="submit" value="Search">
                        </form>
                    </div>
                </div>
            </div>
            <div class="contant">
                <div class="header">
                    <p>Product</p>
                </div>
            </div>
        </div>
    <div id="Product">

    </div>    
    </body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and sanitize the input values
        $min_price = isset($_POST["min_price"]) ? intval($_POST["min_price"]) : 0;
        $max_price = isset($_POST["max_price"]) ? intval($_POST["max_price"]) : 10000;

        // Ensure that min price is smaller than max price by at least 1
        if ($min_price >= $max_price) {
            $min_price = $max_price - 1;
        }
    }
?>
<script src="script.js"></script>
</html>
