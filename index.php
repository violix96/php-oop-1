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


    // metodi getter per ottenere le informazioni del film
    public function getTitle()
    {
        return $this->title;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getRating()
    {
        return $this->rating;
    }
}
