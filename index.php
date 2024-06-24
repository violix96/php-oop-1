<?php

class Movie
{
    private $title;
    private $category;
    private $rating;


    public function __construct($title, $category, $rating)
    {
        $this->title = $title;
        $this->category = $category;
        $this->rating = $rating;
    }
}
