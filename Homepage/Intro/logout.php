<?php
// Start session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to homepage
header("Location: ../../HanyaKipas/Homepage/index.php");
exit;
?>