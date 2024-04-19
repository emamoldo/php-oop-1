<?php
require_once __DIR__ . "/Models/General.php";
require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/Models/TvSeries.php";



$usa = new General("Matrix", "En", 8.7);
$italy = new General("Tre Uomini e Una Gamba", "Italiano", 9);


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies and Tv Series</title>
</head>

<body>
    <h1>Movies and Tv Series</h1>

    <h1>Movie:</h1>
    <h3><?= $usa->getTitle(); ?></h3>
    <p>Language: <?= $usa->getLanguage(); ?></p>
    <p>Vote: <?= $usa->getVote(); ?></p>
    <p>Profits: <?= $movieProfits->profits ?></p>
    <p>Duration: <?= $movieDuration->duration ?></p>

    <br>
    <hr>
    <br>

    <h1>Tv Serie:</h1>
    <h3><?= $seriesSeasons->getTitle(); ?></h3>
    <p>Language: <?= $seriesSeasons->getLanguage(); ?></p>
    <p>Vote: <?= $seriesSeasons->getVote(); ?></p>
    <p>Profits: <?= $seriesSeasons->profits ?></p>
    <p>Episodes: <?= $seriesSeasons->duration ?></p>
    <p>Seasons: <?= $seriesSeasons->seasons ?></p>


</body>

</html>