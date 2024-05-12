<?php
// Start session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session data
session_destroy();

// Ensure that the session cookie is deleted
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Redirect to the login page
header("Location: login.php");
exit;
?>
