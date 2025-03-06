<?php

$totaalBesteld = 100.0;
$verzendkosten = 3.50;
$korting = 0;
$cadeautje=false;

if ($totaalBesteld >= 100)
{

}
$totaal = $totaalBesteld - ($korting*$totaalBesteld) + ($verzendkosten);

echo "Totaal van de bestelde artiekelen $totaalBesteld</br>";
echo "Totaal met verzendkosten wordt het $totaal</br>";

//hier moet een if omheen dat doen we later
echo "U krijgt ook een cadeautje ter waarde van 10 euro</br>";
?>