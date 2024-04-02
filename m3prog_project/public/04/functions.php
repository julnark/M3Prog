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

function berekenRitkosten($afstand_km, $km_per_liter, $liter_prijs)
{
    $kosten_euro = 0;
    $aantal_liters = $afstand_km / $km_per_liter;
    $kosten_euro = $aantal_liters * $liter_prijs;
    return $kosten_euro;
};

function berekenVliegkosten($afstandkm, $kerosine_prijs, $kilo_bagage, $class)
{
    $kosten_reis = ($kerosine_prijs * $afstandkm) / 30;
    $prijs_bagage = ($kilo_bagage * 5);
    $kosten_totaal = $kosten_reis + $prijs_bagage;

    if ($class === 'business') {
        $kosten_totaal = $kosten_totaal * 1.5;
    };

    return $kosten_totaal;
};
