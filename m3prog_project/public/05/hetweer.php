<?php

$voorspelling = [
    "ma" => "de voorspellingen voor maandag is 20 geraden",
    "di" => "de voorspellingen voor dinsdag is 16 geraden",
    "wo" => "de voorspellingen voor woensdag is 14 geraden",
    "do" => "de voorspellingen voor vrijdag is 12 geraden",
    "vr" => "de voorspellingen voor vrijdag is 5 geraden",
    "za" => "de voorspellingen voor zaterdag is 3 geraden",
    "zo" => "de voorspellingen voor zondag is 9 geraden"
];

$input =  $_GET["dag"];
echo  $voorspelling[$input];



$voorspelling2 = [
    "ma" => "img/sun.png",
    "di" => "img/cloud.png",
    "wo" => "img/rain.png",
    "do" => "/5/img/thunder.png",
    "vr" => "/5/img/snow.png",
    "za" => "/5/img/snow.png",
    "zo" => "/5/img/rain.png"
];
echo "</br>";


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>het weer</title>
</head>
<body>
    <img src="<?php echo $voorspelling2[$input]; ?>">
</body>
</html>