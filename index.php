<?php
require_once __DIR__ . "/Models/General.php";


$usa = new General("Matrix", "English", 8);
// var_dump($usa);


$italy = new General("Tre Uomini e Una Gamba", "Italiano", 9);
// var_dump($italy);

// var_dump($usa->title, $usa->vote);
// var_dump($italy->title, $italy->vote);

// // For the Title
// $italy->getTitle();
// echo $italy->getTitle();

// $usa->getTitle();
// echo $usa->getTitle();

// // For the Language
// $italy->getLanguage();
// echo $italy->getLanguage();

// $usa->getLanguage();
// echo $usa->getLanguage();

// // For the Vote

// $italy->getVote();
// echo $italy->getVote();

// $usa->getVote();
// echo $usa->getVote();


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

    <h3><?= $italy->getTitle(); ?></h3>
    <p>Language: <?= $italy->getLanguage(); ?></p>
    <p>Vote: <?= $italy->getVote(); ?></p>

    <h3><?= $usa->getTitle(); ?></h3>
    <p>Language: <?= $usa->getLanguage(); ?></p>
    <p>Vote: <?= $usa->getVote(); ?></p>
</body>

</html>