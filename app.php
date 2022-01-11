<?php

require "vendor/autoload.php";
include_once "classes/Blog.php";

const URL = 'https://blog-e7af7-default-rtdb.europe-west1.firebasedatabase.app/'; // Nuestra URL
const TOKEN = 'nVVzi0IrS2XJ2btz4eKGgQjo3XQX3Ir6i9jta5k2'; // Nuestra clave de firebase
const PATH = '/blog'; // Ruta base

use Firebase\FirebaseLib; // Esto se encuentra en el directorio src

$firebase = new FirebaseLib(URL, TOKEN);

// Storing an array
$user = [
    "name" => "Pedro",
    "surname" => "Lorenzo",
    "age" => 25
];


//$firebase->set(PATH . "/users/{$user['name']}", $user);

$app = $firebase->get(PATH . '/app/');


$BLOG = new Blog(1,"My blog", "Daniel");


$BLOG->createPost("titulo", "contenido", []);

var_dump($BLOG->getPosts());

$firebase->set(PATH . '/app/blog1', "");


















?>