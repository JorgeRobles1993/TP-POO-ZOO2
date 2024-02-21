<?php
require '../../config/autoloader.php';
require '../../config/db.php';

$id_animal = $_GET['id_Animal'];

$animalManager = new AnimalManager($dbConnexion);
$animaldelete = $animalManager->DeleteAnimalById($id_animal);

header('Location:' . $_SERVER['HTTP_REFERER']);
