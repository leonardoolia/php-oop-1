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
        return "Titolo:{$this->title} Regista: {$this->toString()} Attore principale: {$this->actor} Uscita: {$this->year} Trama: {$this->plot}";
    }

}

// ?Dichiarazione classe Director
class Director
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function toString()
    {
        return "nome: {$this->name} età: {$this->age}";
    }
}

// Oggetti che vengono istanziati
$director1 = new Director('James Cameron', 60);
$director2 = new Director('Christopher Nolan', 50);

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