<?php
require '../../config/autoloader.php';
require '../../config/db.php';

if (!empty($_POST["name"])) {

    $zoo = new Zoo($_POST);
    

    $zooManager = new ZooManager($dbConnexion);
    $zooManager->addZooDb($zoo);
    
}
header('Location: ../../index.php');