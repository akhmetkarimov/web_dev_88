<?php

    include "database.php";

    $add_title = $_POST['title'];
    $add_description = $_POST['description'];

    $db->query("INSERT INTO posts (title, description) VALUES ('$add_title', '$add_description');");


    header("Location: /web_dev_88_php");