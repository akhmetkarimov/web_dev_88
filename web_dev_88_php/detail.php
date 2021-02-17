<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Page</title>
    <?php include "components/head-libs.php" ?>
</head>

<body>
    <div class="container">
        <?php include "components/navs.php" ?>
    </div>

    <main role="main" class="container mt-5">
        <div class="row">
            <div class="col-md-8 blog-main">
                <?php
                $pid = $_GET['post-id'];
                $postQuery = $db->query("SELECT * FROM posts WHERE id=$pid");
                $post = $postQuery->fetch_object();
                ?>
                <div class="blog-post">
                    <h2 class="blog-post-title"><?=$post->title?></h2>
                    <p class="blog-post-meta"><?=$post->time?> <a href="#">Design</a></p>

                    <p><?=$post->description?></p>
                </div>

            </div>



        </div>

    </main>


    <?php include "components/body-libs.php" ?>

</body>

</html>