<?php

include './partials/header.php';
include './config/autoloader.php';

$animal1 = new Poisson("Magikarp", 150, 30, 1, 2);
$animal2 = new Ours("Ted", 150, 210, 5);
$animal3 = new Aigle("Oiseau", 150, 80, 2, 2);
$animal4 = new Tigre("Tigre du bengale", 200, 110, 4);

echo $animal1->getInfos() .  "<br>";
echo $animal2->getInfos() .  "<br>"; 
echo $animal3->getInfos() .  "<br>";
echo $animal4->getInfos() .  "<br>";


?>
