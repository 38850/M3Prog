<?php
$TYPEGERECHT = "hoofd";
$NAAMGERECHT = "Rigatoni";
$PRIJS = 14.55;
$BESCHRIJVING = "Een lekkere romige Pasta";
$INGREDIENTENLIJST = "mezzi rigatoni, pancetta, knoflook, Pecorino Romano, 'nduja, Pecorino Romano, eieren";
$ALLERGENENLIJST = "Varken vlees, knoflook, Lactose intolerantie";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>
Gerecht type: <?= "$TYPEGERECHT";"<br>";?>
<?= "<br>"; ?>
<?= "<br>"; ?>
<?= "$NAAMGERECHT"; "€$PRIJS"; "<br>"; ?>
<?= "<br>"; ?>
<?= "<br>"; ?>
<?= "$BESCHRIJVING"; "<br>"; ?>
<?= "<br>"; ?>
Ingegredientenlijst: <?= "<br>"; ?>
<?= "$INGREDIENTENLIJST";"<br>"; ?>
<?= "<br>"; ?>
<?= "<br>"; ?>
Bent u allergisch? bekijk dan hieronder de allergenen: <?="<br>"; ?>
<?= "$ALLERGENENLIJST";"<br>"; ?>
</main>
</body>
</html>
