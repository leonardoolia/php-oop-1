<?php
require_once __DIR__ . '/../models/Actor.php';
require_once __DIR__ . '/../models/Director.php';
require_once __DIR__ . '/../models/Movie.php';

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