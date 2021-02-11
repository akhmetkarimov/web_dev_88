<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>

    <div class="row container mt-5">
        <!-- 
    <?php

    // include "database.php";

    // $postQuery = $db->query("SELECT * FROM posts");

    // while ($row = $postQuery->fetch_object()) {
    ?>

        <div class="col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row->title ?></h5>
                    <p class="card-text"><?php echo $row->description ?></p>
                    <a href="detail.php" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>


    <?php
    // }
    ?> -->

        <?php

        include "database.php";
        $pid = $_GET['post-id'];

        $postQuery = $db->query("SELECT * FROM posts WHERE id=$pid");

        $post = $postQuery->fetch_object();
        echo "
            <div class='col-sm-6 mb-4'>
                <div class='card'>
                    <div class='card-body'>
                        <h5 class='card-title'>$post->title</h5>
                        <p class='card-text'>$post->description</p>
                    </div>
                </div>
            </div>
            ";

        ?>



    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>
<!-- 
localhost/phpmyadmin - XAMPP
localhost:8888/phpmyadmin - MAMP -->