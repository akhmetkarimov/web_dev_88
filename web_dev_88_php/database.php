<?php 

    $db = new mysqli('localhost', 'root', 'root', 'decode-news'); // MAMP
    // $db = new mysqli('localhost', 'root', '', 'decode-news'); // XAMPP

    if ($db->connect_error) {
        echo $db->connect_error;
    }

