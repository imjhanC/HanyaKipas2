<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are not empty
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        // Sanitize user input to prevent SQL Injection
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
            // User exists, perform actions like setting session or redirecting to dashboard
            echo "Login successful!";
            // Example: set session and redirect
            // session_start();
            // $_SESSION['username'] = $username;
            // header("Location: dashboard.php");
        } else {
            echo "Invalid username/email or password.";
        }

        // Close database connection
        $stmt->close();
        $conn->close();
    } else {
        // If username or password is blank, display error
        echo "<div id='username-error' style='color: red;'> 
                    <h1>Please fill in  your username !</h1>
            </div>";

        echo "<div id='password-error' style='color: red;'>
                    <h1>Please fill in your password !</h1>
            </div>";
    }
}
?>
