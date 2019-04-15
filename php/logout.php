<?php
include("db.php");

// Initialize the session.
session_start();

// Unset all of the session variables.
$_SESSION = array();

//This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();

echo "<script>\n"; 
echo "alert('You are now logged out.');\n";
echo "window.location='../index.php';\n"; 
echo "</script>";

?>