<?php
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Clear the 'user_email' cookie
setcookie('user_email', '', time() - 3600, '/');  // Expire the cookie by setting a time in the past

// Redirect to the home page
header('Location: ../index.php');
exit();
?>
