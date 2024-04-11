<?php
    // Database connection
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

    // Process form data
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $contactnumber = $_POST['cnumber'];
        $email = $_POST['email'];
        $enquiry = $_POST['enquiry'];
        $subject = $_POST['subject'];

        // Insert data into database
        $sql = "INSERT INTO enquiry (name, contactnumber, emailaddress, enquiry, subject)
                VALUES ('$name', '$contactnumber', '$email', '$enquiry', '$subject')";

        if ($conn->query($sql) === TRUE) {
            // Display success message
            header("Location: ContactUs.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close database connection
    $conn->close();
?>
