<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
		<title>HanyaKipas: Contact Us</title>
		<link rel="stylesheet" href="contactstyles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	</head>
	<body>
		<!-- navigation bar -->
        <nav id="desktop-nav">
            <div class="text-logo">
                <img src ="logo.png" width =150px height =90px></img>
            </div>
            <div>
                <ul class="nav-links">

                    <a href="../../HanyaKipas/Homepage/index.php" class="home">Home</a>
                    <a href="../../HanyaKipas/Products/ProductPage.php" class="home">Products</a>
                    <a href="../../HanyaKipas/ContactUs/ContactUs.php" class="home">Contact Us</a>

                    <a href="../../HanyaKipas/Products/ShoppingCart.php"><img src="shopping-cart.png" alt="shopping cart" id="shopping" height =50 width =50></a></img>
                         
                    
                    <?php 
                        session_start();
                        if(isset($_SESSION['login']) && $_SESSION['login'] === true){
                            // logged in
                            $username = $_SESSION['username'];
                            echo '<a>
                                    <img src="login.png" alt="shopping cart" height="50" width="50" id="loginlogo" onclick="myFunction()">
                                 </a>
                                 <div id="myDropdown" class="dropdown-content">
                                    <br>
                                    <h1> Welcome ' . $username . ' ! </h1>
                                    <br>
                                    <hr>
                                    <a href="logout.php">Logout </a>
                                </div>';
                                    //$username = $_SESSION['username']; // Retrieve username from session variable
                                    //echo "Welcome, $username!";
                        } else {
                            // not logged in
                            echo '<a href="../../HanyaKipas/LoginRegister/LoginGUI.php">
                                    <img src="login.png" alt="shopping cart" height="50" width="50" id="loginlogo">
                                    </a>';
                        }
                    ?>
                    </div>
                </ul>
            </div>
        </nav>
		<br>
            <section id="contact-us-form">
            <div id="how-can-we-help">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h1 id="help-label">How can we help you ?</h1>
                <br>
                <br>
                <br>
                <form action="form.php" method="post">
                    <div class="form-group">
                        <label for="name">Full name:</label>
                        <input type="text" id="name" name="name" placeholder="Your full name goes here.." pattern="[A-Za-z\s]+" title="Please enter a valid name (letters and spaces only)" required>
                    </div>
                    <div class="form-group">
                        <label for="cnumber">Contact number:</label>
                        <input type="text" id="cnumber" name="cnumber" placeholder="Contact number goes here.." pattern="[0-9]+" title="Please enter a valid contact number (numbers only)" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="text" id="email" name="email" placeholder="Email Address goes here.." pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" title="Please enter a valid email address" required>
                    </div>
                    <div class="form-group">
                        <label for="enquiry">Purpose:</label>
                        <select id="enquiry" name="enquiry">
                            <option value="General enquiry">General Enquiry</option>
                            <option value="Complaint">Complaint</option>
                            <option value="Suggestion">Suggestion</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <textarea id="subject" name="subject" placeholder="Type here.." style="height:200px"></textarea>
                    </div>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </section>
		<br>
		<br>
		<footer class="footer">
            <div id="copyright">
                <p>Copyright &#169 HanyaKipas Sdn. Bhd 2024</p>
                <p>HanyaKipas Sdn. Bhd || The best fan selling company in Malaysia (Co No.6969)</p>
            </div>
            <br>
            <div id="footerbuttons">
                <a href="../../HanyaKipas/Homepage/index.php">Home</a>
                <a href="../../HanyaKipas/Products/ProductPage.php" id="productfooter">Products</a>
                <a href="../../HanyaKipas/ContactUs/ContactUs.php" id="contactUsfooter">Contact Us</a>
            </div>
        </footer>
        <script> 
            function myFunction() {
                var dropdown = document.getElementById("myDropdown");
                // Toggle the display of the dropdown content
                if (dropdown.style.display === "block") {
                    dropdown.style.display = "none";
                } else {
                    dropdown.style.display = "block";
                }
            }
        </script>
	</body>
</html>