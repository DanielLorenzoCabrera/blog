<?php

	include_once "Post.php";

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

	public function createPost(string $title ,string $content, array $tags){
		$post = new Post($title, $content, $tags);
		array_push($this->posts, $post->postToArray());


	}


	public function getPosts(){
		return $this->posts;
	}




}






?>