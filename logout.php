<?php
session_start();

// Destroy the session
session_unset();
session_destroy();

// Redirect to the login page or any other page you prefer
header("Location: index.php");
?>