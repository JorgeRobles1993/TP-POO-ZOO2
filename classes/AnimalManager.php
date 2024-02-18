<?php

class AnimalManager {

    private PDO $dbConnexion;


    public function __construct(PDO $dbConnexion)
    {
        $this->dbConnexion = $dbConnexion;        
    }


    public function addAnimalDb(Animal $animal){
        $preparedRequest = $this->dbConnexion->prepare(
            //  A FAIRE !
            //"INSERT INTO enclos (name, zoo_id, cleanness, type, nbr_max_animals) VALUE (?,?,?,?,?)"
        );
        $preparedRequest->execute([
                // A FAIRE
         /*   $enclos->getName(),
            $enclos->getZooId(),
            $enclos->getCleanness(),
            $enclos->getType(),
            $enclos->getNbrMaxAnimals()*/
        ]);
    }

    public function findByEnclosID(Enclosure $enclosure){
        
        $preparedRequest = $this->dbConnexion->prepare(
            
            //  A FAIRE 
            //"SELECT * FROM enclos WHERE zoo_id = ?"
        );                  
    $preparedRequest->execute(/*   A FAIRE     [$zoo->getId()]*/);

        $animalArray = $preparedRequest->fetchAll(PDO::FETCH_ASSOC);
/*      A FAIRE
        foreach ($enclosArray as $line) {
            $enclos = new Enclosure($line);
            $zoo->addEnclos($enclos);
        }*/
    }
}