<?php

class EnclosManager {

    private PDO $dbConnexion;


    public function __construct(PDO $dbConnexion)
    {
        $this->dbConnexion = $dbConnexion;        
    }


    public function addEnclosureDb(Enclosure $enclos){
        $preparedRequest = $this->dbConnexion->prepare(
            "INSERT INTO enclos (name, zoo_id, cleanness, type, nbr_max_animals) VALUE (?,?,?,?,?)"
        );
        $preparedRequest->execute([
            $enclos->getName(),
            $enclos->getZooId(),
            $enclos->getCleanness(),
            $enclos->getType(),
            $enclos->getNbrMaxAnimals()
        ]);
    }

    public function findByZooID(Zoo $zoo){
        
        $preparedRequest = $this->dbConnexion->prepare(
            "SELECT * FROM enclos WHERE zoo_id = ?"
        );
        $preparedRequest->execute([$zoo->getId()]);

        $enclosArray = $preparedRequest->fetchAll(PDO::FETCH_ASSOC);

        foreach ($enclosArray as $line) {
            $enclos = new Enclosure($line);
            $zoo->addEnclos($enclos);
        }
    }
}