<?php

	require_once "./Post.php";


class Blog {

    private $id;
	private $title;
	private $author;
    private $posts;

	public function __construct($id = null, $title, $author){
		$this->id = $id;
		$this->title = $title;
		$this->author = $author;
		$this->posts = [];
	}



}




?>