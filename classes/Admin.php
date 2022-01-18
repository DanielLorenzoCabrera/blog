<?php

    require_once "User.php";
    require_once "Blog.php";
    require_once "Guest.php";
    require_once "Blog.php";

    class Admin extends User {

        private $blogs;
        
        public function __construct($id, $name, $user_name,$email, $password){
            parent::__construct($id, $name, $user_name,$email, $password);
            $this->blogs = [];
        }

        public function createBlog($id, $title, $author){
            $blog = new Blog($id, $title, $author);
            $this->blogs[$id] = $blog;
        }

        public function deleteBlog($id){
            unset($this->posts[$id]);
        }

    }


?>