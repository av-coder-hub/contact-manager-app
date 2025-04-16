<?php
$host = "tramway.proxy.rlwy.net";
$port = 22020;
$user = "root";
$pass = "lANJaSVbCXLTrjYsnlINHBXJartYmagA";
$db   = "railway";

$conn = new mysqli($host, $user, $pass, $db, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
