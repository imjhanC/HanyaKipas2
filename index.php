<?php 
    $hostname = "localhost:3308";
    $username = "root";
    $password = "";
    $database = "user";

    $conn = mysqli_connect($hostname, $username, $password,$database);

    if(!$conn){
        die("Couldn't connec to the database");
    } else {
        echo "Connected";
    }
?>