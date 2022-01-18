<?php

    abstract class User{

        protected $id;
        protected $name;
        protected $user_name;
        protected $email ;
        protected $password;
        
        public function __construct($id, $name, $user_name,$email, $password){
            $this->$id = $id;
            $this->name = $name;
            $this->user_name = $user_name;
            $this->email = $email;
            $this->password = $password;
        }
    }

?>