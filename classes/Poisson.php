<?php

class Poisson extends Animal
{
    protected string $_species;

    public function __construct($_namespecies, $_weight, $_size, $_age)
    {
        parent::__construct($_namespecies, $_weight, $_size, $_age);
        $this->_type = "Aquatique";
        $this->_species = "Poisson";
    }
    

    public function sound()
    {
        echo "Bloop Bloop";
    }

    public function getSpecies(){

        return $this->_species;
     }
}