<?php
// Start the session
session_start();

// Unset all of the session variables
$_SESSION["loggedin"] = false;

// Redirect to landing page
header("Location: Landing Page/landing_page.html");
exit();
?>