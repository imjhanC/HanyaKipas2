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
                                <img src="../ProductsImage/CellingFan/ceilingfan1.jpg">
                            </div>

                            <div class="swiper-slide">
                                <img src="../ProductsImage/CellingFan/ceilingfan2.jpg">
                            </div>

                            <div class="swiper-slide">
                                <img src="../ProductsImage/CellingFan/ceilingfan3.jpg">
                            </div>

                            <div class="swiper-slide">
                                <img src="../ProductsImage/CellingFan/ceilingfan4.jpg">
                            </div>

                            <div class="swiper-slide">
                                <img src="../ProductsImage/CellingFan/ceilingfan5.jpg">
                            </div>
                        </div>
                        <div class="slider-btn">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>

                <div class="product-text">
                    <span class="product-category">CEILING FAN</span>
                    <h3>CF69 Ceiling Fan Black/Gold</h3>

                    <!-- Use Database to get price -->
                    <span class="product-price">RM 42000.00</span>

                    <!-- Product Details -->
                    <p>Add sleek, modern style to your kitchen or covered porch with this brushed nickel ceiling fan – the CF69 Ceiling Fan. Its nine blades feature a high-fashion rectangular shape that adds unique style to your home. Six energy-efficient speed settings, plus a reverse air flow feature, make it easy to maintain the ideal comfort level all year long, and the remote control allows you to operate the fan and light from anywhere in the room.</p>
                    
                    <!-- Size == Diameter of Fan head -->
                    <div class="product-size-container">
                        <strong>Select Color:-</strong>

                        <div class="product-size">
                            <input type="checkbox" class="size-checkbox" id="size-55">
                            <label for="size-55" class="size-label">Gold</label>

                            <input type="checkbox" class="size-checkbox" id="size-35">
                            <label for="size-35" class="size-label">Black</label>
                        </div>
                    </div>
                    <div class="product-btn">
                        <a href="xxx" class="add-to-cart">Add To Cart</a>
                    </div>

                    <!-- Product Page -->
                    <a href="/xxx" class="product-page-btn">Back to Product Page</a>

                    <a href="../ContactUs.php" class="help-btn">Need Any Help?</a>
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
