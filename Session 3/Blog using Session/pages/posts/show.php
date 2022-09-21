<?php

require_once "../../shared/header.php";

$id = $_GET["id"];
$post = $_SESSION["posts"][$id-1] ?? null;
if($post == null){
    header("HTTP/1.1 404 Not Found", true, 404);
    header("location: /blogsol/404.php");
}

$user_id = $post["user_id"];
$user = array_values($_SESSION["users"])[$user_id-1];

$logged_user_id = $_SESSION["user"]["id"] ?? -1;

?>
<section class="mt-4">

    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">
            <h3 class="my-2"><?= $post["title"] ?></h3>
            <small id="article-meta">By
                <strong>
                    <a href="/user/<?=$post['user_id']?>">
                        @<?= $user["username"] ?>
                    </a>
                </strong>
                , on 2022/09/02
            </small>

            <!--Featured Image-->
            <div class="card my-4 mb-4">

                <img src="<?= $post["img"] ?>">

            </div>
            <!--/.Featured Image-->

            <!-- If user is logged-in and he is the author of the post -->
            <!-- CR(UD) Form -->
            <?php if($user_id == $logged_user_id) { ?>
                <div class="card my-4 mb-4">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="/blogsol/pages/posts/edit.php?id=<?= $post["id"] ?>"><button class="btn btn-primary"
                                    style="width:100%;">Edit</button></a>
                        </div>
                        <div class="col-md-6">
                            <form action="/blogsol/control/post.php" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="id" value="<?= $id ?>">
                                <input type="submit" style="width:100%;"
                                        class="btn btn-danger" name="post-delete-form" value="DELETE">
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!--/ CR(UD) Form -->
            <!-- END user authenticated condition -->
            <!--Card-->
            <div class="card mb-4">

                <!--Card content-->
                <div class="card-body"><?= $post["body"] ?></div>

            </div>
            <!--/.Card-->


        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">

            <!--/.Card : Dynamic content wrapper-->

            <!--Card-->
            <div class="card mb-4 wow fadeIn">

                <div class="card-header">Related articles</div>

                <!--Card content-->
                <div class="card-body">
                    <!-- If there are related posts -->
                    <ul class="list-unstyled">
                        <!-- Loop over posts -->
                        <li class="media related-post">

                            <div class="media-body">
                                <a href="/pages/posts/show?id=">
                                    <h5 class="mt-0 mb-1 font-weight-bold">Post Title</h5>
                                </a>
                                This is post body
                            </div>
                        </li>
                    </ul>
                    <h4>There are no related posts!</h4>

                </div>

            </div>
            <!--/.Card-->

        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

</section>
<!--Section: Post-->

<?php
require_once "../../shared/footer.php";
?>