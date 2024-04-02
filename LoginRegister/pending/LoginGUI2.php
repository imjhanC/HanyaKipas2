<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styleGUI.css">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form id="registrationForm" action="#" method="POST">
                <h1>Create Account</h1>
                <span>You may use your name and email as your username !</span>
                <input type="text" id="username" name="username" placeholder="Username" required />
                <input type="email" id="email" name="email" placeholder="Email" required />
                <input type="password" id="password" name="password" placeholder="Password" required />
                <input type="password" id="repassword" name="repassword" placeholder="Reconfirm your password" required />
                <p id="status-message"></p>
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form id="signInForm" action="#">
                <h1>Sign in</h1>
                <span>Note! You may use your username or email to sign in</span>
                <input type="text" name="signInUsername" placeholder="Email / Username" required />
                <input type="password" name="signInPassword" placeholder="Password" required />
                <p id="status-message-login"></p>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });

        // Registration form
        document.getElementById("registrationForm").addEventListener("submit", function(event) {
            event.preventDefault();
            
            var username = document.getElementById("username").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var repassword = document.getElementById("repassword").value;

            // Password validation
            var passwordRegex = /^(?=.*[A-Z])(?=.*\d).{8,}$/;
            if (!passwordRegex.test(password)) {
                document.getElementById("status-message").textContent = "Password must contain at least 8 characters, including uppercase letters and numbers.";
                return;
            } else {
                document.getElementById("status-message").textContent = "";
            }

            // Re-entered password validation
            if (password !== repassword) {
                document.getElementById("status-message").textContent = "Passwords do not match.";
                return;
            } else {
                document.getElementById("status-message").textContent = "";
            }

            // Send data to PHP for server-side validation and database operations
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == XMLHttpRequest.DONE) {
                    var response = xhr.responseText;
                    document.getElementById("status-message").textContent = response;
                    if (response === "Account creation succeed!") {
                        document.getElementById("registrationForm").reset(); // Clear the form
                    }
                }
            };
            xhr.open("POST", "register.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("username=" + username + "&email=" + email + "&password=" + password);
        });

        // Sign-in form
        document.getElementById("signInForm").addEventListener("submit", function(event) {
            event.preventDefault();
            
            var signInUsername = document.getElementsByName("signInUsername")[0].value;
            var signInPassword = document.getElementsByName("signInPassword")[0].value;

            // Check if both username/email and password are provided
            if (!signInUsername || !signInPassword) {
                document.getElementById("status-message-login").textContent = "Both username/email and password must not be blank";
                return;
            }

            // Send data to PHP for server-side validation
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == XMLHttpRequest.DONE) {
                    var response = xhr.responseText;
                    if (response === "Sign in successful") {
                        // Redirect to hi.php if sign-in is successful
                        window.location.href = "../../HanyaKipas/Homepage/index.php";
                    } else {
                        // Display error message if sign-in fails
                        document.getElementById("status-message-login").textContent = response;
                    }
                }
            };
            xhr.open("POST", "login.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("signInUsername=" + signInUsername + "&signInPassword=" + signInPassword);
        });
    </script>
</body>
</html>
