<?php
require '../../config/autoloader.php';
require '../../config/db.php';

$type = $_GET['Enclos_type'];

if (!empty($_POST["namespecies"]) && !empty($_POST["type"]) && !empty($_POST["enclos_id"]))
{

    $AnimalManager = new AnimalManager($dbConnexion);
    
    $animal = new Ours($_POST);
    $AnimalManager->addAnimalDb($animal);    
    
}
header('Location: ../../enclosures.php?enclos_id='.$_POST["enclos_id"].'&Enclos_type='.$type);