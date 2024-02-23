<?php


abstract class Animal 
{
       protected $_id;
       protected string $_name;
       protected string $_namespecies;
       protected int $_weight;
       protected int $_size;
       protected int $_age = 0;
       protected int $_health = 100;
       protected bool $_isSleeping = false;  
       protected string $_type;
       protected int $_enclos_id;
       protected int $_hungry;


    public function __construct(array $data)
{
    $this->hydrate($data);
}    

public function hydrate(array $data){
    foreach ($data as $key => $value) {
        $method = 'set' . str_replace(' ', '', ucwords(str_replace('_', ' ', $key)));
        if (method_exists($this, $method)) {
            $this->$method($value);
        }
    }
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
              return $this->_name;
       }

       public function setName($name)
       {
              $this->_name = $name;
       }
       public function getNamespecies()
       {
              return $this->_namespecies;
       }

       public function setNamespecies($namespecies)
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

       public function getType()
       {
              return $this->_type;
       }

       public function setType($type)
       {
              $this->_type = $type;
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

       public function getEnclosId(){
              return $this->_enclos_id;
          }
       public function setENclosId($enclos_id){
              $this->_enclos_id = $enclos_id;
          }
       
       //  renvoie une chaine de texte avec les informations communes des animaux
       public function getInfos()
       {
              return "Type = " . $this->getType() . "<br/>" .
                     "Name = " . $this->getName() . "<br/>" . 
                     "Size = " . $this->getSize() . "<br/>" .
                     "Age = " . $this->getAge() . "<br/>" .
                     "Specie = " . $this->getNamespecies() . "<br/>";
       }


       public function getHungry()
       {
              return $this->_hungry;
       }

       
       public function setHungry($_hungry)
       {
              $this->_hungry = $_hungry;
       }
}