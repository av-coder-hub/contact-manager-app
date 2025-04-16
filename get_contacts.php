<?php
include 'db.php';

$search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : "";

$sql = "SELECT * FROM contacts 
        WHERE name LIKE '%$search%' 
        ORDER BY name ASC";

$result = $conn->query($sql);

$grouped = [];

while ($row = $result->fetch_assoc()) {
    $firstLetter = strtoupper($row['name'][0]);
    $grouped[$firstLetter][] = $row;
}

foreach ($grouped as $letter => $contacts) {
    echo "<tr><td colspan='4' style='background:#eee; font-weight:bold;'>$letter</td></tr>";
    foreach ($contacts as $contact) {
        echo "<tr data-id='{$contact['id']}'>
                <td><span class='name'>{$contact['name']}</span></td>
                <td><span class='email'>{$contact['email']}</span></td>
                <td><span class='phone'>{$contact['phone']}</span></td>
                <td>
                    <button class='btn btn-sm btn-info editBtn'>Edit</button>
                    <button onclick='deleteContact({$contact['id']})' class='btn btn-sm btn-danger'>Delete</button>
                </td>
              </tr>";
    }
}
?>
