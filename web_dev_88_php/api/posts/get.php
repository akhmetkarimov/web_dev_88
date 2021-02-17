

<?php

include "../../config/database.php";

$page = 0;
$limit = 10;
$skip = 0;

$field = 'id';
$order = 'DESC';
$category_id = null;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $skip = ($page - 1) * $limit;
}

// if (isset($_GET['field'])) {
//     $field = $_GET['field'];
//     $order = $_GET['sort'];
// }

$postQuery = $db->query(
    "SELECT `posts`.id, `posts`.`title`, `posts`.`description`, `posts`.`time`,`posts`.`views`, 
    `posts`.`category_id`, `category`.`name` FROM `posts` INNER JOIN `category` ON `posts`.`category_id` = `category`.id
    ORDER BY $field $order LIMIT $skip, $limit;"
);

$pageQuery = $db->query("SELECT COUNT(*) as total FROM `posts`");

if (isset($_GET['catid']) && $_GET['catid'] != 0) {
    $category_id = $_GET['catid'];
    $postQuery = $db->query(
        "SELECT `posts`.id, `posts`.`title`, `posts`.`description`, `posts`.`time`,`posts`.`views`, 
        `posts`.`category_id`, `category`.`name` FROM `posts` INNER JOIN `category` ON `posts`.`category_id` = `category`.id
        WHERE `posts`.category_id = $category_id
        ORDER BY $field $order LIMIT $skip, $limit;"
    );    
    $pageQuery = $db->query("SELECT COUNT(*) as total FROM `posts` WHERE category_id=$category_id;");
}




$count = $pageQuery->fetch_object()->total;

$pages = ceil($count / $limit);

$result = [
    'posts' => []
];


if ($postQuery->num_rows > 0) {
    while ($row = $postQuery->fetch_object()) {
        array_push($result['posts'], $row);
    }
}



$result['totalPages'] = $pages;


echo json_encode($result);
