<?php 
    define('DBSERVER,localhost:3308');
    define('DBUSERNAME','root');
    define('DBPASSWORD','');
    define('DBNAME','user');

    $db =mysqli_connect(DBSERVER,DBUSERNAME,DBPASSWORD,DBNAME);

    if($db ==== false){
        die("Error : connection error ." . mysqli_connect_error())
    }
?>