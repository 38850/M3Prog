<?php
$games = ["Demonsouls", "Darksouls 1", "Darksouls 2", "Darksouls 3", "Sekiro Shadows Die Twice", "Elden Ring", "Elden Ring Shadow Of The Erdtree",];
print_r($games);
echo "<br> </br>";
echo count($games)."<br>";
echo "$games[3]</br>";
echo "$games[5]</br>";
array_push($games, "Night Reign");
echo count($games);
echo "<br> </br>";
sort($games);
echo implode($games);
?>