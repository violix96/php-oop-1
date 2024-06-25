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
    public function getTitle(): string
    {
        return $this->title;
    }

    // metodo setter per impostare il titolo
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    // metodo getter per ottenere la categoria
    public function getCategory(): string
    {
        return $this->category;
    }

    // metodo setter per impostare la categoria
    public function setCategory(string ...$category): void
    {
        $this->category = [...$this->category, ...$category];
    }

    // metodo getter per ottenere il punteggio
    public function getRating(): float
    {
        return $this->rating;
    }

    // metodo setter per impostare il punteggio
    public function setRating(float $rating): void
    {
        $this->rating = $rating;
    }
}
