<?php

$afstand = 928.45; 
$prijs_per_liter = 1.89; 
$prijs_trein = 60.00; 
$tankinhoud = 50; 
$verbruik_per_km = 1 / 15; 


$liter_verbruikt = $afstand * $verbruik_per_km;
$aantal_tankbeurten = ceil($liter_verbruikt / $tankinhoud);
$kosten_auto = $liter_verbruikt * $prijs_per_liter;

if ($kosten_auto > $prijs_trein) 
{
    $keuze = "Ik ga met de trein.";
} else 
{
    $keuze = "Ik ga met de auto.";
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reiskosten Berekening</title>
</head>
<body>
    <h2>Reiskosten Berekening</h2>
    <p>Totale afstand: <?= number_format($afstand, 2); ?> km</p>
    <p>Totale kosten met de auto: €<?= number_format($kosten_auto, 2); ?></p>
    <p>Aantal liter benzine verbruikt: <?= number_format($liter_verbruikt, 2); ?> liter</p>
    <p>Aantal keren tanken: <?= $aantal_tankbeurten; ?></p>
    <p>Keuze: <?= $keuze; ?></p>
</body>
</html>
