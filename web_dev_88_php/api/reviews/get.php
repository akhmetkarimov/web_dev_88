

<?php


include "../../config/database.php";


$pid = $_GET['post_id'];

$page = 0;
$limit = 10;
$skip = 0;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $skip = ($page - 1) * $limit;
}

$reviewQuery = $db->query(
    "SELECT * FROM `reviews` INNER JOIN `accounts` ON `reviews`.`author_id` = `accounts`.id 
     WHERE `reviews`.post_id = $pid ORDER BY `reviews`.id DESC LIMIT $skip, $limit;
    "
);

$pageQuery = $db->query("SELECT COUNT(*) as total FROM `reviews` WHERE post_id = $pid;");

$count = $pageQuery->fetch_object()->total;

$pages = ceil($count / $limit);

$result = [
    'reviews' => []
];

if ($reviewQuery->num_rows > 0) {
    while ($row = $reviewQuery->fetch_object()) {
        array_push($result['reviews'], $row);
    }
}

$result['totalPages'] = $pages;

echo json_encode($result);
