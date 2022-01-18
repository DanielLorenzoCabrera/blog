<?php

	require "vendor/autoload.php";
	require_once "Post.php";

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
		$postsQuantity = count($this->obtainPosts()); // the post id is the lenght of the number of posts
		$post = new Post( $postsQuantity , $title, $content, $tags);
		$this->posts[$postsQuantity] = $post;
		
		$firebase = new FirebaseLib($this->url, $this->token);
		$firebase->set($this->path . "/posts/{$postsQuantity}",
		[
			"id"=> $postsQuantity,
			"title" => $title,
			"content" => $content,
			"tags" => $tags,
			"date-posted" => $post->getDatePosted()
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
		echo "<header><h1>{$this->title}</h1></header>";
	}


	private function buildFeed(){
		echo "<main>";
		$posts = array_reverse($this->obtainPosts(),true);		
		foreach($posts as $key => $post){
			echo "<article class='post'>";
			echo "<p class='title'>${post['title']}</p>";
			echo "<p class='content'>${post['content']}</p>";
			echo "<section class='info'>";
			echo "<section class='tags'>";
			foreach($post['tags'] as $tag){
				if(!empty($tag)){
					echo "<p>#{$tag}</p>";
				}
			}
			echo "</section>";
			echo "<p class='date'>${post['date-posted']}</p>";
			echo "</section>";
			echo "</article>";
		}
		echo "</main>";
	}


	private function obtainPosts(){
		$firebase = new FirebaseLib($this->url,$this->token);
		$posts =  $firebase->get("/blog/posts/");
		$arrayPosts = json_decode($posts,true);
		$this->posts = $arrayPosts;
		return $arrayPosts;
	}




}






?>