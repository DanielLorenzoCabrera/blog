<?php


    class Comment{

        private $id;
        private $user;
        private $content;
        private $date;

        public function __construct($id,$user, $content){
            $this->id = $id;
            $this->user = $user;
            $this->content = $content;
            $this->date = date("d/m/y - H:i");
        }

    }

?>