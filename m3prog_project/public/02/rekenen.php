<?php 
$getal = 10912.89547;
$afgerond = ceil ($getal);
echo "Als je $getal afrond dan krijg je: $afgerond <br/>";

$getal2 = 10912.89547;
$afgerond = floor ($getal2);
echo "Als je $getal2 afrond dan krijg je: $afgerond <br/>";

$nummer1 = rand(1, 20);
$nummer2 = rand(1, 20);
$nummer3 = rand(1, 20);
$nummer4 = ($nummer1 + $nummer2);
$nummer5 = ($nummer4 / $nummer3);
echo "$nummer1 + $nummer2 is $nummer4 <br/>";
echo "$nummer4 gedeeld door $nummer3 is $nummer5";
?>