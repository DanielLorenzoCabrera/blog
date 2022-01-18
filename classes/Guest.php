<?php

    require_once "User.php";

    class Guest extends User {

        public function __construct($id, $name, $user_name,$email, $password){
            parent::__construct($id, $name, $user_name,$email, $password);
        }
    }

?>