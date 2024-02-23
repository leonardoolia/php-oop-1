<?php
require_once __DIR__ . '/./Director.php';
require_once __DIR__ . '/./Actor.php';
require_once __DIR__ . '/../data/db.php';

// ?Dichiarazione classe Movie
class Movie 
{
    public $title;
    public $director;
    public $actor;
    public $year;
    public $plot;

// Aggiunto costruttore
    public function __construct($title, Director $director, Actor $actor, $year, $plot)
    {
        $this->title = $title   ;
        $this->director = $director;
        $this->actor = $actor;
        $this->year = $year;
        $this->plot = $plot;
    }

// Funzione per avere le informazioni sul film
    public function getMovieInfo()
    {
        return "Titolo:{$this->title} Regista: {$this->director->toString()} Attori principali: {$this->actor->toString()} Uscita: {$this->year} Trama: {$this->plot}";
    }

}