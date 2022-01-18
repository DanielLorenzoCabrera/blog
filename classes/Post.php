<?php

    require_once "Comment.php";

    class Post {
        private $id;
        private $title;
        private $content;
        private $tags;
        private $datePosted;
        private $comments;

        public function __construct( $id,  $title , $content, $tags){
            $this->id = $id;
            $this->title = $title;
            $this->content = $content;
            $this->tags = $tags;
            $this->datePosted = date("d/m/y - H:i");
            $this->comments = [];
        }

        public function getDatePosted(){
            return $this->datePosted;
        }

        public function addComment($user, $content){
            $id = count($this->comments) + 1;
            $comment = new Comment($id, $user, $content);
            $this->comments[$id] = $comment;
        }
    }

?>