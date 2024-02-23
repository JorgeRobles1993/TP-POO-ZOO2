<?php

class ZooManager
{
 private PDO $dbConnexion;

 // Methode

   public function __construct($dbConnexion)
    {
        $this->dbConnexion = $dbConnexion;
    }

    public function addZooDb(Zoo $zoo)
    {
        $preparedRequest = $this->dbConnexion->prepare('INSERT INTO `zoo`(`name`,`nbr_max_enclos`) VALUES (?,?)');
        $preparedRequest->execute([
          
            $zoo->getName(),
            $zoo->getNbrMaxEnclos()
            ]);  
    }

    public function getAll(){
        $preparedRequest = $this->dbConnexion->prepare(
            "SELECT * FROM zoo"
        );
        $preparedRequest->execute();

        $zoosArray = $preparedRequest->fetchAll(PDO::FETCH_ASSOC);
        $zoosArrayObject = [];
        foreach ($zoosArray as $line) {
            $zoo = new Zoo($line);
            $zoosArrayObject[]= $zoo;
        }
        return $zoosArrayObject;
    }

    public function getById($id){
        $preparedRequest = $this->dbConnexion->prepare(
            "SELECT * FROM zoo WHERE id = ?"
        );
        $preparedRequest->execute([$id]);

        $line = $preparedRequest->fetch(PDO::FETCH_ASSOC);
        $zoo = new Zoo($line);
        return $zoo;
    }

    public function DeleteZooById(int $zoo_id)
    {
        $preparedRequest = $this->dbConnexion->prepare("DELETE FROM zoo WHERE id = ?");
        $preparedRequest->execute([
            $zoo_id
        ]);
    }

 }


