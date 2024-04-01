<!DOCTYPE html>
<html>
<head>
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
                <input type="password" id="repassword" name="repassword" placeholder="rePassword" required />
                <button type="submit">Sign Up</button>
                <p id="status-message"></p>
                <p id="password-error"></p>
                <p id="repassword-error"></p>
            </form>
        </div>
    </div>

    <script>
        document.getElementById("registrationForm").addEventListener("submit", function(event) {
            event.preventDefault();
            
            var username = document.getElementById("username").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var repassword = document.getElementById("repassword").value;

            // Password validation
            var passwordRegex = /^(?=.*[A-Z])(?=.*\d).{8,}$/;
            if (!passwordRegex.test(password)) {
                document.getElementById("password-error").textContent = "Password must contain at least 8 characters, including uppercase letters and numbers.";
                return;
            } else {
                document.getElementById("password-error").textContent = "";
            }

            // Re-entered password validation
            if (password !== repassword) {
                document.getElementById("repassword-error").textContent = "Passwords do not match.";
                return;
            } else {
                document.getElementById("repassword-error").textContent = "";
            }

            // Send data to PHP for server-side validation and database operations
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == XMLHttpRequest.DONE) {
                    var response = xhr.responseText;
                    document.getElementById("status-message").textContent = response;
                }
            };
            xhr.open("POST", "register3.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("username=" + username + "&email=" + email + "&password=" + password);
        });
    </script>
</body>
</html>
