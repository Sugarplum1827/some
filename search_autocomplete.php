<?php
include 'db.php';

if (isset($_POST['query'])) {
    $search = $_POST['query'];
    $query = "SELECT name FROM patients WHERE name LIKE '%$search%' LIMIT 5";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo '<ul>';
        while ($row = $result->fetch_assoc()) {
            echo '<li>' . $row['name'] . '</li>';
        }
        echo '</ul>';
    } else {
        echo '<ul><li>No results found</li></ul>';
    }
}
?>