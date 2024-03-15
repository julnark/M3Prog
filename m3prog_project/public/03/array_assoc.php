<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associatieve Arrays</title>
</head>
<body>
    <table>
        <tr>
            <th>Dagen</th>
            <th>Graden</th>
        </tr>
        <tr>
            <td>Maandag</td>
            <td>13</td>
        </tr>
        <tr>
            <td>Dinsdag</td>
            <td>15</td>
        </tr>
        <tr>
            <td>Woensdag</td>
            <td>14</td>
        </tr>
        <tr>
            <td>Donderdag</td>
            <td>12</td>
        </tr>
        <tr>
            <td>Vrijdag</td>
            <td>12</td>
        </tr>
        <tr>
            <td>Zaterdag</td>
            <td>9</td>
        </tr>
        <tr>
            <td>Zondag</td>
            <td>11</td>
        </tr>
    </table>
    <?php $vandaag = "Maandag";
    $graden = 13;
    $morgen = "Dinsdag";
    $graden1 = 15;
    $gister = "Woensdag";
    $graden2 = 14;
    $overmorgen = "Donderdag";
    $graden3 = 12;
    ?>
    
    <p>Vandaag is het <?=$vandaag;?> en is het <?=$graden;?> graden </p>
    <p>Vandaag is het <?=$morgen;?> en is het <?=$graden1;?> graden </p>
    <p>Vandaag is het <?=$gister;?> en is het <?=$graden2;?> graden </p>
    <p>Vandaag is het <?=$overmorgen;?> en is het <?=$graden3;?> graden </p>
    <?php
    $dagen = ['Maandag' => 13, 'Dinsdag' => 15, 'Woensdag' => 14, 'Donderdag' => 12, 'Vrijdag' => 12, 'Zaterdag' => 9, 'Zondag' => 11];
    print_r ($dagen);
    ?>
</body>
</html>