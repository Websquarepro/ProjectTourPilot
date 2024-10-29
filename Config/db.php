<?php
$host = 'mysql.hostinger.com';
$db = 'u929828006_tourpilot';
$user = 'u929828006_tourpilot_db';
$pass = '6!4S428o1';

// Create a connection
$conn = new mysqli($host, $user, $pass, $db);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully to the database.";
}
?>
