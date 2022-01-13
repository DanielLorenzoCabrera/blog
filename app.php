<?php

require "vendor/autoload.php";
include_once "classes/Blog.php";

const URL = 'https://blog-e7af7-default-rtdb.europe-west1.firebasedatabase.app/'; // Nuestra URL
const TOKEN = 'nVVzi0IrS2XJ2btz4eKGgQjo3XQX3Ir6i9jta5k2'; // Nuestra clave de firebase
const PATH = '/blog'; // Ruta base

use Firebase\FirebaseLib; // Esto se encuentra en el directorio src

$firebase = new FirebaseLib(URL, TOKEN);

<<<<<<< HEAD
=======
// Storing an array
$user = [
    "name" => "Pedro",
    "surname" => "Lorenzo",
    "age" => 25
];


//$firebase->set(PATH . "/posts", $user);
>>>>>>> 56370bff4e630c6e0e5756ccbe3eba1f13f66479


$p1 = [
   "title" => "puta mierda",
   "content" => "foijeruifhuhruirhuiuhivhrviu" 
];

<<<<<<< HEAD
$p2 = [
    "title" => "asco de vida",
    "content" => "foijeruiferuhfifheifhuhruirhuiuhivhrviu" 
 ];
=======
$BLOG = new Blog(1,"My blog", "Daniel");
$BLOG->obtainPosts();
var_dump($BLOG->getPosts());
>>>>>>> 56370bff4e630c6e0e5756ccbe3eba1f13f66479

$firebase->set(PATH . "/posts/post1",$p1);
$firebase->set(PATH . "/posts/post2",$p2);


$BLOG = new Blog(1,"My blog", "Daniel");
$BLOG->showBlog();



















?>