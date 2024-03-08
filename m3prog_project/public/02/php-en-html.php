<?php
    $titelpagina = "Dinos";
    $image = "https://upload.wikimedia.org/wikipedia/en/c/c6/Jurassic_World_Fallen_Kingdom.png";
    $Titel = "Jurassic World Fallen Kingdom";
    $auteur = "Julnark"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php & HTML</title>
</head>
<body>
    <main>
    <h1><?php echo $titelpagina; ?></h1>
    <img src="<?php echo $image?>" alt="<?php echo $Titel?>" />
    <h2><?php echo $auteur; ?></h2>
    </main>
</body>
</html>