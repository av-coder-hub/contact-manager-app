<?php
include 'db.php';

$id = $_POST['id'];
$conn->query("DELETE FROM contacts WHERE id = $id");
