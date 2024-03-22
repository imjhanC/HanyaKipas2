<!-- Bladeless Fan -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <title>Bladeless Fan</title>

        <!-- StyleSheets -->
        <link rel="stylesheet" href="../styles.css">
        <link rel="stylesheet" href="ProductsStyle/style1.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap">
    </head>
    <body>
        <?php
            include '../Includes/navigationBar.php';
        ?>

        <section class="product-page">
            <div class="product-details">
                <div class="product-image">

                </div>

                <div class="product-text">
                    <span class="product-category">KIPAS DELUXE</span>
                    <h3>Bladeless Fan</h3>

                    <!-- Use Database to get price -->
                    <span class="product-price">RM 6969.00</span>

                    <!-- Product Details -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mattis accumsan felis, faucibus laoreet tellus rutrum ut. Sed mollis eu justo ut laoreet. Duis venenatis turpis lacus, et viverra neque hendrerit pretium. Suspendisse finibus lorem vel elementum feugiat. Maecenas vitae pretium mi. Fusce elementum euismod euismod. Phasellus lacinia lacus nec posuere dictum. Vestibulum et dictum odio. Vivamus porttitor, mi maximus lobortis fringilla, justo augue interdum sapien, vel luctus erat arcu nec nibh. Aliquam commodo nisi nec leo molestie aliquam. In egestas pharetra nisi quis rutrum. Suspendisse mollis turpis maximus eros venenatis posuere.</p>

                    <!-- Size == Diameter of Fan head -->
                    <div class="product-size-container">
                        <strong>Select Size:-</strong>

                        <div class="product-size">
                            <input type="checkbox" class="size-checkbox" id="size-55">
                            <label for="size-55" class="size-label">55"</label>

                            <input type="checkbox" class="size-checkbox" id="size-35">
                            <label for="size-35" class="size-label">35"</label>

                            <input type="checkbox" class="size-checkbox" id="size-15">
                            <label for="size-15" class="size-label">15"</label>

                            <input type="checkbox" class="size-checkbox" id="size-5">
                            <label for="size-5" class="size-label">5"</label>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

        <script type="text/javascript">
            $('.size-checkbox').on('change', function(){
                $('.size-checkbox').not(this).prop('checked', false);
            });
        </script>

        <?php
            include 'footer.php';
        ?>
        
    </body>
</html>
