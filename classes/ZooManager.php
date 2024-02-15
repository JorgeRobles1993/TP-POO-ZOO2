<?php


class ZooManager
{
 private PDO $dbConnexion;

 // Methode

   public function __construct($dbConnexion)
    {
        $this->dbConnexion = $dbConnexion;
    }



    public function addZooDb($nameZoo)
    {
        $preparedRequest = $this->dbConnexion->prepare('INSERT INTO `zoo`(`name`,`n_enclos`) VALUES (?,?)');
        $preparedRequest->execute([
            $nameZoo,
            0
        ]);

    }
 }


