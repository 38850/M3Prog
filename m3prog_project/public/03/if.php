<?php
$eenBoolVariable = false;
$aantalOpVoorraad = 20;
$opvoorraad = $aantalOpVoorraad > 0;

if ($opvoorraad == false)
{
    echo "niet op voorraad";
} else 
{
    echo "Artikel is op voorraad";
}
?>
