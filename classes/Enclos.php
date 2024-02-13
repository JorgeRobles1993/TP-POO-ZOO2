<?php
class Enclos{

    protected $_id;
    protected $_name;
    protected $_type;
    protected $_status; // (mauvaise, correcte, bonne)
    protected $_numberofanimals;
    protected $_animals = [];

    public function __construct($id, $name, $type ,$status, $numberofanimals, $animals)
    {
        $this->_id = $id;
        $this->_name = $name;
        $this->_type = $type;
        $this->_status = $status;
        $this->_numberofanimals = $numberofanimals;
        $this->_animals = $animals;

    }

    public function clean()
    {
        echo "Je suis nettoyé";
    }

<<<<<<< HEAD
    public function getType()
    {
        return $this->_type;
    }

    public function setType($type)
    {
        $this->_type = $type;
    }
  
=======
        
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

    public function getNumberofAnimals()
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

>>>>>>> master
}