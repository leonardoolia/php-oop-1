<?php

// Dichiarazione classe Movie
class Movie {
public $title;
public $director;
public $actor;
public $plot;

}


$movie1 = new Movie();
$movie1->title = 'Avatar';
$movie1->director = 'James Cameron';
$movie1->actor = 'Zoe Saldana';
$movie1->plot = 'Umani vanno su Pandora';

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