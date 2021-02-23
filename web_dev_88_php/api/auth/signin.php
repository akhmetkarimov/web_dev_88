<?php

include "../../config/database.php";

$userEmail = $_POST['userEmail'];
$password = sha1($_POST['password']);


$exist = $db->query("SELECT * FROM accounts WHERE email = '$userEmail' OR username='$userEmail'; ");
$user = $exist->fetch_object();

if ($exist->num_rows > 0) {
    if ($user->password != $password) {

        echo json_encode([
            'error' => 'Password Not Match',
            'status' => false
        ]);

    } else {
        $_SESSION['account'] = $user->id;
        echo json_encode([
            'status' => true
        ]);
    }
} else {
    echo json_encode([
        'error' => 'User Not Found',
        'status' => false
    ]);
}



