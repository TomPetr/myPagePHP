<?php

$servername = "mysql.slccwebdev.com";
$username = "westpointe19";
$password = "westpointe!9";
$dbname = "westpointe19";
// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>