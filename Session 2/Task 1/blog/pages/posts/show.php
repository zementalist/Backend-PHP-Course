<?php
require_once "../../shared/header.php";
?>
<section class="mt-4">

    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">
            <h3 class="my-2">Post Title</h3>
            <small id="article-meta">By
                <strong>
                    <a href="/user/{{post.user_id}}">
                        @Ahmed Waleed
                    </a>
                </strong>
                , on 2022/09/02
            </small>

            <!--Featured Image-->
            <div class="card my-4 mb-4">

                <img src="/blog/assets/img/1.jpg">

            </div>
            <!--/.Featured Image-->

            <!-- If user is logged-in and he is the author of the post -->
            <!-- CR(UD) Form -->
            <div class="card my-4 mb-4">
                <div class="row">
                    <div class="col-md-6">
                        <a href="/blog/pages/posts/edit.php?id=1"><button class="btn btn-primary"
                                style="width:100%;">Edit</button></a>
                    </div>
                    <div class="col-md-6">
                        <form action="" method="post">
                            <input type="hidden" name="_method" value="delete">
                            <a href="#"><button style="width:100%;"
                                    class="btn btn-danger">Delete</button></a>
                        </form>
                    </div>
                </div>
            </div>
            <!--/ CR(UD) Form -->
            <!-- END user authenticated condition -->
            <!--Card-->
            <div class="card mb-4">

                <!--Card content-->
                <div class="card-body">This is the content of the post</div>

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