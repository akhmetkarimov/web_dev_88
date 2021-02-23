<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <?php include "components/head-libs.php" ?>
</head>

<body onload="getMyPosts(myPage)">
    <div class="container">
        <?php include "components/navs.php" ?>
    </div>
    <?php
    $id = $_SESSION['account'];
    $user = $db->query("SELECT * FROM accounts WHERE id = $id;");
    $userRes = $user->fetch_object();
    ?>
    <main role="main" class="container mt-5 mb-5">
        <div class="row">

            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="images/profile/profile.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Full Name: <?= $userRes->first ?> <?= $userRes->last ?></h5>
                        <p class="card-text">Email: <?= $userRes->email ?></p>
                        <a href="#" class="btn btn-primary">Change Information</a>
                        <a href="#" class="btn btn-info">Change Password</a>
                    </div>
                </div>
            </div>


            <div class="col-md-8">
                <button class="btn btn-primary" data-toggle="modal" data-target="#add-post">Add New Post</button>


                <div class="row mt-4" id="my-posts">

                </div>

                <ul class="pagination pagination-lg justify-content-center" id="my-pages">
                </ul>
            </div>
        </div>

    </main>


    <?php include "components/footer.php" ?>

</body>

</html>