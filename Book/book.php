<?php

class Book {

//properties
    var $title = 'sherlocks Homles';
    private $author = 'Sir Arhtur Conan Doyle';

    public function __construct($title, $author) 
    {
        $this->title = $title;
        $this->author = $author;
    }

//  method = function
//  getters

public function getAuthor() {
    return $this->author;
}
function getTitle(){
    return $this->title;
}
}