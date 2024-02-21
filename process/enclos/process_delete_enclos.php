<?php
require '../../config/autoloader.php';
require '../../config/db.php';

$id_enclos = $_GET['id_Enclos'];

$enclosManager = new EnclosManager($dbConnexion);
$enclosdelete = $enclosManager->DeleteEnclosById($id_enclos);

header('Location:' . $_SERVER['HTTP_REFERER']);
