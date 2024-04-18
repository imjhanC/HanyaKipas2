<?php
session_start(); // Start the session at the beginning of the PHP script
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
		<title>HanyaKipas: Product page</title>
		<link rel="stylesheet" href="productstyles.css">
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
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Platypi:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
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
                    <div id="search">
                        <svg viewBox="0 0 420 60" xmlns="http://www.w3.org/2000/svg">
                            <rect class="bar"/>
                            
                            <g class="magnifier">
                                <circle class="glass"/>
                                <line class="handle" x1="32" y1="32" x2="44" y2="44"></line>
                            </g>
                    
                            <g class="sparks">
                                <circle class="spark"/>
                                <circle class="spark"/>
                                <circle class="spark"/>
                            </g>
                    
                            <g class="burst pattern-one">
                                <circle class="particle circle"/>
                                <path class="particle triangle"/>
                                <circle class="particle circle"/>
                                <path class="particle plus"/>
                                <rect class="particle rect"/>
                                <path class="particle triangle"/>
                            </g>
                            <g class="burst pattern-two">
                                <path class="particle plus"/>
                                <circle class="particle circle"/>
                                <path class="particle triangle"/>
                                <rect class="particle rect"/>
                                <circle class="particle circle"/>
                                <path class="particle plus"/>
                            </g>
                            <g class="burst pattern-three">
                                <circle class="particle circle"/>
                                <rect class="particle rect"/>
                                <path class="particle plus"/>
                                <path class="particle triangle"/>
                                <rect class="particle rect"/>
                                <path class="particle plus"/>
                            </g>
                        </svg>
                        <input type=search name=q aria-label="Search for inspiration"/>
                    </div>
                    
                   <div id="results">
                        
                    </div>
                    <a href="../../HanyaKipas/Products/ShoppingCart.php"><img src="shopping-cart.png" alt="shopping cart" height =50 width =50></a><span id="cartItemCount" class="cart-counter"></span></img>
                    <?php 
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
                </ul>
            </div>
        </nav>
		<br>
        <section id='product-display'>
            <h1 id='msg1'> Let's make the process much more quicker !</h1>
            <div class="btn-container">
                <button class="btn" data-type="celling fan">
                    <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
                        <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
                    </svg>
                    <span class="text">Celling fan</span>
                </button>
                <button class="btn" data-type="table fan">
                    <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
                        <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
                    </svg>
                    <span class="text">Table fan</span>
                </button>
                <button class="btn" data-type="bladeless fan">
                    <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
                        <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
                    </svg>
                    <span class="text">Bladeless fan</span>
                </button>
            </div>
            <br>
            <br>
            <br>
            <?php
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

            // Fetch products from database
            $sql = "SELECT productname, productprice, productdesc, producttype, productqty, productimage FROM product";
            $result = $conn->query($sql);

            // Display products
            if ($result->num_rows > 0) {
                echo "<div id='product-listing'>";
                $counter = 0; // Counter to track the number of products
                while($row = $result->fetch_assoc()) {
                    echo "<div class='product-card'>";
                    echo "<img src='data:image/jpeg;base64," . base64_encode($row['productimage']) . "' alt='Product Image' class='product-image'>";
                    echo "<h1>" . $row['productname'] . "</h1>";
                    echo "<p>". $row['productprice'] . "</p>";
                    echo "<p> Description : ". $row['productdesc'] . "</p>";
                    echo "<p>". $row['producttype'] . "</p>";
                    echo "<p> Quantity : ". $row['productqty'] . "</p>";
                    echo "<button type='submit' class='add-to-cart-btn'>Add to Cart</button>";
                    echo "</div>";
                    $counter++;
                    // Break the loop after displaying the first four products horizontally
                    if ($counter >= 4) {
                        break;
                    }
                }

                // Display the rest of the products underneath
                while($row = $result->fetch_assoc()) {
                    echo "<div class='product-card'>";
                    echo "<img src='data:image/jpeg;base64," . base64_encode($row['productimage']) . "' alt='Product Image' class='product-image'>";
                    echo "<h1>" . $row['productname'] . "</h1>";
                    echo "<p>". $row['productprice'] . "</p>";
                    echo "<p> Description : ". $row['productdesc'] . "</p>";
                    echo "<p>". $row['producttype'] . "</p>";
                    echo "<p> Quantity : ". $row['productqty'] . "</p>";
                    echo "<button type='submit' class='add-to-cart-btn'>Add to Cart</button>";
                    echo "</div>";
                }

                echo "</div>"; // Close #product-listing
            } else {
                echo "No products found";
            }

            // Close connection
            $conn->close();
            ?>
            <br>
            <br>
        </section>
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
            document.addEventListener('DOMContentLoaded', function() {
            const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
            
            addToCartButtons.forEach(button => {
                button.addEventListener('click', addToCart);
            });

            function addToCart(event) {
                const productCard = event.target.closest('.product-card');
                const productNameElement = productCard.querySelector('h1');
                const productImageElement = productCard.querySelector('.product-image');
                const productPriceElement = productCard.querySelector('p:nth-of-type(1)');
                const productQtyElement = productCard.querySelector('p:nth-of-type(2)');
                const productTypeElement = productCard.querySelector('p:nth-of-type(3)');
                
                // Check if all required elements are present
                if (!productNameElement || !productImageElement || !productPriceElement || !productQtyElement || !productTypeElement) {
                    console.error('One or more product details not found');
                    return;
                }

                // Extract product details
                const productName = productNameElement.innerText;
                const productImage = productImageElement.src;
                const productPrice = productPriceElement.innerText.trim();
                const productQty = productQtyElement.innerText.trim();
                const productType = productTypeElement.innerText.trim();
                
                const xhr = new XMLHttpRequest();
                xhr.open('POST', 'addToCart.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        // Handle successful response
                        alert(xhr.responseText);
                        window.location.reload(); // Reload the page to maintain the scroll position
                    } else {
                        // Handle error
                        alert('Error adding to cart');
                    }
                };
                xhr.onerror = function() {
                    // Handle network error
                    alert('Network error occurred');
                };
                
                const data = `productName=${productName}&productImage=${productImage}&productPrice=${productPrice}&productQty=${productQty}&productType=${productType}`;
                xhr.send(data);
                
                event.preventDefault();
            }
        });
        document.addEventListener('DOMContentLoaded', function() {
        const cartItemCountSpan = document.getElementById('cartItemCount');
    
        // Function to fetch cart item count
        function getCartItemCount() {
            const xhr = new XMLHttpRequest();
            xhr.open('GET', 'getCartItemCount.php', true);
            xhr.onload = function() {
            if (xhr.status === 200) {
                // Update the content of the span element
                cartItemCountSpan.textContent = xhr.responseText;
            } else {
                console.error('Error fetching cart item count');
            }
            };
            xhr.onerror = function() {
                console.error('Network error occurred');
            };
            xhr.send();
        }

        // Fetch cart item count initially when the page loads
            getCartItemCount();
        });

        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.querySelector('input[name="q"]');
            const productCards = document.querySelectorAll('.product-card');

            searchInput.addEventListener('input', function() {
                const searchText = this.value.toLowerCase().trim();

                productCards.forEach(card => {
                    const productName = card.querySelector('h1').innerText.toLowerCase();
                    const productType = card.querySelector('p:nth-of-type(3)').innerText.toLowerCase();

                    if (productName.includes(searchText) || productType.includes(searchText)) {
                        card.style.display = 'block'; // Show the product card
                    } else {
                        card.style.display = 'none'; // Hide the product card
                    }
                });
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            const productCards = document.querySelectorAll('.product-card');
            const filterButtons = document.querySelectorAll('.btn');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const filterType = this.getAttribute('data-type').toLowerCase().trim();

                    productCards.forEach(card => {
                        const productType = card.querySelector('p:nth-of-type(3)').innerText.toLowerCase().trim();

                        if (productType.includes(filterType) || filterType === '') {
                            card.style.display = 'block'; // Show the product card
                        } else {
                            card.style.display = 'none'; // Hide the product card
                        }
                    });
                });
            });
        });

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