<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>

    <form action="save.php" method="POST">
        <div class="row container">
            <h2>Save Post</h2>

            <div class="col-8">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Type your title" name="title">
                </div>
            </div>

            <div class="col-8">
                <div class="mb-3">
                    <label for="desciption" class="form-label">Description</label>
                    <textarea class="form-control" id="description" placeholder="Type your description" name="description"></textarea>
                </div>

            </div>

            <div class="col-6">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>


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

        $postQuery = $db->query("SELECT * FROM posts");

        while ($row = $postQuery->fetch_object()) {
            echo "
            <div class='col-sm-4 mb-4'>
                <div class='card'>
                    <div class='card-body'>
                        <h5 class='card-title'>$row->title</h5>
                        <p class='card-text'>$row->description</p>
                        <a href='detail.php?post-id=$row->id' class='btn btn-primary'>Go somewhere</a>
                        <a href='edit.php?post-id=$row->id' class='btn btn-info'>Edit</a>
                        <a href='delete.php?pid=$row->id' class='btn btn-danger'>Delete</a>
                    </div>
                </div>
            </div>
            ";

        }
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