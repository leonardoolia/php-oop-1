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


// ?Dichiarazione classe Actor
class Actor
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function toString()
    {
        return $actor = implode(',', $this->name);
    }
}


// Oggetti che vengono istanziati
$actors1 = new Actor(['Sam Worthington', 'Zoe Saldana', 'Sigourney Weaver']);
$actors2 = new Actor(['Matthew McConaughey','Anne Hathaway', 'Jessica Chastain']);

$director1 = new Director('James Cameron', 60);
$director2 = new Director('Christopher Nolan', 50);

$movie1 = new Movie('Avatar', $director1, $actors1, 2009, 'Umani vanno su Pandora');
$movie2 = new Movie('Interstellar', $director2, $actors2, 2014, 'Un gruppo di astronauti cercano nuovi pianeti abitabili');


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