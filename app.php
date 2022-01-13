<?php
require "vendor/autoload.php";
include_once "classes/Blog.php";
/*

const URL = 'https://blog-e7af7-default-rtdb.europe-west1.firebasedatabase.app/'; // Nuestra URL
const TOKEN = 'nVVzi0IrS2XJ2btz4eKGgQjo3XQX3Ir6i9jta5k2'; // Nuestra clave de firebase
const PATH = '/blog'; // Ruta base

use Firebase\FirebaseLib; // Esto se encuentra en el directorio src

$firebase = new FirebaseLib(URL, TOKEN);


$p1 = [
   "title" => "Milk and their beneficts",
   "content" => "The supermarket chain Morrisons will remove “use-by” dates from milk packaging by the end of January in an attempt to save millions of pints from being wasted.
   The British supermarket is suggesting that customers should use a simple sniff test to work out whether or not the cow’s milk is off or still usable.
   Bottles sold by Morrisons will still carry “best before” dates, which give customers an indication of when the milk will taste at its best, but the milk can can often still be used safely for several days after that point.
   Every year in the UK about 330,000 tonnes of milk are wasted which totals around 7 per cent of total UK milk production, according to 2018 figures from food waste charity Wrap.
   The majority of wasted milk  490m pints is thrown away in the home and it is the third most wasted food in the UK, coming in behind potatoes and bread." 
];

$p2 = [
    "title" => "Why is sun so dangerous",
    "content" => "As it circles closer to the solar surface, Parker is making new discoveries that other spacecraft were 
    too far away to see, including from within the solar wind – the flow of particles from the Sun that can influence 
    us at Earth. In 2019, Parker discovered that magnetic zig-zag structures in the solar wind, called switchbacks, 
    are plentiful close to the Sun. But how and where they form remained a mystery. Halving the distance to the Sun 
    since then, Parker Solar Probe has now passed close enough to identify one place where they originate: the solar surface.
    The first passage through the corona – and the promise of more flybys to come – will continue to provide data on phenomena 
    that are impossible to study from afar."
];

$p3 = [
    "title" => "DR WHO WANTS SOME?",
    "content" => "Ladbrokes now have Danny among the top ten stars who could take over from Jodie Whittaker, 39, who leaves 
    later this year. They have cut his odds of entering the Tardis from 66/1 to 16/1. Other bookies are also placing Danny 
    on their shortlists. Danny, 44, moved ahead of the likes of film actor Ben Whishaw, Luther star Idris Elba and Fleabag’s 
    Phoebe Waller-Bridge.A spokeswoman for Ladbrokes said: “Danny may be not be the archetypal actor to portray the Doctor, 
    but that’s just why he might be the perfect choice to make a big change on the show."
];

$BLOG = new Blog(1,"My blog", "Daniel");

/*$firebase->set(PATH . "/posts/post1",$p1);
$firebase->set(PATH . "/posts/post2",$p2);
$firebase->set(PATH . "/posts/post3",$p3);*/

$BLOG = new Blog(1,"My blog", "Daniel");

if(isset($_POST["post-btn"]) && !empty($_POST["post-btn"])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $tags = explode(",",$_POST['tags']);
    
    $BLOG->showBlog();
    $BLOG->sharePost($title,$content,$tags);

}else{
    $BLOG->showBlog();
    echo "ooo";



}




















?>