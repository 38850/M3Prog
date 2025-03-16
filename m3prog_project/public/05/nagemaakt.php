<?php
$dezeGaatMee = "deze waarde wordt mee genoomen";

function mijnPrint($printText)
{
print("$printText");
print("<br>");
}

mijnPrint("regel 1");

mijnPrint("regel 2");

mijnPrint("regel 3");

mijnPrint("Dit gaat vast fout omdat er niets is te printen");

mijnPrint("$dezeGaatMee");

?>