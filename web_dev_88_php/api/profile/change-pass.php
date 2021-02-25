<?php

include "../../config/database.php";

$oldpassword = sha1($_POST['oldpassword']);
$password = sha1($_POST['password']);
$uid = $_POST['account'];


$exist = $db->query("SELECT `password` FROM `accounts` WHERE id = $uid; ");
$user = $exist->fetch_object();

if ($user->password != $oldpassword) {
    echo json_encode([
        'status'=>false,
        'error'=>'Old Password Not Match'
    ]);
} else {
    $db->query("UPDATE `accounts` SET `password`='$password' WHERE id=$uid;");
    echo json_encode([
        'status'=>true
    ]);
}



