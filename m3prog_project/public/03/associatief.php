<?php 
$verbruik = ['Wasdroger' => 230, 'Vaatwasser' => 250, 'stofzuiger' => 80 ,'Kookplaat' => 180, 'Stoomcabine' => 180];

foreach($verbruik as $apparaat => $verbruik){
    echo $apparaat . "=" . $verbruik . "<br/>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associatief</title>
</head>
<body>
    <?php
    $verbruik = ['Wasdroger' => 230, 'Vaatwasser' => 250, 'stofzuiger' => 80 ,'Kookplaat' => 180, 'Stoomcabine' => 180];
foreach ($verbruik as $apparaat => $verbruik_waarde) {
    echo "<h2>Naam van het apparaat: " . $apparaat . "</h2>";
    echo "<p>Verbruik: " . $verbruik_waarde . " watt</p>";
};
$totaal = 0; 

foreach ($verbruik as $apparaat => $verbruik_waarde) {
    $totaal += $verbruik_waarde;
}

echo "<h2>Totaal verbruik: </h2>" . $totaal;



?>
</body>
</html>