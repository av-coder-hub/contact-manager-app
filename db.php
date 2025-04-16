<?php
$conn = new mysqli("localhost", "root", "", "contact_app");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
