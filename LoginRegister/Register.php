<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Register account</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost:3308";
        $username = "root";
        $password = "";
        $dbname = "hanyakipas";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Escape user inputs for security
        $newUsername = $conn->real_escape_string($_POST['newUsername']);
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);

        // Insert into database
        $sql = "INSERT INTO user (username, emailaddress, password) VALUES ('$newUsername', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close connection
        $conn->close();
    }
    ?>

    <form id="registerPage" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="newUsername">Username</label>
        <input type="text" id="newUsername" name="newUsername" required><br>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required><br>

        <label for="confirmPassword">Confirm Password</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required><br>

        <button type="submit">Register</button>
    </form>

    <script>
        document.getElementById('registerPage').onsubmit = function() {
            var username = document.getElementById('newUsername').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirmPassword').value;

            // Username validation
            var usernameRegex = /^[A-Za-z0-9]+$/;
            if (!usernameRegex.test(username)) {
                alert('Username can only contain letters and numbers.');
                return false;
            }

            // Email validation
            if (!validateEmail(email)) {
                alert('Please enter a valid email address.');
                return false;
            }

            // Password validation
            var passwordRegex = /^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@\$#%]).{8,}$/;
            if (!passwordRegex.test(password)) {
                alert('Password must be at least 8 characters long and contain at least one uppercase letter, one number, and one special character.');
                return false;
            }

            // Confirm password
            if (password !== confirmPassword) {
                alert('Passwords do not match.');
                return false;
            }

            return true;
        };

        function validateEmail(email) {
            var re = /\S+@\S+\.\S+/;
            return re.test(email);
        }
    </script>
</body>
</html>
