<?php 
require '../../config/autoloader.php';
require '../../config/db.php';


if (!empty($_POST["id_animal"])) {
    $animal_id = $_POST["id_animal"];



    $AnimalManager = new AnimalManager($dbConnexion);
    $animal = $AnimalManager->getAnimalById($animal_id);
    $EnclosManager = new EnclosManager($dbConnexion);
    $enclos = $EnclosManager->getEnclosById($animal["enclos_id"]);
    $AnimalManager->RandomEatLevel($animal);


    header("Location: ../../enclosures.php?enclos_id=". $animal["enclos_id"]."&Enclos_type=". $enclos->getType());
}
