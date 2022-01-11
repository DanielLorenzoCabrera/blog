<?php

declare(strict_types = 1); // Desactiva casting automático y fuerza a que las variables sean del tipo asignado

class Post {

    private $title;
    private $content;
    private $tags;
	private $datePosted;
    //private $comments;

    public function __construct(string $title ,string $content, array $tags){
        $this->title = $title;
        $this->content = $content;
        $this->tags = $tags;
        $this->datePosted = date("d/m/y H:i");
        $this->comments = [];
    }

    public function postToArray(){
        return [
            "title" => $this->title,
            "content" => $this->content,
            "tags" => $this->tags,
            "posted" => $this->datePosted
        ];
    }




}





?>