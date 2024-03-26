<?php
$games = ["Rocket league", "Phasmo", "GTA", "roblox", "fortnite"];
print_r($games);
echo "<br>";
echo $games[3];
echo "<br>";

print_r($games);
echo "<br>";
var_dump($games);

echo "<br>";
echo count($games);

echo "<br>";
array_push($games, "Kat cafe");
print_r($games);

echo "<br>";
sort($games);
echo implode(" ", $games);
