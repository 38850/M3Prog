<?php 
$titel = "Een php html voorbeeld pagina";
$afbeelding = "https://hips.hearstapps.com/hmg-prod/images/dog-puppy-on-garden-royalty-free-image-1586966191.jpg";
$altmedia = "Een hond in het grass";
$Auteur = "Daniel";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$titel"; ?></title>
</head>
<body>
<main>
<img src="<?php echo "$afbeelding";?>" alt="<?php echo "$altmedia";?>">
<section> <?= "$Auteur"; ?></section>
</main>
</body>
</html>