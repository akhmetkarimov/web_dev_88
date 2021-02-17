<?php

include "../../config/database.php";

    $edit_title = $_POST['title'];
    $edit_description = $_POST['description'];
    $id = $_POST['pid'];

    $db->query("UPDATE posts SET title = '$edit_title', description = '$edit_description' WHERE id = $id;");


    header("Location: $BASE_URL");