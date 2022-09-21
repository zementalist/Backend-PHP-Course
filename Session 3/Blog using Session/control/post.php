<?php

session_start();

include_once "../helpers/validator.php";

if(isset($_POST["post-create-form"])) {
    // title, body, image
    $data_is_valid = checkForm($_POST, ["title", "body", "image"]);
    
    if($data_is_valid) {
        $title = $_POST["title"];
        $body = $_POST["body"];
        $image = $_POST["image"];
        if(checkLength($title, 100, 5)) {
            $user_id = $_SESSION["user"]["id"];
            $id = count($_SESSION["posts"]) + 1;
            $new_post = [
                "id" => $id,
                "title" => $title,
                "body" => $body,
                "img" => $image,
                "user_id" => $user_id
            ];
            array_push($_SESSION["posts"], $new_post);
            header("location: /blogsol/pages/posts/show.php?id=$id");
        }
        else {
            array_push($_SESSION["messages"], "Title length must be betwewen [5, 100] characters");
            header("location: /blogsol/pages/posts/create.php");
        }
    }
    else {
        array_push($_SESSION["messages"], "Post is invalid, please try again");
        header("location: /blogsol/pages/posts/create.php");
    }
}


if(isset($_POST["post-update-form"])) {
     // title, body, image
     $data_is_valid = checkForm($_POST, ["title", "body", "image", "post_id"]);
    
     if($data_is_valid && isset($_SESSION["user"])) {
         $title = $_POST["title"];
         $body = $_POST["body"];
         $image = $_POST["image"];
         $post_id = $_POST["post_id"];
         if(checkLength($title, 100, 5)) {
             $post = $_SESSION["posts"][$post_id-1];
             if($post["user_id"] == $_SESSION["user"]["id"]){
                $post["title"] = $title;
                $post["body"] = $body;
                $post["img"] = $image;
                $_SESSION["posts"][$post_id - 1] = $post;
                echo "CHANGED";
                header("location: /blogsol/pages/posts/show.php?id=$post_id");
             }
             else {
                header("HTTP/1.1 401 Unauthorized", true, 401);
             }
         }
         else {
             array_push($_SESSION["messages"], "Title length must be betwewen [5, 100] characters");
             header("location: /blogsol/pages/posts/edit.php?id=" . $_POST["post_id"]);
         }
     }
     else {
         array_push($_SESSION["messages"], "Post is invalid, please try again");
         header("location: /blogsol/pages/posts/edit.php?id=" . $_POST["post_id"]);
     }   
}

if(isset($_POST["post-delete-form"])) {
    $data_is_valid = checkForm($_POST, ["post-delete-form", "id", "_method"]);
    if($data_is_valid && $_POST["_method"] == "DELETE") {
        $post_id = $_POST["id"];
        $post = $_SESSION["posts"][$post_id-1] ?? null;
        if($post != null) {
            unset($_SESSION["posts"][$post_id-1]);
            $_SESSION["posts"] = array_values($_SESSION["posts"]);
            array_push($_SESSION["messages"], "Post is DELETED");
            header("location: /blogsol/");
        }
        else {
            array_push($_SESSION["messages"], "Post is not Found");
            header("location: /blogsol/");
        }
    }
}

?>