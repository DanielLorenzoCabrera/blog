<?php
	require "vendor/autoload.php";
	include_once "./Post.php";


	use Firebase\FirebaseLib; // Esto se encuentra en el directorio src

class Blog {

    private $id;
	private $title;
	private $author;
    private $posts;
<<<<<<< HEAD
	private $url = 'https://blog-e7af7-default-rtdb.europe-west1.firebasedatabase.app/';
	private $token= 'nVVzi0IrS2XJ2btz4eKGgQjo3XQX3Ir6i9jta5k2'; // Nuestra clave de firebase
	private $path = '/blog'; // Ruta base
=======
	private $URL ;// = 'https://blog-e7af7-default-rtdb.europe-west1.firebasedatabase.app/';
	private $TOKEN ;//= 'nVVzi0IrS2XJ2btz4eKGgQjo3XQX3Ir6i9jta5k2'; // Nuestra clave de firebase
	private $PATH  ;//= '/blog'; // Ruta base
	private $firebase ;
>>>>>>> 56370bff4e630c6e0e5756ccbe3eba1f13f66479


	public function __construct($id = null, $title, $author){
		$this->id = $id;
		$this->title = $title;
		$this->author = $author;
	}

/*
	public function __construct($id = null, $title, $author){
		$this->URL = 'https://blog-e7af7-default-rtdb.europe-west1.firebasedatabase.app/';
		$this->TOKEN = 'nVVzi0IrS2XJ2btz4eKGgQjo3XQX3Ir6i9jta5k2';
		$this->PATH = '/blog';
		$this->firebase = new FirebaseLib($this->URL, $this->TOKEN);
		$this->id = $id;
		$this->title = $title;
		$this->author = $author;
<<<<<<< HEAD
=======
		$this->posts = [] ;
>>>>>>> 56370bff4e630c6e0e5756ccbe3eba1f13f66479
		
	}
*/
	public function createPost(string $title ,string $content, array $tags){
		$postsQuantity = 1 + count($this->posts); // the post id is the lenght of the number of posts
		$post = new Post( $postsQuantity , $title, $content, $tags);
		$this->posts[$postsQuantity] = $post->toArray();


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

<<<<<<< HEAD

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
		//$firebase = new FirebaseLib($this->url, $this->token);
		///$posts = $firebase->get($this->path . "/posts/");
		//return $posts;
		$firebase = new FirebaseLib('https://blog-e7af7-default-rtdb.europe-west1.firebasedatabase.app/','nVVzi0IrS2XJ2btz4eKGgQjo3XQX3Ir6i9jta5k2');
		$posts =  $firebase->get("/blog/posts/");
		return json_decode($posts,true);
=======
	public function obtainPosts(){
		$this->posts = $this->firebase->get(PATH . '/posts');
>>>>>>> 56370bff4e630c6e0e5756ccbe3eba1f13f66479
	}




}






?>