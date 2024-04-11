
<?php
// Start the session (if not already started)
session_start();

// Reset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Get the referring URL (if available)
$referer = isset($_SERVER['REFERER']) ? $_SERVER['REFERER'] : null;

// Redirect to the referring page (or default page if not available)
if ($referer) {
  header("Location: $referer");
} else {
  header("Location: ex7.php");  // Replace with your default page if needed
}

exit();
?>