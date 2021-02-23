<?php
    include "../../config/urls.php";

    session_start();
    session_destroy();

    header("Location: $BASE_URL/main.php");