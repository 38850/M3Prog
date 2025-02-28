<?php

$standardString = 'hello world<br>';
$extraString = 'extra world<br>';
$voornaam = 'luigi';
$achternaam = 'mario';
$naam = "Yoshi";
$ondertekentDoor = "directeur bowser";
$emailText = "
Beste $naam<br>
Helaas moeten wij uw verzoek afwijzen.<br>
Onze Goomba's vinden het niet leuk om opgegeten te worden<br>
<br>
Hoogachtend<br>
$ondertekentDoor<br>
<br>
PS:<br>
De princess is in haar kasteel... voor nu :>
";

echo "$standardString";
echo "$extraString";
echo "$voornaam " . "$achternaam";
echo "<br>";
echo "<br>";
echo "$emailText";

?>