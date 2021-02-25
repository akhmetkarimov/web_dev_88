<?php

include "../../config/database.php";

$first = $_POST['firstName'];
$last = $_POST['lastName'];
$userName = $_POST['userName'];
$email = $_POST['email'];
$password = $_POST['password'];
$hashPassword = sha1($password);
$img_path = 'images/profile/profile.png';
$exist = $db->query("SELECT * FROM accounts WHERE email = '$email' OR username='$userName'; ");

if ($exist->num_rows == 0) {

    if (isset($_FILES["avatar"]) && isset($_FILES["avatar"]["name"])) {
        $temp = explode(".", $_FILES["avatar"]["name"]); // png, jpg, jpeg, webp ... 
        $file_name =  "avatar-" . $uid . time() . "." . end($temp); //avatar - 512341234.png 
        move_uploaded_file($_FILES["avatar"]["tmp_name"], "../../images/profile/$file_name");
        $img_path = "images/profile/$file_name"; 
    }    

    $db->query(
        "INSERT INTO `accounts` (`first`, `last`, `username`, `email`, `password`, `avatar`)
             VALUES ('$first', '$last', '$userName', '$email', '$hashPassword', '$img_path');"
    ); 

    $user = $db->query("SELECT * FROM accounts WHERE email = '$email' AND username='$userName'; ");
    $userRes = $user->fetch_object();

    session_start();

    $_SESSION['account'] = $userRes->id;

    echo json_encode(true);
} else {
    echo json_encode(false);
}



