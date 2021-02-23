<?php

include "../../config/database.php";

$first = $_POST['firstName'];
$last = $_POST['lastName'];
$userName = $_POST['userName'];
$email = $_POST['email'];
$password = $_POST['password'];
$hashPassword = sha1($password);

$exist = $db->query("SELECT * FROM accounts WHERE email = '$email' OR username='$userName'; ");

if ($exist->num_rows == 0) {

    $db->query(
        "INSERT INTO `accounts` (`first`, `last`, `username`, `email`, `password`)
             VALUES ('$first', '$last', '$userName', '$email', '$hashPassword');"
    ); 

    $user = $db->query("SELECT * FROM accounts WHERE email = '$email' AND username='$userName'; ");
    $userRes = $user->fetch_object();

    session_start();

    $_SESSION['account'] = $userRes->id;

    echo json_encode(true);
} else {
    echo json_encode(false);
}



