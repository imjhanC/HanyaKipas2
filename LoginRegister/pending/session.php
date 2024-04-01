<?php 
    session_start();

    // if the user is already logged in then redirect user to the homepage 
    if(isset($_SESSION["userid"]) && $_SESSION["userid"] === true){
        header("location: ../../HanyaKipas/Homepage/index.php");
        exit;
    }
?>