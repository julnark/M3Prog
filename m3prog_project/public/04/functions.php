<?php
function currentDateTime()
{
    echo date('d-m-Y H:i:s');
};
currentDateTime();

function add($getal1, $getal2)
{
    $som = $getal1 + $getal2;
    return $som;
};

function substract($getal3, $getal4)
{
    $sub = $getal3 - $getal4;
    return $sub;
};

function divide($getal5, $getal6)
{
    $div =  $getal5 / $getal6;
    return $div;
};

function multiply($getal7, $getal8)
{
    $mult = $getal7 * $getal8;
    return $mult;
};
