<?php

include "../../config/database.php";

    $title = $_POST['title'];
    $content = $_POST['content'];
    $mark = $_POST['mark'];
    $post_id = $_POST['post'];
    $author_id = $_POST['author'];

    $db->query("INSERT INTO `reviews` (`title`, `content`, `mark`, `post_id`, `author_id`) VALUES ('$title', '$content', '$mark', '$post_id', '$author_id');");

    echo json_encode(true);