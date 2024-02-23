<?php

// ?Dichiarazione classe Movie
class Movie 
{
    public $title;
    public $director;
    public $actor;
    public $year;
    public $plot;

// Aggiunto costruttore
    public function __construct($title, Director $director, $actor, $year, $plot)
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
        return "Titolo:{$this->title} Regista: {$this->director} Attore principale: {$this->actor} Uscita: {$this->year} Trama: {$this->plot}";
    }

}

// ?Dichiarazione classe Director
class Director
{
    public $age;
    public $filmography;

    public function __construct($age, $filmography)
    {
        $this->age = $age;
        $this->filmography = $filmography;
    }
}

// Oggetti che vengono istanziati
$director1 = new Director(60, ['Avatar', 'Titanic']);
$director2 = new Director(50, ['Inception', 'Interstellar']);

$movie1 = new Movie('Avatar', $director1, 'Sam Worthington', 2009, 'Umani vanno su Pandora');
$movie2 = new Movie('Interstellar', $director2, 'Matthew McConaughey', 2014, 'Un gruppo di astronauti cercano nuovi pianeti abitabili');


// Stampa delle informazioni in pagina
echo $movie1->getMovieInfo();
echo $movie2->getMovieInfo();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Movie</title>
</head>
<body>

</body>
</html>