<?php

include "../../config/database.php";

    $add_title = $_POST['title'];
    $add_description = $_POST['description'];
    $add_category = $_POST['category'];
    $add_author = $_POST['author'];
    $img_path = 'images/posts/post.png';

    if (isset($_FILES["poster"]) && isset($_FILES["poster"]["name"])) {
        $temp = explode(".", $_FILES["poster"]["name"]); // png, jpg, jpeg, webp ... 
        $file_name =  "poster-" . time() . "." . end($temp); //avatar - 512341234.png 
        move_uploaded_file($_FILES["poster"]["tmp_name"], "../../images/posts/$file_name");
        $img_path = "images/posts/$file_name"; 
    }    

    $db->query("INSERT INTO `posts` (`title`, `description`, `category_id`, `author_id`, `poster`) VALUES ('$add_title', '$add_description', '$add_category', '$add_author', '$img_path');");

    echo json_encode(true);