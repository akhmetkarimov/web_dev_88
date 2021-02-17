

<?php

include "../../config/database.php";

$categoryQuery = $db->query("SELECT * FROM category");

$result = [
    'categories' => []
];

while ($row = $categoryQuery->fetch_object()) {
    array_push($result['categories'], $row);
}

echo json_encode($result);
