<?php
$afstand = 928.79; //van bordeaux naar amsterdam
$prijs = 1.89; //de prijs voor een liter
$ticket = 60; //voor een enkele treinreis
$tankinhoud = 50; //Tank in de auto
$verbruik = 15; //1liter per 15km
$liter = ceil($afstand / $verbruik); //hoeveel liter je verbruikt
$tank = ceil($liter / $tankinhoud);
$kosten = ceil($liter * $prijs);
echo "Je gebruikt $liter liter per $afstand km <br/>";
echo "Je moet $tank keer tanken <br/>";
echo "Wat je in totaal betaalt is $kosten <br/>";
if ($ticket > $kosten){
    echo"Ik ga met de trein";
} else if ($ticket < $kosten){
    echo "ik ga met de auto";
}

?>
