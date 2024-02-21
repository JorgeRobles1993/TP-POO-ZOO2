<?php
require '../../config/autoloader.php';
require '../../config/db.php';

// passser lid de l'animal dans lurl pour venir au process
//      CEST FAIT

// on le mets dans une variable $id
$id_animal = $_GET['id_Animal'];
$id_enclos = $_GET['id_Enclos'];
 
// new animal manager 
$animalManager = new AnimalManager($dbConnexion);

$enclos = $animalManager->getByEnclosId($id_animal);

echo "<pre>";
var_dump($enclos);
echo "</pre>";

$animalEnclos = $animalManager->LoadAnimalEnclos($enclos);

echo "<pre>";
var_dump($animalEnclos);
echo "</pre>";


// et utiliser la methode getanimal by id (on lui passe en paramettre l id quon, recupere en haut)

// $animal = $a->LoadAnimalById($id);
// var_dump($animal);
// die;

// on creer la methode delete aznimals dans le animals manager et on l'apelle ici 