<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop</title>
</head>
<body>
    <?php
    $pokemons = ["Snorlax", "Mimikyu", "Gengar", "Rayquaza", "Bidoof"];
    $images = [
    "Snorlax" => "https://assets.pokemon.com/assets/cms2/img/pokedex/full/143.png",
    "Mimikyu" => "https://assets.pokemon.com/assets/cms2/img/pokedex/full/778.png",
    "Gengar" => "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/094.png",
    "Rayqyaza" => "https://assets.pokemon.com/assets/cms2/img/pokedex/full/384.png",
    "Bidoof" => "https://assets.pokemon.com/assets/cms2/img/pokedex/full/399.png"
];

for ($i = 0; $i < count($images); $i++) {
    echo "Index: $i - Pokémon: " . array_keys($images)[$i] . " - Afbeeldings-URL: " . array_values($images)[$i] . "<br>";
};

foreach ($images as $name => $url) {
    echo "<h1>$name</h1>"; // Naam tussen <h1> tags
    echo "<img src='$url' alt='$name'><br>"; // Afbeeldings-URL in src van <img> tag
};
    ?>
</body>
</html>