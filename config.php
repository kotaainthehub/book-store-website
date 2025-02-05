<?php
// Database configuration
define('DB_HOST', 'localhost'); // Database host
define('DB_USER', 'root');      // Database username
define('DB_PASS', '');          // Database password (replace with your actual password)
define('DB_NAME', 'shop_db');    // Database name

try {
    // Create a new MySQLi connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Check for connection errors
    if ($conn->connect_error) {
        throw new Exception("Database connection failed: " . $conn->connect_error);
    }

} catch (Exception $e) {
    // Log the error securely (avoid exposing sensitive details to users)
    error_log($e->getMessage(), 3, __DIR__ . '/logs/db_errors.log');

    // Display a generic error message to the user
    die('An error occurred while connecting to the database. Please try again later.');
}