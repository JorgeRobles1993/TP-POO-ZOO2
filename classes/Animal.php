<?php


class Animal 
{
    protected $_id;
    protected string $_namespecies;
    protected int $_weight;
    protected int $_size;
    protected int $_age;
    protected int $_health;
    protected bool $_isSleeping = false; 

    // METHODE


     public function eat()
     {
          echo "L'animal mange";
     }

    // GETTER & SETTER

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
          return $this->_namespecies;
   }

   public function setName($namespecies)
   {
          $this->_namespecies = $namespecies;
   }

   public function getWeight()
   {
          return $this->_weight;
   }

   public function setWeight($weight)
   {
          $this->_weight = $weight;
   }

   public function getSize()
   {
          return $this->_size;
   }

   public function setSize($size)
   {
          $this->_size = $size;
   }

   public function getAge()
   {
        return $this->_age;
   }

   public function setAge($age)
   {
          $this->_age = $age;
   }

   public function getSoin()
   {
          return $this->_health;
   }

   public function setSoin($soin)
   {
          $this->_health = $soin;
   }

   public function getIssleeping()
   {
          return $this->_isSleeping;
   }

 

   

}