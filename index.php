<?php
require_once __DIR__ . "/Models/General.php";


$usa = new General("Gli Usa", "English", 8);
var_dump($usa);


$italy = new General("L'Italia", "Italiano", 9);
var_dump($italy);

var_dump($usa->title, $usa->vote);
var_dump($italy->title, $italy->vote);


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oop</title>
</head>

<body>
    <h1>Oop</h1>
</body>

</html>