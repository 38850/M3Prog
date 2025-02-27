
<?php
// Fahrenheit naar Celsius
$fahrenheit = 74;
$celsius = ($fahrenheit - 32) / 1.8;
echo "{$fahrenheit} graden Fahrenheit = {$celsius} graden Celsius. <br/>";
// Celsius naar Fahrenheit
$celsius = 32;
$fahrenheit = ($celsius * 1.8) + 32;
echo "{$celsius} graden Celsius = {$fahrenheit} graden Fahrenheit. <br/>";
// Celsius naar Kelvin
$celsius = 32;
$Kelvin = ($celsius + 273.15);
echo "{$celsius} graden Celsius = {$Kelvin} graden Kelvin. <br/>";
// fahrenheit naar Kelvin 
$fahrenheit = 74;
$Kelvin = ($fahrenheit - 32) * 1.8 + 273.15;
echo "{$fahrenheit} graden fahrenheit = {$Kelvin} graden Kelvin. <br/>";
?>