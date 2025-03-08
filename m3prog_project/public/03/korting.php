<?php

$totaalBesteld = 1000.0;
$verzendkosten = 3.50;
$korting = 0.05;
$korting2 = 0.075;
$cadeautje=false;
$totaal = $totaalBesteld - ($korting*$totaalBesteld) + ($verzendkosten);

if ($totaalBesteld >= 100)
{
$totaal = $totaal - ($verzendkosten);
}
if ($totaalBesteld >= 250)
{
$totaal = $totaal - ($korting*$totaalBesteld);
}
if ($totaalBesteld >= 400)
{
echo "U krijgt ook een cadeautje ter waarde van 10 euro</br>";
}
if ($totaalBesteld >= 1000)
{
$totaal = $totaal - ($korting2*$totaalBesteld);
}
if ($totaalBesteld >= 1000)
{
echo "U krijgt een extra cadeautje ter waarde van 40 euro</br>";
}

echo "Totaal van de bestelde artiekelen $totaalBesteld</br>";
echo "Totaal met verzendkosten wordt het $totaal</br>";


?>