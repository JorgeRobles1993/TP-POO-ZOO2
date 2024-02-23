<?php

class AnimalManager {

    private PDO $dbConnexion;

    public function __construct(PDO $dbConnexion)
    {
        $this->dbConnexion = $dbConnexion;        
    }

    public function getAnimalById($animal_id)
    {
        $preparedRequest = $this->dbConnexion->prepare(
            "SELECT * FROM `animals` WHERE id = ?"
        );
        $preparedRequest->execute([
            $animal_id
        ]);
        $animal = $preparedRequest->fetch(PDO::FETCH_ASSOC);
        return $animal;

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

public function DeleteAnimalById(int $animal_id)
{
    $preparedRequest = $this->dbConnexion->prepare("DELETE FROM animals WHERE id = ?");
    $preparedRequest->execute([
        $animal_id
    ]);
}
 
public function RandomEatLevel(array $animal)
{

        switch ($animal['hungry']) {
            case $animal['hungry'] <= 10:
                $hungerLevel = $animal["hungry"] + rand(50, 90);
                break;
            case $animal['hungry'] <= 20:
                $hungerLevel = $animal["hungry"] + rand(40, 80);
                break;
            case $animal['hungry'] <= 30:
                $hungerLevel = $animal["hungry"] + rand(30, 70);
                break;
            case $animal['hungry'] <= 40:
                $hungerLevel = $animal["hungry"] + rand(20, 60);
                break;
            case $animal['hungry'] <= 50:
                $hungerLevel = $animal["hungry"] + rand(10, 50);
                break;
            case $animal['hungry'] <= 60:
                $hungerLevel = $animal["hungry"] + rand(0, 40);
                break;
            case $animal['hungry'] <= 70:
                $hungerLevel = $animal["hungry"] + rand(0, 30);
                break;
            case $animal['hungry'] <= 80:
                $hungerLevel = $animal["hungry"] + rand(0, 20);
                break;
            case $animal['hungry'] <= 99:
                $hungerLevel = $animal["hungry"] + rand(0, 1);
                break;
            default:  
            $EnclosManager = new EnclosManager($this->dbConnexion);
            $enclos = $EnclosManager->getEnclosById($animal["enclos_id"]);
            header("Location: ../../enclosures.php?enclos_id=". $animal["enclos_id"]."&Enclos_type=". $enclos->getType());
            break;
       }
       $preparedRequest = $this->dbConnexion->prepare("UPDATE `animals` SET `hungry`=? WHERE id = ?");
       $preparedRequest->execute([
            $hungerLevel,
           $animal["id"]
       ]);
}

public function malade()
     {


     }

}
