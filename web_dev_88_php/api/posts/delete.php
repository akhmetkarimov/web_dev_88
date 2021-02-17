<?php

include "../../config/database.php";

$id = $_GET['pid'];

$db->query("DELETE FROM posts WHERE id = $id");


header("Location: $BASE_URL");
