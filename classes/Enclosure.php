<?php
class Enclosure
{

    protected $_id;
    protected $_name;
    protected $_type;
    protected $_status; // (mauvaise, correcte, bonne)
    protected $_animals = [];
  
    public function __construct($id, $name, $type ,$status)
    {
        $this->_id = $id;
        $this->_name = $name;
        $this->_type = $type;
        $this->_status = $status;
    }

    public function getNumberOfAnimals()
    {
      return count($this->_animals);
      //BDD : select COUNT From animal ...
    }

    public function getIsEmpty()
    {
      if($this->getNumberOfAnimals() == 0){
         return true;
    }
   }

    public function getIsAvailable()
    {
      // *A FAIRE
      if($this->getNumberOfAnimals() < 6){
         return true;
      }else{
         return false;
      }
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

    public function getAnimals()
    {
       return $this->_animals;
    }

    public function setAnimals($animals)
    {
       return $this->_animals = $animals;
    }
  //  renvoie une chaine de texte avec les informations communes des animaux
      public function getInfos()
  {
 
      return      "Id = " . $this->getId() . "<br/>" .
                  "Name = " . $this->getName() . "<br/>" . 
                  "Status = " . $this->getStatus() . "<br/>" .
                  "Type = " . $this->getType() . "<br/>"; 
  }

}