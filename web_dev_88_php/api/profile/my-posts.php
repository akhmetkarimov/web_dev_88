

<?php


include "../../config/database.php";

$page = 0;
$limit = 10;
$skip = 0;

$id = $_SESSION['account'];

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $skip = ($page - 1) * $limit;
}

$postQuery = $db->query(
    "SELECT `posts`.id, `posts`.`title`, `posts`.`description`, `posts`.`time`,`posts`.`views`, 
    `posts`.`category_id`, `category`.`name`, `posts`.poster FROM `posts` INNER JOIN `category` ON `posts`.`category_id` = `category`.id
    WHERE `posts`.author_id = $id
    ORDER BY id DESC LIMIT $skip, $limit;"
);

$pageQuery = $db->query("SELECT COUNT(*) as total FROM `posts` WHERE author_id = $id;");

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
