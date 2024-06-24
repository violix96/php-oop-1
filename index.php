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
