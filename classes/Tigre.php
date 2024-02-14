<?php

class Tigre extends Animal
{
    
    protected $_species;

    public function __construct($_namespecies, $_weight, $_size, $_age)
    {
        parent::__construct($_namespecies, $_weight, $_size, $_age);
        $this->_type = "TERRESTRE";
        $this->_species ="Tigre";
    }
    
    public function sound()
    {
        echo "Grrrrrrriiiiiiii";
    }


    public function getSpecies(){

       return $this->_species;
    }
}