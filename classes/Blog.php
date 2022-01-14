<?php
	require "vendor/autoload.php";
	include_once "Post.php";

	use Firebase\FirebaseLib; // Esto se encuentra en el directorio src

class Blog {

    private $id;
	private $title;
	private $author;
    private $posts;
	private $url = 'https://blog-e7af7-default-rtdb.europe-west1.firebasedatabase.app/';
	private $token= 'nVVzi0IrS2XJ2btz4eKGgQjo3XQX3Ir6i9jta5k2'; // Nuestra clave de firebase
	private $path = '/blog'; // Ruta base


	public function __construct($id = null, $title, $author){
		$this->id = $id;
		$this->title = $title;
		$this->author = $author;
		$this->posts = [];
	}

	public function sharePost(string $title ,string $content, array $tags){
		$postsQuantity = 1 + count($this->posts); // the post id is the lenght of the number of posts
		$post = new Post( $postsQuantity , $title, $content, $tags);
		$this->posts[$postsQuantity] = $post;
		
		$firebase = new FirebaseLib($this->url, $this->token);
		$firebase->set($this->path . "/posts/{$postsQuantity}",
		[
			"id"=> $postsQuantity,
			"title" => $title,
			"content" => $content,
			"tags" => $tags 
		]
		);
	}


	public function getPosts(){
		return $this->posts;
	}

	public function showBlog(){
		$this->buildHeader();
		$this->buildFeed();
	}

	private function buildHeader(){
		echo "<header>";
		echo "<h1>{$this->title}</h1>";
		echo "</header>";

	}


	private function buildFeed(){
		echo "<main>";
		$posts = $this->obtainPosts();		
		foreach($posts as $key => $post){
			echo "<div class='post'>";
			echo "<p class='title'>${post['title']}</p>";
			echo "<p class='content'>${post['content']}</p>";
			echo "</div>";
		}
		echo "</main>";
	}


	private function obtainPosts(){
		$firebase = new FirebaseLib($this->url,$this->token);
		$posts =  $firebase->get("/blog/posts/");
		return json_decode($posts,true);
	}




}






?>