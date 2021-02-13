

<?php

    include "database.php";

    $page = 0;
    $limit = 10;
    $skip = 0;

    $field = 'id';
    $order = 'DESC';

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        $skip = ($page - 1) * $limit;
    }

    // if (isset($_GET['field'])) {
    //     $field = $_GET['field'];
    //     $order = $_GET['sort'];
    // }

    $postQuery = $db->query("SELECT * FROM posts ORDER BY $field $order LIMIT $skip, $limit;");
    
    $pageQuery = $db->query("SELECT COUNT(*) as total FROM `posts`");
    $count = $pageQuery->fetch_object()->total;

    $pages = ceil($count / $limit);
    
    $result = [
        'posts' => []
    ];

    while ($row = $postQuery->fetch_object()) {
        array_push($result['posts'], $row);
    }


    $result['totalPages'] = $pages;


    echo json_encode($result);