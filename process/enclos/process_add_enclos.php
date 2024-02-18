<?php
require '../../config/autoloader.php';
require '../../config/db.php';

if (!empty($_POST["name"]) && !empty($_POST["type"]) && !empty($_POST["zoo_id"]))
{

    $enclosure = new Enclosure($_POST);
    

    $EnclosManager = new EnclosManager($dbConnexion);
    $EnclosManager->addEnclosureDb($enclosure);
    
}
header('Location: ../../zoo.php?zoo_id='.$_POST["zoo_id"]);