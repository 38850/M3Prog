<?php

$announcements = 
[
    "a.html",
    "b.html",
    "c.html",
];

$games =
[
    ["demon's souls",10],
    ["mario wonder",9.5],
    ["mega man 2",8],
]

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$announcement= $announcements[$i];
include "announcements/$announcements";
?>
</body>
</html>