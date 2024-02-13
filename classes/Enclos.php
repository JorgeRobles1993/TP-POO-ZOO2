<?php
class Enclos
{

    protected $_id;
    protected $_name;
    protected $_type;
    protected $_status; // (mauvaise, correcte, bonne)
    protected $_numberofanimals; // A SUPPRIMER, on connait le nombre d'animaux de l'enclos avec le nombre de ligne dans le tableau $_animals
    protected $_animals = [];
  
   // SUPPRIMER les paramètres $numberofanimals, $animals car à la création de l'enclos il est vide, il n'y a pas d'animaux dedans
    public function __construct($id, $name, $type ,$status, $numberofanimals, $animals)
    {
        $this->_id = $id;
        $this->_name = $name;
        $this->_type = $type;
        $this->_status = $status;
        // SUPPRIMER les lignes $this->_numberofanimals,  $this->_animals car à la création de l'enclos il est vide, il n'y a pas d'animaux dedans
        $this->_numberofanimals = $numberofanimals;
        $this->_animals = $animals;

    }

    public function getNumberOfAnimals()
    {
      return count($this->_animals);
      //BDD : select COUNT From animal ...
    }

    public function getIsEmpty()
    {
      // A FAIRE
    }
    public function getIsFull()
    {
      // A FAIRE
    }
    public function getIsAvailable()
    {
      // A FAIRE
    }

    public function clean()
    {
        echo "Je suis nettoyé";
    }
        
    public function getId()
    {
       return $this->_id;
    }

    public function setId($id)
    {
       return $this->_id = $id;
    }

    public function getName()
    {
       return $this->_name;
    }

    public function setName($name)
    {
       return $this->_name = $name;
    }

    public function getType()
    {
       return $this->_type;
    }

    public function setType($type)
    {
       return $this->_type = $type;
    }
        
    public function getStatus()
    {
       return $this->_status;
    }

    public function setStatus($status)
    {
       return $this->_status = $status;
    }
//A SUPPRIMER get/set de _numberofanimals
    public function getNumberofAnimals2()
    {
       return $this->_numberofanimals;
    }

    public function setNumberofAnimals($numberofanimals)
    {
       return $this->_numberofanimals = $numberofanimals;
    }

    public function getAnimals()
    {
       return $this->_animals;
    }

    public function setAnimals($animals)
    {
       return $this->_animals = $animals;
    }

}