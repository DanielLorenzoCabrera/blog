<?php

    include_once "classes/Blog.php";

    $BLOG = new Blog(1,"My blog", "Daniel");
    $fieldsFilled = isset($_POST["title"]) && !empty($_POST["title"]) && isset($_POST["content"]) && !empty($_POST["content"]);

    if($fieldsFilled){
        $title = $_POST['title'];
        $content = $_POST['content'];
        $tags = explode(",",$_POST['tags']);
        $BLOG->sharePost($title, $content, $tags);
        $BLOG->showBlog();

    }else{
        $BLOG->showBlog();

    }

?>