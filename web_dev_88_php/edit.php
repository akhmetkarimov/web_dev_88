<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <?php

        include "database.php";
        $pid = $_GET['post-id'];

        $postQuery = $db->query("SELECT * FROM posts WHERE id=$pid");

        $post = $postQuery->fetch_object();
    ?>
    <form action="update.php" method="POST">
        <div class="row container">
            <h2>Edit Post</h2>

            <div class="col-8">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Type your title" name="title" value="<?php echo $post->title?>">
                </div>
            </div>

            <div class="col-8">
                <div class="mb-3">
                    <label for="desciption" class="form-label">Description</label>
                    <textarea class="form-control" id="description" placeholder="Type your description" name="description"><?php echo $post->title?></textarea>
                </div>

            </div>

            <input type="hidden" name="pid" value="<?php echo $post->id?>">

            <div class="col-6">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </div>
    </form>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>

<!-- 
localhost/phpmyadmin - XAMPP
localhost:8888/phpmyadmin - MAMP -->