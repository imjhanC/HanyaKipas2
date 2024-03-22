<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <!--ADD LOGO HERE-->
        <title>HanyaKipas : The only fans selling website</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    </head>
    <body>
        <!-- navigation bar -->
        <?php
            include '../Includes/navigationBar.php';
        ?>

        <section id =" slidershow-container">
            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="testGREENslider.png" style="width:100%">
                </div>
  
                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="testBLUEslider.png" style="width:100%">
                </div>
  
                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="testREDslider.png" style="width:100%">
                </div>
  
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
  
            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </section>
        <section id="info">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi cum ratione dolorum id aliquam unde incidunt, velit rem ipsa, eos perferendis quod facere laboriosam doloremque esse explicabo similique neque vero!</p>
            <img src="testGREENslider.png" style="text-align: center;">
        </section>
        <br>
        <br>
        <br>
        <?php
            include 'footer.php';
        ?>
        <script src="script.js"></script>
    </body>
</html>