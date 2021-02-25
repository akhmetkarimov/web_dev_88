<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Page</title>
    <?php include "components/head-libs.php" ?>
    <?php
    $pid = $_GET['post-id'];
    $postQuery = $db->query("SELECT `posts`.id, `posts`.`title`, `posts`.`description`, `posts`.`time`,`posts`.`views`, 
    `posts`.`category_id`, `category`.`name`, AVG(`reviews`.`mark`) as rating, `accounts`.username, `posts`.poster
    FROM `posts` INNER JOIN `category` ON `posts`.`category_id` = `category`.id 
    INNER JOIN `accounts` ON `posts`.`author_id` = `accounts`.id 
    LEFT OUTER JOIN `reviews` ON `reviews`.`post_id` = `posts`.id 
    WHERE `posts`.id=$pid
    GROUP BY `posts`.id ");
    $post = $postQuery->fetch_object();

    if ($_SESSION['account']) {
        $uid = $_SESSION['account'];
        if ($uid != $post->author_id) {
            $db->query("UPDATE `posts` SET views = views + 1 WHERE id = $pid; ");
        }
    } else {
        $db->query("UPDATE `posts` SET views = views + 1 WHERE id = $pid; ");
    }

    $post->poster = isset($post->poster) ? $post->poster : 'images/posts/post.png';

    ?>
</head>

<body onload="getReviews(<?= $pid ?>, 1)">
    <div class="container">
        <?php include "components/navs.php" ?>
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark mb-5" style="
        background-image: url(<?= $post->poster ?>); 
        height: 400px; 
        background-size: cover;
        background-position: center;
        
        ">
        </div>
    </div>

    <main role="main" class="container mt-5">


        <div class="row">
            <div class="col-md-12 blog-main">

                <div class="blog-post">
                    <h2 class="blog-post-title"><?= $post->title ?></h2>
                    <p class="blog-post-meta"><?= $post->time ?>
                        <a href="#" class="btn btn-primary"><?= $post->name ?></a>
                        By <a href="#" style="font-style: italic;"><?= $post->username ?></a>
                    </p>
                    <p><?= $post->description ?></p>
                </div>

            </div>
            <div class="col-md-8 blog-main">
                <?php
                if (isset($_SESSION['account'])) {
                    include "components/review.php";
                }
                ?>
            </div>

            <div class="col-md-8 blog-main mt-5">
                <div id="all-reviews"></div>
                <ul class="pagination pagination-lg" id="all-pages-reviews">
                </ul>
            </div>

        </div>

    </main>


    <?php include "components/footer.php" ?>

</body>

</html>