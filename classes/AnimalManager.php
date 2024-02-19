<?php

class AnimalManager {

    private PDO $dbConnexion;


    public function __construct(PDO $dbConnexion)
    {
        $this->dbConnexion = $dbConnexion;        
    }


    public function addAnimalDb(Animal $animal){
        $preparedRequest = $this->dbConnexion->prepare(
            "INSERT INTO animals (name, namespecies, weight, size, age, health, type, enclos_id) VALUE (?,?,?,?,?,?,?,?)"
        );
        $preparedRequest->execute([
            $animal->getName(),
            $animal->getNamespecies(),
            $animal->getWeight(),
            $animal->getSize(),
            $animal->getAge(),
            $animal->getSoin(),
            $animal->getType(),
            $animal->getEnclosId()
        ]);
    }

    public function findByEnclosId(Enclosure $enclosure){
        
        $preparedRequest = $this->dbConnexion->prepare(
            "SELECT * FROM animals WHERE enclos_id = ?"
        );                  
        $preparedRequest->execute([$enclosure->getId()]);

        $animalArray = $preparedRequest->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($animalArray as $line) {
            $animal = new $line['namespecies']($line);
            $enclosure->addAnimal($animal);
        }
        return $enclosure;
    }

    public function getByEnclosId($id){
        $preparedRequest = $this->dbConnexion->prepare(
            "SELECT * FROM animals WHERE id = ?"
        );
        $preparedRequest->execute([$id]);
    
        $line = $preparedRequest->fetch(PDO::FETCH_ASSOC);
        $enclos = new Enclosure($line);
        return $enclos;
    }
}