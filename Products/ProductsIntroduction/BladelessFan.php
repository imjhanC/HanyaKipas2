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
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap">

        <style>
        .swiper-slide img{
            width: 250px;
            height: 875px;
            object-position: cover;
        }
        </style>

    </head>
    <body>
        <section class="product-header">
            <a href="../../../HanyaKipas2/Homepage/index.php"><img src="../logo.png" style="width: 150px; height: 90px;"></a></img>
        </section>
        <section class="product-page">
            <div class="product-details">
                <div class="product-image">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="../ProductsImage/BladelessFan/bladelessfan1.png">
                            </div>

                            <div class="swiper-slide">
                                <img src="../ProductsImage/BladelessFan/bladelessfan2.png">
                            </div>

                            <div class="swiper-slide">
                                <img src="../ProductsImage/BladelessFan/bladelessfan3.png">
                            </div>

                            <div class="swiper-slide">
                                <img src="../ProductsImage/BladelessFan/bladelessfan4.png">
                            </div>

                            <div class="swiper-slide">
                                <img src="../ProductsImage/BladelessFan/bladelessfan5.png">
                            </div>

                            <div class="swiper-slide">
                                <img src="../ProductsImage/BladelessFan/bladelessfan6.png">
                            </div>
                        </div>
                        <div class="slider-btn">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>

                <div class="product-text">
                    <span class="product-category">BLADELESS FAN</span>
                    <h3>BLF07 Tower Fan Black/Silver</h3>

                    <!-- Use Database to get price -->
                    <span class="product-price">RM 6969.00</span>

                    <!-- Product Details -->
                    <p>To make fans work quietly, manufacturers use slow-running motors to spin the blades. This reduces noise but also reduces power, producing weak airflow. To make powerful fans, they use fast motors to spin the blades. But fast motors create more noise. Powerful and quiet is very difficult to achieve in a conventional fan. The new Dyson Cool™ fans have been engineered to be quieter, use less energy – yet generate powerful airflow.</p>

                    <!-- Size == Diameter of Fan head -->
                    <div class="product-size-container">
                        <strong>Select Color:-</strong>

                        <div class="product-size">
                            <input type="checkbox" class="size-checkbox" id="size-55">
                            <label for="size-55" class="size-label">Silver</label>

                            <input type="checkbox" class="size-checkbox" id="size-35">
                            <label for="size-35" class="size-label">Black</label>
                        </div>
                    </div>
                    <div class="product-btn">
                        <a href="xxx" class="add-to-cart">Add To Cart</a>
                    </div>

                    <!-- Product Page -->
                    <a href="xxx" class="product-page-btn">Back to Product Page</a>
                </div>
            </div>
        </section>
         <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

        <!-- Swiper -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Checkbox sselector -->
        <script type="text/javascript">
            $('.size-checkbox').on('change', function(){
                $('.size-checkbox').not(this).prop('checked', false);
            });
        </script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                450: {
                slidesPerView: 2,
                spaceBetween: 1,
                },
                820: {
                slidesPerView: 1,
                spaceBetween: 0,
                },
                1024: {
                slidesPerView: 3,
                spaceBetween: 1,
                },
            },
            });
        </script>
    </body>
</html>
