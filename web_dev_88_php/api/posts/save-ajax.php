<?php

include "../../config/database.php";

    $add_title = $_POST['title'];
    $add_description = $_POST['description'];
    $add_category = $_POST['category'];
    $add_author = $_POST['author'];

    $db->query("INSERT INTO `posts` (`title`, `description`, `category_id`, `author_id`) VALUES ('$add_title', '$add_description', '$add_category', '$add_author');");

    echo json_encode(true);