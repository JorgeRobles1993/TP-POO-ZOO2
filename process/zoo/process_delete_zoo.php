<?php
require '../../config/autoloader.php';
require '../../config/db.php';

$id_zoo = $_GET['id_zoo'];

$zooManager = new ZooManager($dbConnexion);
$zoodelete = $zooManager->DeleteZooById($id_zoo);

header('Location:' . $_SERVER['HTTP_REFERER']);
