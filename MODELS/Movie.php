<?php
// movie.php

require_once __DIR__ . '/Actor.php';

class Movie
{
    // proprietà della classe Movie
    private string $title;
    private array $category;
    private int $rating;
    private array $actors;

    // proprietà statica della classe Movie
    private static int $totalMovies = 0;  // Contatore statico per il numero totale di film creati

    // costruttore della classe Movie
    public function __construct(string $title, string $category, int $rating)
    {
        $this->title = $title;
        $this->category = [$category];
        $this->rating = $rating;
        $this->actors = [];  // inizializzazione dell'array degli attori per il film
        self::$totalMovies++; // incrementa il contatore statico per tracciare il numero totale di istanze della classe Movie create

    }

    // metodo getter per ottenere il titolo del film
    public function getTitle(): string
    {
        return $this->title;
    }

    // metodo setter per impostare il titolo del film
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    // metodo getter per ottenere la categoria del film
    public function getCategory(): array
    {
        return $this->category;
    }

    // metodo setter per aggiungere nuove categorie al film
    public function setCategory(string ...$category): void
    {
        $this->category = [...$this->category, ...$category];
    }

    // metodo getter per ottenere il punteggio del film
    public function getRating(): int
    {
        return $this->rating;
    }

    // metodo setter per impostare il punteggio del film
    public function setRating(int $rating): void
    {
        $this->rating = $rating;
    }

    // metodo per aggiungere un attore al film
    public function addActor(Actor $actor): void
    {
        $this->actors[] = $actor;
    }

    // metodo getter per ottenere tutti gli attori del film
    public function getActors(): array
    {
        return $this->actors;
    }

    // metodo statico per ottenere il numero totale di film creati
    public static function getTotalMovies(): int
    {
        return self::$totalMovies;
    }
}
