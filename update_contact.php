<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "UPDATE contacts SET name='$name', email='$email', phone='$phone' WHERE id=$id";

if ($conn->query($sql)) {
    echo "Updated";
} else {
    echo "Error";
}
?>
