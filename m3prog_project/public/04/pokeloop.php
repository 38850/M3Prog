<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon Galerij</title>
    <link rel="stylesheet" href="css/pokeloop.css">
</head>
<body>
    <?php
$pokemons = ["onyx", "pikachu", "snorlax", "magicarp", "mewtwo"];
$images = 
[
    "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/095.png", 
    "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/025.png",
    "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/143.png",
    "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/129.png",
    "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/150.png"
];

    
    echo "<div class='gallery'>";
    for ($i = 0; $i < count($pokemons); $i++) {
        echo "<div class='pokemon-card'>";
        echo "<h1>" . $pokemons[$i] . "</h1>";
        echo "<img src='" . $images[$i] . "' alt='" . $pokemons[$i] . "'>";
        echo "</div>";
    }
    echo "</div>";
    ?>
</body>
</html>
