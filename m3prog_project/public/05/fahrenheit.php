<?php


echo $_GET["celsius"];
$input =  $_GET["celsius"];
$celsius = floatval($input);
 $fahrenheit = ($celsius * 1.8)+32;
 echo "{$celsius} graden Celsius = {$fahrenheit} graden Fahrenheit. <br/>";

?> 