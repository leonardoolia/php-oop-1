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
        return "{$this->name} ({$this->age} anni)";
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
// echo $movie1->getMovieInfo();
// echo $movie2->getMovieInfo();

// Array contenente gli oggetti Movie
$movies = [$movie1, $movie2];

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Movie</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <main class="container">
        <div class="container">
            <h1>Lista film</h1>
            <ul>
                <?php foreach($movies as $movie): ?>
                <li>
                    <h2><?= $movie->title ?> (<?= $movie->year?>)</h2>
                    <h4>Direttore: <?= $movie->director->toString()?></h4>
                    <p>Cast: <?= $movie->actor->toString() ?></p>
                    <p>Trama: <?= $movie->plot ?></p>
                </li>
                <?php endforeach ;?>
            </ul>
        </div>
    </main>
</body>
</html>