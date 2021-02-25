

<?php


include "../../config/database.php";


$id = $_GET['uid'];


$userQuery = $db->query(
    "SELECT `first`, `last`, `avatar` FROM `accounts` WHERE id = $id;"
);

$result = [];

$row = $userQuery->fetch_object();
$row->avatar = isset($row->avatar) ? $row->avatar : 'images/profile/profile.png'; 

echo json_encode([
    'first' => $row->first,
    'last' => $row->last,
    'avatar' => $row->avatar ,
]);
