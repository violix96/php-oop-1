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
    public function setCategory(string $category): void
    {
        $this->category = $category;
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


// creazione delle istanze di movie. 

$inception = new Movie('Inception', 'Sci-Fi', 8.8);
$LaLeggendaDiAlJohneJack = new Movie('La leggenda di Al, John e Jack ', 'Commedy', 7.1);
$FightClub = new Movie('Fight Club ', 'Drama', 8.4);
$ToroScatenato = new Movie('Toro scatenato ', 'Drama', 10);
$QueiBraviRagazzi = new Movie('Quei bravi ragazzi', 'Drama', 9.9);

// stampa delle informazioni per ogni film 

echo 'Film: ' . $inception->getTitle() . "<br>";
echo "Categoria: " . $inception->getCategory() . "<br>";
echo "Punteggio: " . $inception->getRating() . "<br><br>";

echo 'Film: ' . $LaLeggendaDiAlJohneJack->getTitle() . "<br>";
echo "Categoria: " . $LaLeggendaDiAlJohneJack->getCategory() . "<br>";
echo "Punteggio: " . $LaLeggendaDiAlJohneJack->getRating() . "<br><br>";

echo 'Film: ' . $FightClub->getTitle() . "<br>";
echo "Categoria: " . $FightClub->getCategory() . "<br>";
echo "Punteggio: " . $FightClub->getRating() . "<br><br>";

echo 'Film: ' . $ToroScatenato->getTitle() . "<br>";
echo "Categoria: " . $ToroScatenato->getCategory() . "<br>";
echo "Punteggio: " . $ToroScatenato->getRating() . "<br><br>";

echo 'Film: ' . $QueiBraviRagazzi->getTitle() . "<br>";
echo "Categoria: " . $QueiBraviRagazzi->getCategory() . "<br>";
echo "Punteggio: " . $QueiBraviRagazzi->getRating() . "<br><br>";
