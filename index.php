<?php
require_once __DIR__ . '/data/db.php';
require_once __DIR__ . '/models/Actor.php';
require_once __DIR__ . '/models/Director.php';
require_once __DIR__ . '/models/Movie.php';q





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