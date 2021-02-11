<?php

    include "database.php";

    $id = $_GET['pid'];

    $db->query("DELETE FROM posts WHERE id = $id");


    header("Location: /web_dev_88_php");