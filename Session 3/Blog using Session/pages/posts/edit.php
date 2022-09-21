<?php
require_once "../../shared/header.php";

if(!isset($_SESSION["user"]))
    header("location: /blogsol/pages/auth/login.php");

$id = $_GET["id"] - 1;
$post = $_SESSION["posts"][$id] ?? null;
if($post == null){
    header("HTTP/1.1 404 Not Found", true, 404);
    header("location: /blogsol/404.php");
}

$user_id = $post["user_id"] - 1;
$user = array_values($_SESSION["users"])[$user_id]; 
?>
<div class="row">
    <h1>Create post</h1> 
    <div class="col-md-8 col-md-offset-2">
        <br>
        <form action="/blogsol/control/post.php" method="POST" id="postForm">
            <div class="form-group">
                <label for="title">Title <span class="require">*</span></label>
                <input type="text" id="title" value="<?= $post["title"] ?>" class="form-control" required name="title" />
            </div>
            
            <div class="form-group">
                <label for="image">Image link</label>
                <input type="text" class="form-control" name="image" value="<?= $post["img"] ?>" />
            </div>
            

            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="userText" rows="5" class="form-control" required name="body" ><?= $post["body"] ?></textarea>
            </div>

            <input type="hidden" name="post_id" value="<?= $post["id"] ?>">
            
            <div class="form-group">
                <input type="submit" name='post-update-form' id="post-btn" class="btn btn-primary" value='Update'>
                <!-- </button> -->
                <a href="/dashboard" class="btn btn-default">Cancel</a>
            </div>
        </form>
    </div>
    
</div>
<?php
include "../../shared/footer.php";
?>