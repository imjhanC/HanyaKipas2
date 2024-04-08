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
            width: 750px;
            height: 750px;
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
                                <img src="../ProductsImage/TableFan/tablefan1.webp">
                            </div>

                            <div class="swiper-slide">
                                <img src="../ProductsImage/TableFan/tablefan2.webp">
                            </div>

                            <div class="swiper-slide">
                                <img src="../ProductsImage/TableFan/tablefan3.webp">
                            </div>

                            <div class="swiper-slide">
                                <img src="../ProductsImage/TableFan/tablefan4.webp">
                            </div>

                            <div class="swiper-slide">
                                <img src="../ProductsImage/TableFan/tablefan5.webp">
                            </div>
                        </div>
                        <div class="slider-btn">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>

                <div class="product-text">
                    <span class="product-category">TABLE FAN</span>
                    <h3>TF11 Table Fan Black/White</h3>

                    <!-- Use Database to get price -->
                    <span class="product-price">RM 56.00</span>

                    <!-- Product Details -->
                    <p>The innovative fan guard design creates dual-channel air, effectively increasing the pressure of the air. The ball bearing motor provides large air volume than the usual motor, as well as more durable. The 5 fan blades design, together with the fan guard design, brings larger air volume to make coolness and torsion angle brings more air volume.</p>
                    
                    <!-- Size == Diameter of Fan head -->
                    <div class="product-size-container">
                        <strong>Select Color:-</strong>

                        <div class="product-size">
                            <input type="checkbox" class="size-checkbox" id="size-55">
                            <label for="size-55" class="size-label">White</label>

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
                slidesPerView: 1,
                spaceBetween: 1,
                },
            },
            });
        </script>
    </body>
</html>
