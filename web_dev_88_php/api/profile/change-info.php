<?php

include "../../config/database.php";

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['account'];
$img_path = null;

if (isset($_FILES["avatar"]) && isset($_FILES["avatar"]["name"])) {
    $temp = explode(".", $_FILES["avatar"]["name"]); // png, jpg, jpeg, webp ... 
    $file_name =  "avatar-" . $uid . time() . "." . end($temp); //avatar - 512341234.png 
    move_uploaded_file($_FILES["avatar"]["tmp_name"], "../../images/profile/$file_name");
    $img_path = "images/profile/$file_name"; 
    $db->query("UPDATE `accounts` SET `first`='$first', `last`='$last', `avatar`='$img_path' WHERE id=$uid;");
  
  
    echo json_encode([
        'firstn' => $first,
        'lastn' => $last,
        'img' => $img_path
    ]);
} else {
    $db->query("UPDATE `accounts` SET `first`='$first', `last`='$last' WHERE id=$uid;");
    echo json_encode(true);
}

