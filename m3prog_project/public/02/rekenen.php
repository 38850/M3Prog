<?php
$getal1 = 5.2019;
$getal2 = 1.6007;
$random1 = rand(1.000, 10.000);
$random2 = rand(1.000, 10.000);
$random3 = rand(1.000, 10.000);
$afgerond1 = round($getal1);
$afgerond2 = round($getal2);
$afgerond3 = round($random1);
$afgerond4 = round($random2 + $random2);
$afgerond5 = round($afgerond4 / $random3);

echo "$afgerond1";
echo "<br>";
echo "$afgerond2";
echo "<br>";
echo "$afgerond3";
echo "<br>";
echo "$afgerond4";
?>