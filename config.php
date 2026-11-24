<?php
if (!isset($_SESSION)) {
    session_start();
}

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'salondemo1';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set charset to utf8mb4 for proper character handling
mysqli_set_charset($conn, "utf8mb4");

/**
 * Helper function for safe redirects with optional message
 */
if (!function_exists('redirect')) {
    function redirect($url, $msg = null) {
        if ($msg !== null) {
            $url .= (strpos($url, '?') !== false ? '&' : '?') . 'msg=' . $msg;
        }
        header("Location: " . $url);
        exit();
    }
}

/**
 * Helper function for safe JS alerts then redirect
 */
if (!function_exists('alert_redirect')) {
    function alert_redirect($message, $url) {
        echo "<script>alert('$message'); window.location='$url';</script>";
        exit();
    }
}
?>
