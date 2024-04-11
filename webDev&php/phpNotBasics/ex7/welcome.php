

<?php 


session_start();

if (!isset($_SESSION['email'])) {
    header("Location: ex7.php");
} else {
    echo "<h1> Welcome " . $_SESSION['email'] . "</h1>";
}

echo "<a href='logout.php'>Logout</a>"

?>