<?php

	include_once "Post.php";


	require "vendor/autoload.php";
	include_once "classes/Blog.php";

	

	use Firebase\FirebaseLib; // Esto se encuentra en el directorio src

class Blog {

    private $id;
	private $title;
	private $author;
    private $posts;
	private $URL ;// = 'https://blog-e7af7-default-rtdb.europe-west1.firebasedatabase.app/';
	private $TOKEN ;//= 'nVVzi0IrS2XJ2btz4eKGgQjo3XQX3Ir6i9jta5k2'; // Nuestra clave de firebase
	private $PATH  ;//= '/blog'; // Ruta base
	private $firebase ;



	public function __construct($id = null, $title, $author){
		$this->URL = 'https://blog-e7af7-default-rtdb.europe-west1.firebasedatabase.app/';
		$this->TOKEN = 'nVVzi0IrS2XJ2btz4eKGgQjo3XQX3Ir6i9jta5k2';
		$this->PATH = '/blog';
		$this->firebase = new FirebaseLib($this->URL, $this->TOKEN);
		$this->id = $id;
		$this->title = $title;
		$this->author = $author;
		$this->posts = [] ;
		
	}

	public function createPost(string $title ,string $content, array $tags){
		$postsQuantity = 1 + count($this->posts); // the post id is the lenght of the number of posts
		$post = new Post( $postsQuantity , $title, $content, $tags);
		$this->posts[$postsQuantity] = $post->toArray();


	}


	public function getPosts(){
		return $this->posts;
	}

	private function showBlog(){
		
	}

	private function buildHeader(){
		echo "<header>";
		echo "<h1>{$this->title}</h1>";
		echo "</header>";

	}

	public function obtainPosts(){
		$this->posts = $this->firebase->get(PATH . '/posts');
	}




}






?>