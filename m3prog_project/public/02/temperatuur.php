<?php
//Fahrenheit naar Celsius
$fahrenheit = 74;
$celsius = ($fahrenheit - 32) / 1.8;
echo "{$fahrenheit} graden Fahrenheit = {$celsius} graden Celsius. <br/>";

//Celsius naar Fahrenheit
$celsius = 50;
$fahrenheit = ($celsius * 1.8) + 32;
echo "{$celsius} graden Celsius = {$fahrenheit} graden Fahrenheit. <br/>";

//Celsius naar Kelvin
$celsius = 30;
$kelvin = ($celsius + 273.15);
echo "{$celsius} graden Celsius = {$kelvin} graden Kelvin. <br/>";

//Fahrenheit naar Kelvin
$fahrenheit = 82;
$kelvin = ($fahrenheit -32) * 1.8 + 273.15;
echo "{$fahrenheit} graden Fahrenheit = {$kelvin} graden Kelvin";
?>