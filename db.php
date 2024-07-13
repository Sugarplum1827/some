<?php
$servername = "localhost";
$username = "testuser";
$password = "3k9b0r4b";
$dbname = "patient_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>