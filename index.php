<?php

// Dichiarazione classe Movie
class Movie {
public $title;
public $director;
public $actor;
public $year;
public $plot;

// Aggiunto costruttore
public function __construct($title, $director, $actor, $year, $plot)
{
    $this->title = $title;
    $this->director = $director;
    $this->actor = $actor;
    $this->year = $year;
    $this->plot = $plot;
}


}


$movie1 = new Movie('Avatar', 'James Cameron', 'Zoe Saldana', 2009, 'Umani vanno su Pandora');


var_dump($movie1);



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