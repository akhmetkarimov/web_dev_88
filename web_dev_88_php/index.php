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


    <div class="container mt-5">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Field
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="?field=time&sort=ASC">Date (0-9)</a>
                <a class="dropdown-item" href="?field=time&sort=DESC">Date (9-0)</a>
                <a class="dropdown-item" href="?field=title&sort=ASC">Title (A-Z)</a>
                <a class="dropdown-item" href="?field=title&sort=DESC">Title (Z-A)</a>
                <a class="dropdown-item" href="?field=views&sort=ASC">Views (0-9)</a>
                <a class="dropdown-item" href="?field=views&sort=DESC">Views (9-0)</a>
            </div>
        </div>
    </div>

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

        $page = 0;
        $limit = 10;
        $skip = 0;

        $field = 'id';
        $order = 'DESC';

        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $skip = ($page - 1) * $limit;

            // (1 - 1) * 5 = 0
            // 2 - 1 * 5  = 5
            // 3 - 1 * 5= 10

            // 2 * 5 = 10
            // 3 * 5 = 15
        }

        if (isset($_GET['field'])) {
            $field = $_GET['field'];
            $order = $_GET['sort'];
        }



        $postQuery = $db->query("SELECT * FROM posts ORDER BY $field $order LIMIT $skip, $limit;");

        while ($row = $postQuery->fetch_object()) {
            echo "
            <div class='col-sm-4 mb-4'>
                <div class='card'>
                    <div class='card-body'>
                        <h5 class='card-title'>$row->title</h5>
                        <p class='card-text'>$row->description</p>
                        <p class='card-text'>$row->views</p>
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

    <ul class="pagination pagination-lg justify-content-center">
        <?php

        $pageQuery = $db->query("SELECT COUNT(*) as total FROM `posts`");
        $count = $pageQuery->fetch_object()->total;

        $pages = ceil($count / $limit);

        for ($i = 1; $i <= $pages; $i++) {
            echo "<li class='page-item'><a class='page-link' href='?page=$i'>$i</a></li>";
        }
        ?>
    </ul>

        <hr>
    <h1>Ajax</h1>
    <div class="row container mt-5" id="all-posts">
    </div>
    <ul class="pagination pagination-lg justify-content-center" id="all-pages">
    </ul>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="posts.js"></script>

</body>


</html>
<!-- 
localhost/phpmyadmin - XAMPP
localhost:8888/phpmyadmin - MAMP -->