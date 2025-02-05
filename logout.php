<?php
include 'config.php';
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Clear cookies (if applicable)
if (isset($_COOKIE['cookie_name'])) {
    setcookie('cookie_name', '', time() - 3600, '/');
}

// Prevent caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");

// Redirect to login page
header('location:login.php');
exit;
?>