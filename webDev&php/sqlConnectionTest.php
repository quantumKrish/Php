<?php

$servername = "localhost";
$username = "Kirishanth";
$password = "Renuja2006)))";


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
} else {
    echo "Connected successfully";
}

?>