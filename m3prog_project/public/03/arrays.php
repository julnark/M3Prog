<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $namen = ["Milan", "MAMA", "Limar", "Lily", "Dexter"];
  echo count($namen);
  echo "<br>";
  sort($namen);
  echo implode(" ", $namen);
  echo "<br>";
  print_r($namen);
  echo "<br>";
  array_pop($namen);
  print_r($namen);
  echo "<br>";
  array_push($namen, "Chenoa");
  print_r($namen);
  echo "<br>";
  $namen[5] = "Milan";
  print_r($namen);
  echo "<br>";

  $namen_tekst = implode(" ", $namen);
  echo ($namen_tekst);
  echo "<br>";

  $namen_array = explode(" ", $namen_tekst);
  print_r($namen_array);

  ?>
</body>

</html>