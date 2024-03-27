<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <title>Login page</title>
</head>
<body>
    <form id="loginPage" method="POST">
        <label for="username">Username / Email Address</label>
        <input type="text" id="username" name="username" >
        <div id="username-error" style="color: red;"> 
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST['username'])) {
                    echo "<h1>Please fill in your username !</h1>";
                }
            ?>
        </div>

        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <div id="password-error" style="color: red;">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST['password'])) {
                    echo "<h1>Please fill in your password !</h1>";
                }
            ?>
        </div>
        
        <div id="accountnotfound">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
                    if (empty($_POST['username']) && empty($_POST['password'])) {
                        echo "<p>Please fill in your username and password !</p>";
                    } else {
                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        // Connect to MySQL database
                        $servername = "localhost:3308";
                        $db_username = "root";
                        $db_password = "";
                        $dbname = "hanyakipas";

                        $conn = new mysqli($servername, $db_username, $db_password, $dbname);

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // Prepare SQL statement to retrieve user data based on username/email and password
                        $sql = "SELECT * FROM user WHERE (username = ? OR emailaddress = ?) AND password = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("sss", $username, $username, $password);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        // Check if user exists
                        if ($result->num_rows > 0) {
                            // User exists, redirect to index.php
                            header("Location: index.php");
                            exit; // Important to stop further execution of PHP script after redirecting
                        } else {
                            // User does not exist, display "No such account" message
                            echo "<p>No such account</p>";
                        }

                        // Close database connection
                        $stmt->close();
                        $conn->close();
                    }
                }
            ?>
        </div>

        <button type="submit">Login</button>
        <a href="Register.php">Do not have an account ? Register here</a>
    </form>
</body>
</html>
