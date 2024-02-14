<?php
class Employee{

    protected int $_id;
    protected string $_name;
    protected int $_age;
    protected string $_gender;

    public function __construct($id, $name, $age, $gender)
    {
        $this->_id = $id;
        $this->_name = $name;
        $this->_age = $age;
        $this->_gender = $gender;

    }

    public function getId()
   {
          return $this->_id;
   }

   public function setId($id)
   {
          $this->_id = $id;
   }

   public function getName()
   {
          return $this->_name;
   }

   public function setName($name)
   {
          $this->_name = $name;
   }

   public function getAge()
   {
          return $this->_age;
   }

   public function setAge($age)
   {
          $this->_age = $age;
   }
   public function getGender()
   {
          return $this->_gender;
   }

   public function setGender($gender)
   {
          $this->_gender = $gender;
   }

    public function canMoveAnimal(Animal $animalToMove, Enclosure $destinationEnclos) : bool
    {
        /*
            tester le type d'animal
            et vérifier que l'enclos est compatible
        */
    }

}
    ?>