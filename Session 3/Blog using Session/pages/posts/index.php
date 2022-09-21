<?php

function getPostsByUid($uid) {
    $posts = [];
    foreach($_SESSION["posts"] as $post) {
        if($post["user_id"] == $uid)
            array_push($posts, $post);
    }
    return $posts;
}
if(isset($_GET["posts_by_uid"]) && ctype_digit($_GET["posts_by_uid"])) {
    $user_id = $_GET["posts_by_uid"];
    $posts = getPostsByUid($user_id);

}
else
    $posts = $_SESSION["posts"];

?>
<div class="row justify-content-center">

    <?php foreach($posts as $post) { 
        $user_id = $post["user_id"] - 1;
        $user = array_values($_SESSION["users"])[$user_id];    
    ?>
        <div class="col-md-6 col-lg-4">
            <div class="card-content">
                <div class="card-img">
                    <img src="<?= $post["img"] ?>" alt="">
                    <span class="username">
                        <h4> <a href="#" class="username_url">@<?= $user["username"] ?></a></h4>
                    </span>
                </div>
                <div class="card-desc text-center">
                    <h3><?= $post["title"] ?></h3>
                    <p><?= substr($post["body"],0, 35) ?>...</p>
                    <a href="/blogsol/pages/posts/show.php?id=<?= $post['id'] ?>" class="btn-card">Read</a>
                </div>
            </div>
        </div>

    <?php } ?>

    <?php
        if(count($posts) == 0) {
            echo "<h2 class='text-center'>There are no posts</h2>";
        }
    ?>

    

    
    <!-- END LOOP -->
    <!-- CHECK IF THERE IS NO POSTS -->
        <!-- Display a message 'There are no posts available' -->
    <!-- END IF -->
</div>

