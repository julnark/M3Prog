<?php
include_once "functions.php";
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ritkosten</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="result">
        <?php echo "5 + 6 = <span class='green'>" . add(5, 6) . "</span><br>"; ?>
        <?php echo "20 - 5 = <span class='blue'>" . substract(20, 5) . "</span><br>"; ?>
        <?php echo "100 : 20 = <span class='orange'>" . divide(100, 20) . "</span><br>"; ?>
        <?php echo "20 x 5 = <span class='green'>" . multiply(20, 5) . "</span><br>"; ?>
    </div>

    <div class="result">
        <?php echo "Kosten naar Berlijn zijn : €<span class='green'>" . number_format(berekenRitkosten(663, 15, 1.90), 2) . "</span><br>"; ?>
        <?php echo "Kosten naar Stockholm zijn : €<span class='blue'>" . number_format(berekenRitkosten(1438, 20, 1.46), 2) . "</span><br>"; ?>
        <?php echo "Kosten naar Kiev zijn : €<span class='orange'>" . number_format(berekenRitkosten(1991, 18.47, 2.23), 2) . "</span><br>"; ?>
    </div>
</body>

</html>