<?php
// Start or resume session
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session data
session_destroy();

// Redirect to the login page or any other desired location
header("Location: elmer14.php");
exit(); // Ensure that no further code is executed after redirection
?>