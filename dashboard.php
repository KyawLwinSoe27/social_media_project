<?php
require_once "./core/auth.php";
require_once "./core/base.php";
require_once "./core/functions.php";

require_once "./templates/header.php"; 

?>

<div class="col-12 content min-vh-100">
    <div class="col-3 d-none d-md-block left"></div>
    <div class="col-12 col-md-6 center m-auto posts">
        <div class="col-12">
            <div class="card mt-3 post-card">
                <div class="card-body d-flex align-items-center">
                    <div class="col-2">
                        <img src="<?php echo $url ?>assests//img/default.png" alt="" width="50" height="50">
                    </div>
                    <?php
                    if (isset($_POST['post'])) {
                        echo post();
                    }
                    ?>
                    <form class="col-10 d-block d-md-flex justify-content-between post-form" method="post">
                        <input type="text" class="form-control post-title" placeholder="What's on your mind?" name="post_content">
                        <button class="btn btn-outline-primary ml-2" name="post">Post</button>
                    </form>
                </div>
            </div>
        </div>
        <?php foreach (postLists() as $l) {; ?>
            <div class="col-12">
                <div class="card mt-2 post-card">
                    <div class="card-body">
                        <div class="post-info d-flex justify-content-between">
                            <div class="img_name d-flex align-items-center">
                                <img src="<?php echo $url ?>assests/img/<?php print_r($_SESSION['user']['photo']); ?>" alt="" width="30" height="30">
                                <h6 class="name"><?php echo user($l['user_id'])['full_name']; ?></h6>
                            </div>

                            <div class="info">
                                <a href="" class="btn"><i class="feather-more-vertical"></i></a>
                            </div>
                        </div>
                        <div class="post-content mt-2">
                            <p><?php echo $l['post_content']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php }; ?>
    </div>
    <div class="col-3 right d-none d-md-block"></div>
</div>

<?php require_once "./templates/footer.php"; ?>